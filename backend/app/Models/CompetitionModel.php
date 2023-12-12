<?php

namespace App\Models;

use CodeIgniter\Model;

class CompetitionModel extends Model
{
    protected $table      = 'tb_competition';
    protected $primaryKey = 'tb_competition_id';
    protected $allowedFields = ['title', 'competition_title', 'discription', 'submit_by', 'submit_date', 'full_path', 'tumb_path', 'status', 'votes', 'comment', 'username'];
}
