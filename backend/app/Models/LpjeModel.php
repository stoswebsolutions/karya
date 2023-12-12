<?php

namespace App\Models;

use CodeIgniter\Model;

class LpjeModel extends Model
{
    protected $table      = 'tb_test_LPJE';
    protected $primaryKey = 'lpje_id';
    protected $allowedFields = ['lpje_no', 'LPJE_question', 'L', 'P', 'J', 'E', 'bm_L', 'bm_P', 'bm_J', 'bm_E', 'is_active'];
}
