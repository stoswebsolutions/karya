<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersviewerModel extends Model
{
    protected $table      = 'tb_users_viewer';
    protected $primaryKey = 'tb_users_viewer_id';
    protected $allowedFields = ['user_email', 'viewer_id', 'viewer_name', 'created_date'];
}
