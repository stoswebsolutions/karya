<?php

namespace App\Models;

use CodeIgniter\Model;

class QuestionsModel extends Model
{
    protected $table      = 'questions';
    protected $primaryKey = 'question_id';
    protected $allowedFields = ['job_id','companyId','question1','question2','question3','question4','question5','question_video','created_at'];
}
