<?php

namespace App\Models;

use CodeIgniter\Model;

class AvkModel extends Model
{
    protected $table      = 'tb_test_AVK';
    protected $primaryKey = 'avk_id';
    protected $allowedFields = ['avk_no', 'avk_question', 'A', 'V', 'K', 'D', 'bm_avk_question', 'bm_A', 'bm_V', 'bm_K', 'avk_ans', 'is_active'];
}
