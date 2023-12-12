<?php

namespace App\Models;

use CodeIgniter\Model;

class MensaModel extends Model
{
    protected $table      = 'tb_test_MENSA';
    protected $primaryKey = 'mensa_id';
    protected $allowedFields = ['mensa_no', 'mensa_category', 'mensa_code', 'mensa_question', 'A', 'B', 'bm_mensa_category', 'bm_mensa_question', 'bm_A', 'bm_B', 'is_active'];
}
