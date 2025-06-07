<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Controllers\RenderAdminViewController;
use App\Models\HotelModel;
use App\Models\HotelLocationModel;
use App\Models\HotelAmenitiesModel;
use App\Models\AmenitiesModel;
use App\Models\HotelGalleyModel;
use App\Libraries\FileUploader;
use App\Libraries\Slug;

class Addproperty extends BaseController
{
    protected $helpers = ['url', 'form'];
    public function index($tab = 'tab1', $hotelId = null)
    {

        $amModel = new AmenitiesModel();
        $amsData = $amModel->getAmsWithCat();
        $hAmModel = new HotelAmenitiesModel();
        $hamData = $hAmModel->where('hotel_id', $hotelId)->first();
        $data = [
            'pageTitle' => 'add-property',
            'activeTab' => $tab,
            'hotelId'   => $hotelId,
            'errors'     => session()->getFlashdata('errors'),
            'success'   => session()->getFlashdata('success'),
            'amsData'   => $amsData,
            'hamData'   => $hamData,
        ];
        $render = new RenderAdminViewController();
        return $render->renderViewAdmin('fronts/admin/Add-property', $data);
    }

    public function saveHotel()
    {

        // rules 
        $rules = [
            'property-name'     => 'required|min_length[3]',
            'description'       => 'required|min_length[10]',
            'rating'            => 'required',
            'email'             => 'required|valid_email',
            'phone'             => 'required|regex_match[/^[0-9]{10,15}$/]',
            'thumbnail'         => 'uploaded[thumbnail]|mime_in[thumbnail,image/jpg,image/jpeg,image/png,image/webp]|max_size[thumbnail,2048]'
        ];

        if (!$this->validate($rules)) {
            return redirect()->to('/admin/add_property/tab1')->withInput()->with('errors', $this->validator->getErrors());
        }

        // Get form data 
        $formData = $this->request->getPost();
        // chain_name based on checkIsHotelRadio yes or no 
        // Conditionally add chain_name validation
        if (isset($formData['checkIsHotelRadio']) && $formData['checkIsHotelRadio'] === 'yes') {
            $rules['chain_name'] = 'required|min_length[2]';
        } else {
            $formData['chain_name'] = null;
        }

        // Thumbnail uplode 
        $file = $this->request->getFile('thumbnail');
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
        // print_r($formData);

        $hotelModel = new HotelModel();

        // `true` returns insert ID
        $hotelId = $hotelModel->insert($insertableData, true);

        if (!$hotelId) {
            return redirect()->to('/admin/add_property/tab1/' . $hotelId)->withInput()->with('errors', 'Hotel insert failed!');
        }

        // Redirect to tab 2 with hotel ID
        return redirect()->to('/admin/add_property/tab2/' . $hotelId)->with('success', 'Hotel Info Saved');
    }

    public function saveLocation($hotelId)
    {
        $formData = $this->request->getPost();
        // dd($formData);
        $rules = [
            'street_name'       => 'required|string|max_length[255]',
            'city'              => 'required|string|max_length[100]',
            'state'             => 'permit_empty|string|max_length[100]',
            'zip_code'          => 'required|string|max_length[10]',
            'country_or_region' => 'required|string|max_length[100]',
        ];
        if (!$this->validate($rules)) {
            return redirect()->to('/admin/add_property/tab2/' . $hotelId)->withInput()->with('errors', $this->validator->getErrors());
        }
        $insertableData = [
            'hotel_id'              => $hotelId,
            'street_name'           => $formData['street_name'],
            'city'                  => $formData['city'],
            'state'                 => $formData['state'],
            'zip_code'              => $formData['zip_code'],
            'country_or_region'     => $formData['country_or_region'],
            'latitude'              => $formData['latitude'],
            'longitude'             => $formData['longitude'],
        ];
        $hotelLocationModel = new HotelLocationModel();
        $existingLocation = $hotelLocationModel->where('hotel_id', $hotelId)->first();
        if (!empty($existingLocation)) {
            if ($hotelLocationModel->update($existingLocation['id'], $insertableData)) {
                return redirect()->to('/admin/add_property/tab3/' . $hotelId)->with('success', 'Location updated');
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
        if (empty($formData['amenities-catagory']) && empty($formData['amenities'])) {
            return redirect()->to('/admin/add_property/tab3/' . $hotelId)->withInput()->with('errors', 'Please put valid amenities data!');
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
        // This will hold the final structured data
        // $amModel = new AmenitiesModel();
        // $amModelWcat = $amModel->getAmsWithCat();
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
        $jsonData = json_encode($formattedAmenities);
        $insertableData = [
            "hotel_id" => $hotelId,
            "amenities" => $jsonData,
        ];
        if (!$hAmModel->insert($insertableData)) {
            return redirect()->to('/admin/add_property/tab3/' . $hotelId)->withInput()->with('errors', 'Hotel amenities  insert failed!');
        }
        return redirect()->to('/admin/add_property/tab4/' . $hotelId)->with('success', 'Hotel amenities saved!');
    }


    public function savePhotos($hotelId)
    {
        $files = $this->request->getFileMultiple('photos'); // "file" comes from Dropzone's paramName
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
                    $fullPath = $uploadPath . $oldFile;
                    if (is_file($fullPath)) {
                        unlink($fullPath);
                    }
                }
            }
            $hotelPDb->update($currentHid['id'], $indata);
            return redirect()->to('/admin/add_property/tab6/' . $hotelId)->withInput()->with('success', 'Hotel photos updated!');
        } else {
            $hotelPDb->insert($indata);
            return redirect()->to('/admin/add_property/tab6/' . $hotelId)->withInput()->with('success', 'Hotel photos added!');
        }
    }
    /*
    public function saveRooms($hotelId)
    {
        $rules = [
            'room_type' => 'required'
        ];

        if (!$this->validate($rules)) {
            return redirect()->to('/admin/add_property/tab5/' . $hotelId)->withInput()->with('errors', $this->validator->getErrors());
        }

        // Save rooms

        return redirect()->to('/admin/add_property/tab6/' . $hotelId)->with('success', 'Rooms saved.');
    }*/

    public function savePolicies($hotelId)
    {
        $formData = $this->request->getPost();
    }
}
