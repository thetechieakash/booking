<?php

namespace App\Models;

use CodeIgniter\Model;

class BookingModel extends Model
{
    protected $table            = 'bookings';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;

    protected $allowedFields = [
        'user_id',
        'room_id',
        'check_in_date',
        'check_out_date',
        'num_guests',
        'total_price',
        'booking_status',
        'payment_status',
        'booking_reference',
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'user_id'           => 'required|integer|is_natural_no_zero',
        'room_id'           => 'required|integer|is_natural_no_zero',
        'check_in_date'     => 'required|valid_date[Y-m-d]',
        'check_out_date'    => 'required|valid_date[Y-m-d]|after_than[check_in_date]',
        'num_guests'        => 'required|integer|greater_than[0]',
        'total_price'       => 'required|decimal|greater_than_equal_to[0]',
        'booking_status'    => 'required|in_list[pending,confirmed,cancelled,completed]',
        'payment_status'    => 'required|in_list[pending,paid,refunded]',
        'booking_reference' => 'required|alpha_numeric|min_length[10]|max_length[50]|is_unique[bookings.booking_reference,id,{id}]',
    ];
    protected $validationMessages   = [
        'user_id' => [
            'required'           => 'The user ID is required for booking.',
            'integer'            => 'The user ID must be an integer.',
            'is_natural_no_zero' => 'The user ID must be a positive number.'
        ],
        'room_id' => [
            'required'           => 'The room ID is required for booking.',
            'integer'            => 'The room ID must be an integer.',
            'is_natural_no_zero' => 'The room ID must be a positive number.'
        ],
        'check_in_date' => [
            'required'   => 'The check-in date is required.',
            'valid_date' => 'Please enter a valid check-in date (YYYY-MM-DD).'
        ],
        'check_out_date' => [
            'required'   => 'The check-out date is required.',
            'valid_date' => 'Please enter a valid check-out date (YYYY-MM-DD).',
            'after_than' => 'The check-out date must be after the check-in date.'
        ],
        'num_guests' => [
            'required'   => 'The number of guests is required.',
            'integer'    => 'The number of guests must be an integer.',
            'greater_than' => 'The number of guests must be greater than {param}.'
        ],
        'total_price' => [
            'required'               => 'The total price is required.',
            'decimal'                => 'The total price must be a decimal number.',
            'greater_than_equal_to'  => 'The total price cannot be negative.'
        ],
        'booking_status' => [
            'required'   => 'Booking status is required.',
            'in_list'    => 'Invalid booking status. Allowed values are pending, confirmed, cancelled, or completed.'
        ],
        'payment_status' => [
            'required'   => 'Payment status is required.',
            'in_list'    => 'Invalid payment status. Allowed values are pending, paid, or refunded.'
        ],
        'booking_reference' => [
            'required'      => 'Booking reference is required.',
            'alpha_numeric' => 'Booking reference can only contain letters and numbers.',
            'min_length'    => 'Booking reference must be at least {param} characters long.',
            'max_length'    => 'Booking reference cannot exceed {param} characters.',
            'is_unique'     => 'This booking reference already exists.'
        ],
    ];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = ['generateBookingReference'];
    
    /**
     * Generates a unique booking reference before inserting a new booking.
     *
     * @param array $data
     * @return array
     */
    protected function generateBookingReference(array $data)
    {
        if (!isset($data['data']['booking_reference'])) {
            $data['data']['booking_reference'] = $this->generateUniqueBookingReference();
        }
        return $data;
    }

    /**
     * Helper to generate a unique booking reference.
     *
     * @return string
     */
    private function generateUniqueBookingReference(): string
    {
        $prefix = 'BKG';
        $length = 7; // Length of the numeric part
        do {
            $reference = $prefix . strtoupper(bin2hex(random_bytes($length / 2))); // Generate random hex string
            // Ensure the reference is unique
            $exists = $this->where('booking_reference', $reference)->first();
        } while ($exists);

        return $reference;
    }
}
