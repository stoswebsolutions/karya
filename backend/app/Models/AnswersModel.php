<?php

namespace App\Models;

use CodeIgniter\Model;

class AnswersModel extends Model
{
    protected $table      = 'answers';
    protected $primaryKey = 'answer_id';
    protected $allowedFields = ['question_id','job_id','user_id','answer_video','create_at'];
}
