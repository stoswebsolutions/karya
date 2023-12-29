<?php

namespace App\Models;

use CodeIgniter\Model;

class UserassessrolesModel extends Model
{
    protected $table      = 'user_assess_roles';
    protected $primaryKey = 'assess_id';
    protected $allowedFields = ['occ_id','user_email','is_primary','q_one_res','q_two_res','q_three_res','q_four_res','q_five_res','created_at'];
}
