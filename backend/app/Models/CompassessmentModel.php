<?php

namespace App\Models;

use CodeIgniter\Model;

class CompassessmentModel extends Model
{
    protected $table      = 'tl_comp_assessment';
    protected $primaryKey = 'assess_id';
    protected $allowedFields = ['comp_id', 'q_1', 'q_2', 'q_3', 'q_4', 'q_5', 'q_6', 'q_7', 'q_8', 'q_9', 'created_at', 'updated_at', 'status'];
}
