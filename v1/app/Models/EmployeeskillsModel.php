<?php

namespace App\Models;

use CodeIgniter\Model;

class EmployeeskillsModel extends Model
{
    protected $table      = 'employeeKeySkills';
    protected $primaryKey = 'id';
    protected $allowedFields = ['userId', 'certification', 'byWhom', 'year', 'expert', 'createdAt', 'updatedAt'];
}
