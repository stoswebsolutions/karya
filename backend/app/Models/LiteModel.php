<?php

namespace App\Models;

use CodeIgniter\Model;

class LiteModel extends Model
{
    protected $table      = 'tb_test_LITE';
    protected $primaryKey = 'lite_id';
    protected $allowedFields = ['lite_no', 'LITE_question', 'L', 'I', 'T', 'E', 'bm_L', 'bm_I', 'bm_T', 'bm_E', 'is_active'];
}
