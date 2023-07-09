<?php

namespace App\Models;

use CodeIgniter\Model;

class CompanyuserModel extends Model
{
    protected $table      = 'tb_company_user';
    protected $primaryKey = 'tb_company_user_id';
    protected $allowedFields = ['company_email', 'company_password', 'company_level', 'ssm_number', 'account_manager', 'contact_number', 'contact_email', 'company_profile_info', 'company_post_jobs', 'last_login', 'active', 'created_date', 'tb_account_manager_id', 'credit'];
}
