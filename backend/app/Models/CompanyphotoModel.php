<?php

namespace App\Models;

use CodeIgniter\Model;

class CompanyphotoModel extends Model
{
    protected $table      = 'tb_company_photo';
    protected $primaryKey = 'tb_company_photo_id';
    protected $allowedFields = ['tb_company_id', 'company_photo_for', 'company_photo_path', 'company_photo_file_name', 'company_photo_file_name_thumb', 'companyBgImage', 'modify_date', 'uploaded'];
}
