<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Libraries\CIAuth;
use App\Models\HotelModel;
use App\Models\HotelLocationModel;
use App\Models\AmenitiesModel; //
use App\Models\HotelAmenitiesModel; //
use App\Models\HotelGalleyModel;
use App\Models\HotelFinanceModel; //
use App\Models\HotelPoliciesModel; //
use App\Libraries\FileUploader;
use App\Libraries\Slug;

class Addproperty extends BaseController
{
    protected $helpers = ['url', 'form'];
    public function index($tab = 'tab1', $hotelId = null)
    {
        $admindata = CIAuth::admin();
        $hModel = new HotelModel();
        $hData = $hModel->where('id', $hotelId)->first();
        $hlModel = new HotelLocationModel();
        $hlData = $hlModel->where('hotel_id', $hotelId)->first();
        $amModel = new AmenitiesModel();
        $amsData = $amModel->getAmsWithCat();
        $hAmModel = new HotelAmenitiesModel();
        $hamData = $hAmModel->where('hotel_id', $hotelId)->first();
        $hGModel = new HotelGalleyModel();
        $hGData = $hGModel->where('hotel_id', $hotelId)->first();
        $hFModel = new HotelFinanceModel();
        $hFData = $hFModel->where('hotel_id', $hotelId)->first();
        $hPoModel = new HotelPoliciesModel();
        $hPoData = $hPoModel->where('hotel_id', $hotelId)->first();
        $data = [
            'pageTitle' => 'add-property',
            'activeTab' => $tab,
            'hotelId'   => $hotelId,
            'errors'    => session()->getFlashdata('errors'),
            'success'   => session()->getFlashdata('success'),
            'admindata' => $admindata,
            'hData'     => $hData,
            'hlData'    => $hlData,
            'amsData'   => $amsData,
            'hamData'   => $hamData,
            'hgData'    => $hGData,
            'hfData'    => $hFData,
            'hpoData'   => $hPoData,
        ];
        return view('fronts/admin/templates/Layout', $data)
            . view('fronts/admin/templates/Vertical-nav')
            . view('fronts/admin/templates/Top-nav')
            . view('fronts/admin/templates/Page-js')
            . view('fronts/admin/Add-property')
            . view('fronts/admin/templates/Footer')
            . view('fronts/admin/templates/Jsmain');
    }

    public function saveHotel($hotelId = null)
    {
        $rules = [
            'property-name' => 'required|min_length[3]',
            'description'   => 'required|min_length[10]',
            'rating'        => 'required',
            'email'         => 'required|valid_email',
            'phone'         => 'required|regex_match[/^[0-9]{10,15}$/]',
            'thumbnail'     => 'uploaded[thumbnail]|mime_in[thumbnail,image/jpg,image/jpeg,image/png,image/webp]|max_size[thumbnail,2048]',
        ];
        $messages = [
            'property-name' => [
                'required'    => 'Property name is required.',
                'min_length'  => 'Property name must be at least 3 characters.',
            ],
            'description' => [
                'required'    => 'Description is required.',
                'min_length'  => 'Description must be at least 10 characters.',
            ],
            'rating' => [
                'required'    => 'Rating is required.',
            ],
            'email' => [
                'required'     => 'Email is required.',
                'valid_email'  => 'Enter a valid email address.',
            ],
            'phone' => [
                'required'     => 'Phone number is required.',
                'regex_match'  => 'Enter a valid phone number (10-15 digits).',
            ],
            'thumbnail' => [
                'uploaded'  => 'Please upload a thumbnail image.',
                'mime_in'   => 'Thumbnail must be a jpg, jpeg, png, or webp image.',
                'max_size'  => 'Thumbnail size must be under 2MB.',
            ],
        ];
        $formData = $this->request->getPost();

        // chain_name based on checkIsHotelRadio yes or no 
        // Conditionally add chain_name validation
        if (isset($formData['checkIsHotelRadio']) && $formData['checkIsHotelRadio'] === 'yes') {
            $rules['chain_name'] = 'required|min_length[2]';
        } else {
            $formData['chain_name'] = null;
        }

        // Validation 
        if (!$this->validate($rules, $messages)) {
            return redirect()->to('/admin/add_property/tab1')->withInput()->with('errors', $this->validator->getErrors());
        }

        // Thumbnail upload 
        $file = $this->request->getFile('thumbnail');
        // $uploader = new FileUploader(ROOTPATH . 'public/uploads/hotel-thumbnails');
        $uploader = new FileUploader(WRITEPATH . 'uploads/hotel-thumbnails');

        $result = $uploader->upload($file);

        if (!$result['status']) {
            return redirect()->to('/admin/add_property/tab1')->withInput()->with('errors', $result['message']);
        }

        $formData['thumbnail'] = $result['file_name'];

        $insertableData = [
            'property_name'     => $formData['property-name'],
            'description'       => $formData['description'],
            'rating'            => $formData['rating'],
            'email'             => $formData['email'],
            'phone'             => $formData['phone'],
            'chain_name'        => $formData['chain_name'],
            'thumbnail'         => $formData['thumbnail'],
        ];
        $hotelModel = new HotelModel();

        $existingHotel = null;
        if (is_numeric($hotelId) && $hotelId > 0) {
            $existingHotel = $hotelModel->find($hotelId);
        }

        if (!empty($existingHotel)) {
            // $oldPath = ROOTPATH . 'public/uploads/hotel-thumbnails/' . $existingHotel['thumbnail'];
            $oldPath = WRITEPATH . 'uploads/hotel-thumbnails/' . $existingHotel['thumbnail'];
            if (file_exists($oldPath)) unlink($oldPath);
            if ($hotelModel->update($existingHotel['id'], $insertableData)) {
                return redirect()->to('/admin/add_property/tab7/' . $hotelId)->with('success', 'Hotel info updated!');
            } else {
                return redirect()->to('/admin/add_property/tab1/' . $hotelId)->with('errors', 'Hotel info updated failed!');
            }
        } else {
            $newHotelId = $hotelModel->insert($insertableData, true);
            if (!$newHotelId) {
                return redirect()->to('/admin/add_property/tab1')->withInput()->with('errors', 'Hotel insert failed!');
            }
            return redirect()->to('/admin/add_property/tab2/' . $newHotelId)->with('success', 'Hotel Info Saved!');
        }
    }

    public function saveLocation($hotelId)
    {
        $formData = $this->request->getPost();
        // dd($formData);
        $rules = [
            'street_name'       => 'string|max_length[100]',
            'city'              => 'required|string|max_length[100]',
            'state'             => 'required|string|max_length[100]',
            'zip_code'          => 'required|string|max_length[10]',
            'country_or_region' => 'required|string|max_length[100]',
        ];
        $messages = [
            'street_name' => [

                'string'      => 'Street name must be a valid.',
                'max_length'  => 'Max 100 characters.',
            ],
            'city' => [
                'required'    => 'City is required.',
                'string'      => 'City must be a valid.',
                'max_length'  => 'Max 100 characters.',
            ],
            'state' => [
                'required'    => 'State is required.',
                'string'      => 'State must be a valid.',
                'max_length'  => 'Max 100 characters.',
            ],
            'zip_code' => [
                'required'    => 'ZIP code is required.',
                'string'      => 'ZIP code must be a valid.',
                'max_length'  => 'Max 10 characters.',
            ],
            'country_or_region' => [
                'required'    => 'Country or region is required.',
                'string'      => 'Country or region must be a valid.',
                'max_length'  => 'Max 100 characters.',
            ],
        ];
        if (!$this->validate($rules, $messages)) {
            return redirect()->to('/admin/add_property/tab2/' . $hotelId)->withInput()->with('errors', $this->validator->getErrors());
        }
        $insertableData = [
            'hotel_id'              => $hotelId,
            'street_name'           => !empty($formData['street_name']) ? $formData['street_name'] : null,
            'city'                  => $formData['city'],
            'state'                 => $formData['state'],
            'zip_code'              => $formData['zip_code'],
            'country_or_region'     => $formData['country_or_region'],
            'latitude'              => !empty($formData['latitude']) ? $formData['latitude'] : null,
            'longitude'             => !empty($formData['longitude']) ? $formData['longitude'] : null,
        ];

        $hotelLocationModel = new HotelLocationModel();
        $existingLocation = $hotelLocationModel->where('hotel_id', $hotelId)->first();

        if (!empty($existingLocation)) {
            if ($hotelLocationModel->update($existingLocation['id'], $insertableData)) {
                return redirect()->to('/admin/add_property/tab7/' . $hotelId)->with('success', 'Location updated');
            } else {
                return redirect()->to('/admin/add_property/tab2/' . $hotelId)->withInput()->with('errors', 'Location update failed!');
            }
        } elseif (!$hotelLocationModel->insert($insertableData)) {
            return redirect()->to('/admin/add_property/tab2/' . $hotelId)->withInput()->with('errors', 'Location insert failed!');
        }

        return redirect()->to('/admin/add_property/tab3/' . $hotelId)->with('success', 'Location Saved');
    }

    public function addAmenities($hotelId)
    {
        $formData = $this->request->getPost();
        // dd($formData);
        // Use CodeIgniter's validation library
        $rules = [
            'amenities-catagory' => 'required|string|max_length[255]',
            'amenities'          => 'required|string|max_length[255]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->to('/admin/add_property/tab3/' . $hotelId)->withInput()->with('errors', $this->validator->getErrors());
        }

        $amModel = new AmenitiesModel();
        $am_slug = $amModel->where('am_slug', Slug::slugify($formData['amenities']))->first();
        if ($am_slug) {
            return redirect()->to('/admin/add_property/tab3/' . $hotelId)->withInput()->with('errors', 'Amenity already exist!');
        }
        $insertableData = [
            'cat'       => $formData['amenities-catagory'],
            'am_name'   => $formData['amenities'],
            'cat_slug'  => Slug::slugify($formData['amenities-catagory']),
            'am_slug'   => Slug::slugify($formData['amenities']),
        ];
        if (!$amModel->insert($insertableData)) {
            return redirect()->to('/admin/add_property/tab3/' . $hotelId)->withInput()->with('errors', 'Amenities insert failed!');
        }
        return redirect()->to('/admin/add_property/tab3/' . $hotelId)->with('success', 'Amenities Saved!');
    }

    public function saveHotelAmenities($hotelId)
    {
        $formData = $this->request->getPost();
        $formattedAmenities = [];

        if (isset($formData['am_data']) && is_array($formData['am_data'])) {
            foreach ($formData['am_data'] as $amSlug) {
                if (!in_array($amSlug, $formData['am_data'] ?? [])) {
                    continue; // Skip unchecked
                }
                $typeKey = $amSlug . '-radio';
                $conditionKey = $amSlug . '-condition';
                $type = $formData[$typeKey] ?? '';
                $condition = $type === 'paid' ? ($formData[$conditionKey] ?? '') : '';
                $formattedAmenities[$amSlug] = [
                    'type' => $type,
                    'condition' => $condition
                ];
            }
        }
        $hAmModel = new HotelAmenitiesModel();
        $insertableData = [
            "hotel_id" => $hotelId,
            "amenities" => json_encode($formattedAmenities),
        ];
        $existing = $hAmModel->where('hotel_id', $hotelId)->first();

        if (!empty($existing)) {
            if ($hAmModel->update($existing['id'], $insertableData)) {
                return redirect()->to('/admin/add_property/tab7/' . $hotelId)->with('success', 'Hotel amenities updated!');
            } else {
                return redirect()->to('/admin/add_property/tab3/' . $hotelId)->with('errors', 'Hotel amenities updated failed!');
            }
        } elseif (!$hAmModel->insert($insertableData, true)) {
            return redirect()->to('/admin/add_property/tab3/' . $hotelId)->withInput()->with('errors', 'Hotel amenities  insert failed!');
        }
        return redirect()->to('/admin/add_property/tab4/' . $hotelId)->with('success', 'Hotel amenities saved!');
    }


    public function savePhotos($hotelId)
    {
        $files = $this->request->getFileMultiple('photos');

        // $uploadPath = ROOTPATH . 'public/uploads/hotel-gallery';
        $uploadPath = WRITEPATH . 'uploads/hotel-gallery';
        $fileUploader = new FileUploader($uploadPath);
        $uploadResults = $fileUploader->uploadMultiple($files);
        $uploadedFileNames = [];
        $errors = [];
        foreach ($uploadResults as $result) {
            if ($result['status'] === true) {
                $uploadedFileNames[] = $result['file_name'];
            } else {
                $errors[] = $result['message'];
            }
        }
        // If there are errors, redirect to tab4 with errors
        if (!empty($errors)) {
            return redirect()->to('/admin/add_property/tab4/' . $hotelId)->withInput()->with('errors', $errors);
        }
        $hotelPDb = new HotelGalleyModel();
        $currentHid = $hotelPDb->where('hotel_id', $hotelId)->first();
        $indata = [
            'hotel_id' => $hotelId,
            'photos'   => json_encode($uploadedFileNames),
        ];
        if (!empty($currentHid)) {
            $oldPhotos = json_decode($currentHid['photos'], true);
            if (!empty($oldPhotos)) {
                foreach ($oldPhotos as $oldFile) {
                    $fullPath = $uploadPath . '/' . $oldFile;
                    if (is_file($fullPath)) {
                        unlink($fullPath);
                    }
                }
            }
            $hotelPDb->update($currentHid['id'], $indata);
            return redirect()->to('/admin/add_property/tab7/' . $hotelId)->withInput()->with('success', 'Hotel photos updated!');
        } else {
            $hotelPDb->insert($indata);
            return redirect()->to('/admin/add_property/tab5/' . $hotelId)->withInput()->with('success', 'Hotel photos added!');
        }
    }

    public function saveFinance($hotelId)
    {
        $formData = $this->request->getPost();

        // Set default 1/0 for checkboxes
        $formData['cashPayment']   = isset($formData['cashPayment']) ? 1 : 0;
        $formData['cardPayment']   = isset($formData['cardPayment']) ? 1 : 0;
        $formData['onlinePayment'] = isset($formData['onlinePayment']) ? 1 : 0;

        $insertableData = [
            "hotel_id"      => $hotelId,
            "cash_payment"  => $formData['cashPayment'],
            "card_payment"  => $formData['cardPayment'],
            "online_payment" => $formData['onlinePayment'],
        ];

        $hotelFDb = new HotelFinanceModel();
        $currentHid = $hotelFDb->where('hotel_id', $hotelId)->first();

        if (!empty($currentHid)) {
            // Update
            if ($hotelFDb->update($currentHid['id'], $insertableData)) {
                return redirect()->to('/admin/add_property/tab7/' . $hotelId)->withInput()->with('success', 'Hotel finances updated!');
            } else {
                return redirect()->to('/admin/add_property/tab5/' . $hotelId)->withInput()->with('errors', 'Hotel finances update failed!');
            }
        } else {
            // Insert
            if ($hotelFDb->insert($insertableData)) {
                return redirect()->to('/admin/add_property/tab6/' . $hotelId)->withInput()->with('success', 'Hotel finances added!');
            } else {
                return redirect()->to('/admin/add_property/tab5/' . $hotelId)->withInput()->with('errors', 'Hotel finances add failed!');
            }
        }
    }


    public function savePolicies($hotelId)
    {

        $formData = $this->request->getPost();

        // Set default 0 for checkboxes or radio inputs not posted
        $defaultZeroFields = [
            'checkIn',
            'late_ci',
            'age_restriction',
            'deposit_at_ci',
            'doc_at_ci',
            'flexible_co_type',
            'flexible_co_status',
            'refund_policy_type',
            'full_refund_allowed',
            'partial_refund_allowed',
            'pet_policy_type',
            'pet_restricted_zones',
            'pet_additional_charges',
            'child_doc_requirement',
            'vat_included',
            'gst_included',
            'hotel_tax_included',
            'city_dist_tax_included',
            'tourist_tax_included'
        ];

        foreach ($defaultZeroFields as $field) {
            $formData[$field] = isset($formData[$field]) ? $formData[$field] : 0;
        }

        // Set NULL for text fields if empty
        $nullableFields = [
            'cin',
            'cie',
            'co_before',
            'flexible_co_condition',
            'vat_condition',
            'gst_condition',
            'hotel_tax_condition',
            'cdt_condition',
            'tourist_tax_condition',
            'property_registration_no',
            'business_registration_no',
            'taxpayer_identification_no'
        ];
        foreach ($nullableFields as $field) {
            $formData[$field] = !empty($formData[$field]) ? $formData[$field] : null;
        }
        $defaultFreeFields = [
            'flexible_checkout_radio',
            'vat_radio',
            'gst_radio',
            'hotel_tax_radio',
            'regional_location_tax_radio',
            'tourist_tax_radio',

        ];
        foreach ($defaultFreeFields as $field) {
            $formData[$field] = (isset($formData[$field]) && $formData[$field] === 'paid') ? 1 : 0;
        }

        // Handle JSON for age_segments
        $formData['age_segments'] = !empty($formData['age_segments']) ? json_encode($formData['age_segments']) : null;
        // dd($formData);
        $insertableData = [
            'hotel_id'                  => $hotelId,
            'ci_type'                   => $formData['checkIn'], // 0 or 1
            'ci_start_time'             => $formData['cin'], // null or value
            'ci_end_time'               => $formData['cie'], // null or value
            'late_ci'                   => $formData['late_ci'], // 0 or 1
            'age_restriction'           => $formData['age_restriction'], // 0 or 1
            'deposit_at_ci'             => $formData['deposit_at_ci'], // 0 or 1
            'doc_at_ci'                 => $formData['doc_at_ci'], // 0 or 1
            'co_before'                 => $formData['co_before'], // null or value
            'flexible_co_status'        => $formData['flexible_co_status'], // 0 or 1
            'flexible_co_type'          => $formData['flexible_checkout_radio'], // 0 or 1
            'flexible_co_condition'     => $formData['flexible_co_condition'], // null or value
            'refund_policy_type'        => $formData['refund_policy_type'], // 0 or 1
            'full_refund_allowed'       => $formData['full_refund_allowed'], // 0 or 1
            'partial_refund_allowed'    => $formData['partial_refund_allowed'], // 0 or 1
            'pet_policy_type'           => $formData['pet_policy_type'], // 0 or 1
            'pet_restricted_zones'      => $formData['pet_restricted_zones'], // 0 or 1
            'pet_additional_charges'    => $formData['pet_additional_charges'], // 0 or 1
            'age_segments'              => $formData['age_segments'], // null or value
            'child_doc_requirement'     => $formData['child_doc_requirement'], // 0 or 1
            'vat_included'              => $formData['vat_included'], // 0 or 1
            'vat_radio'                 => $formData['vat_radio'],
            'vat_condition'             => $formData['vat_condition'], // null or value
            'gst_included'              => $formData['gst_included'], // 0 or 1
            'gst_radio'                 => $formData['gst_radio'],
            'gst_condition'             => $formData['gst_condition'], // null or value
            'hotel_tax_included'        => $formData['hotel_tax_included'], // 0 or 1
            'hotel_tax_radio'           => $formData['hotel_tax_radio'],
            'hotel_tax_condition'       => $formData['hotel_tax_condition'], // null or value
            'city_dist_tax_included'    => $formData['city_dist_tax_included'], // 0 or 1
            'regional_location_tax_radio' => $formData['regional_location_tax_radio'],
            'cdt_condition'             => $formData['cdt_condition'], // null or value
            'tourist_tax_included'      => $formData['tourist_tax_included'], // 0 or 1
            'tourist_tax_radio'         => $formData['tourist_tax_radio'],
            'tourist_tax_condition'     => $formData['tourist_tax_condition'], // null or value
            'property_registration_no'  => $formData['property_registration_no'], // null or value
            'business_registration_no'  => $formData['business_registration_no'], // null or value
            'taxpayer_identification_no' => $formData['taxpayer_identification_no'], // null or value
        ];
        // dd($insertableData);
        // echo "<pre>";
        // print_r($insertableData);
        // Fix schema typo: hotel_tax-condition → hotel_tax_condition
        // Check if entry exists
        $hotelPoliDb = new HotelPoliciesModel();
        $current = $hotelPoliDb->where('hotel_id', $hotelId)->first();

        if ($current) {
            if ($hotelPoliDb->update($current['id'], $insertableData)) {
                return redirect()->to('/admin/add_property/tab7/' . $hotelId)->with('success', 'Policies updated!');
            } else {
                return redirect()->to('/admin/add_property/tab6/' . $hotelId)->with('errors', 'Update failed!')->withInput();
            }
        } else {
            if ($hotelPoliDb->insert($insertableData)) {
                return redirect()->to('/admin/add_property/tab7/' . $hotelId)->with('success', 'Policies added!');
            } else {
                return redirect()->to('/admin/add_property/tab6/' . $hotelId)->with('errors', 'Insert failed!')->withInput();
            }
        }
    }
}
