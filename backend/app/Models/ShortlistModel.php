<?php

namespace App\Models;

use CodeIgniter\Model;

class ShortlistModel extends Model
{
    protected $table      = 'tb_shortlist';
    protected $primaryKey = 'tb_shortlist_id';
    protected $allowedFields = ['company_id', 'company_email', 'candidate_id', 'candidate_email', 'created_t', 'candidate_name', 'occ_id'];
}
