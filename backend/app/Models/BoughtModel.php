<?php

namespace App\Models;

use CodeIgniter\Model;

class BoughtModel extends Model
{
    protected $table      = 'tb_bought';
    protected $primaryKey = 'tb_bought_id';
    protected $allowedFields = ['invoice_id', 'invoice_id_md5', 'company_id', 'company_email', 'user_email', 'candidate_id', 'candidate_name', 'earning', 'status', 'transfered', 'date', 'bought_type'];
}
