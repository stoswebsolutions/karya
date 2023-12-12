<?php

namespace App\Models;

use CodeIgniter\Model;

class ApplypostsModel extends Model
{
    protected $table      = 'applyPosts';
    protected $primaryKey = 'app_id';
    protected $allowedFields = ['job_id', 'user_id', 'user_email', 'cat_id', 'role_id', 'companyId', 'applied_on', 'updated_on', 'app_status'];
}
