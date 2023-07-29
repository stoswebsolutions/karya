<?php

namespace App\Models;

use CodeIgniter\Model;

class SkillsModel extends Model
{
    protected $table      = 'tl_skills';
    protected $primaryKey = 'skill_id';
    protected $allowedFields = ['skill_name', 'skill_stat'];
}
