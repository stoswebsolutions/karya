<?php

namespace App\Models;

use CodeIgniter\Model;

class UniversityapplicationModel extends Model
{
    protected $table      = 'tb_university_application';
    protected $primaryKey = 'tb_university_application_id';
    protected $allowedFields = ['university_name', 'courses_name', 'courses_level', 'name', 'email', 'ic', 'phone', 'address', 'city', 'poscode', 'state', 'country', 'date_application', 'application_status', 'comment', 'last_update', 'university_status', 'university_remark', 'offer_letter', 'offer_letter_status', 'study_official_date', 'expected_payment_date', 'payment_status', 'bm_application_status', 'bm_university_status', 'bm_offer_letter_status', 'bm_payment_status'];
}
