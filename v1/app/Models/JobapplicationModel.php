<?php

namespace App\Models;

use CodeIgniter\Model;

class JobapplicationModel extends Model
{
    protected $table      = 'tb_job_application';
    protected $primaryKey = 'tb_job_application_id';
    protected $allowedFields = ['tb_company_job_posting_id', 'tb_company_id', 'company_name', 'job_title', 'role_name', 'job_level', 'job_status', 'name', 'email', 'ic', 'phone', 'address', 'city', 'poscode', 'state', 'country', 'date_application', 'application_status', 'user_feedback', 'comment', 'last_update'];
}
