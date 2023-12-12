<?php

namespace App\Models;

use CodeIgniter\Model;

class EmployeeratingModel extends Model
{
    protected $table      = 'employeeRatingSystem';
    protected $primaryKey = 'id';
    protected $allowedFields = ['userId', 'careerRole', 'relocate', 'occupationLevel', 'highestEducation', 'totalExperience', 'keySkillIds', 'expectedSalary', 'workTime', 'jobRoleLimitation', 'preferredCulture', 'jobCategory', 'totalPercentage', 'createdAt', 'updatedAt'];
}
