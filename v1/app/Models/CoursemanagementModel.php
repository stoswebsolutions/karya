<?php

namespace App\Models;

use CodeIgniter\Model;

class CoursemanagementModel extends Model
{
    protected $table      = 'courseManagement';
    protected $primaryKey = 'id';
    protected $allowedFields = ['courseName', 'status', 'createdAt', 'updatedAt'];
}
