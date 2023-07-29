<?php

namespace App\Models;

use CodeIgniter\Model;

class ProfcertificatesModel extends Model
{
    protected $table      = 'tl_prof_certificates';
    protected $primaryKey = 'prof_id';
    protected $allowedFields = ['prof_cert', 'prof_stat'];
}
