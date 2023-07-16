<?php

namespace App\Models;

use CodeIgniter\Model;

class AptitudeModel extends Model
{
    protected $table      = 'tb_test_APTITUDE';
    protected $primaryKey = 'appt_id';
    protected $allowedFields = ['appt_no', 'apptcategory', 'appt_title', 'apptcode', 'apptquestion', 'A', 'A_value', 'B', 'B_value', 'C', 'C_value', 'D', 'D_value', 'E', 'E_value', 'is_active'];
}
