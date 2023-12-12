<?php

namespace App\Models;

use CodeIgniter\Model;

class CompanysectorModel extends Model
{
    protected $table      = 'tb_company_sector';
    protected $primaryKey = 'tb_company_sector_id';
    protected $allowedFields = ['sector_id', 'sector_name'];
}
