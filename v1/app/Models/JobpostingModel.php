<?php

namespace App\Models;

use CodeIgniter\Model;

class JobpostingModel extends Model
{
    protected $table      = 'tb_company_job_posting';
    protected $primaryKey = 'tb_company_job_posting_id';
    protected $allowedFields = ['company_id', 'job_title', 'role_name', 'job_department', 'job_salary', 'job_requirement', 'job_responsibilities', 'job_level', 'job_level_desc', 'job_location', 'job_status', 'job_resources', 'url_resources', 'job_working_hour', 'job_available_date', 'job_active', 'date_submit', 'date_expired'];
}
