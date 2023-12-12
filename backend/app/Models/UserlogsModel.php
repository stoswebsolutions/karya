<?php

namespace App\Models;

use CodeIgniter\Model;

class UserlogsModel extends Model
{
    protected $table      = 'user_logs';
    protected $primaryKey = 'ID';
    protected $allowedFields = ['userid', 'timestamp', 'message', 'IP', 'user_agent'];
}
