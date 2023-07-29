<?php

namespace App\Models;

use CodeIgniter\Model;

class UserrolesModel extends Model
{
    protected $table      = 'user_insert_roles';
    protected $primaryKey = 'ins_roleid';
    protected $allowedFields = ['user_email', 'user_roles', 'role_str', 'usr_prim', 'created_at'];
}
