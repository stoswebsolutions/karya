<?php

namespace App\Models;

use CodeIgniter\Model;

class SkillModel extends Model
{
    protected $table      = 'tb_test_SKILL';
    protected $primaryKey = 'skill_id';
    protected $allowedFields = ['skill_no', 'skill_category', 'skill_question', 'A', 'B', 'C', 'is_active'];
}
