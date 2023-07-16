<?php

namespace App\Models;

use CodeIgniter\Model;

class DiscModel extends Model
{
    protected $table      = 'tb_test_DISC';
    protected $primaryKey = 'disc_id';
    protected $allowedFields = ['disc_no', 'disc_question', 'D', 'I', 'S', 'C', 'bm_disc_question', 'bm_D', 'bm_I', 'bm_S', 'bm_C', 'is_active'];
}
