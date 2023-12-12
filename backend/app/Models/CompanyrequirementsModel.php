<?php

namespace App\Models;

use CodeIgniter\Model;

class CompanyrequirementsModel extends Model
{
    protected $table      = 'companyRequirements';
    protected $primaryKey = 'id';
    protected $allowedFields = ['companyId', 'relocate', 'occupationLevel', 'highestEducation', 'totalExperience', 'keySkills', 'expectedSalary', 'workTime', 'jobRoleLimitation', 'jobCategory', 'preferredCulture', 'job_title', 'short_desc', 'cat_id', 'role_id', 'int_city', 'int_country', 'job_type', 'rng_from', 'rng_to', 'job_desc', 'job_req', 'pos_no', 'expiry_date', 'post_status', 'createdAt', 'updatedAt'];
}
