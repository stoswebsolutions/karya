<?php

namespace App\Models;

use CodeIgniter\Model;

class ResultdiscModel extends Model
{
    protected $table      = 'tb_result_DISC';
    protected $primaryKey = 'tb_result_DISC_id';
    protected $allowedFields = ['result_combination','result_full_name','tagline','result_DISC_description','style_title','person_style','social_strength','social_weakness','work_strength','work_weakness','ideal_env','leadership_style','value_to_team','bm_result_DISC_weakness','bm_result_DISC_opportunity','bm_result_DISC_threat','result_DISC_gp','person_style_gp','social_strength_gp','social_weakness_gp','work_strength_gp','work_weakness_gp','ideal_env_gp','leadership_style_gp','value_team_gp'];
}
