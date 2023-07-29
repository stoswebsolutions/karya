<?php

namespace App\Models;

use CodeIgniter\Model;

class RolecertskillsModel extends Model
{
    protected $table      = 'tl_role_certskills';
    protected $primaryKey = 'role_id';
    protected $allowedFields = ['role_name', 'occ_id', 'pc_id', 'sk_id'];
}
