<?php

namespace App\Models;

use CodeIgniter\Model;

class OccupationsModel extends Model
{
    protected $table      = 'tb_occupations';
    protected $primaryKey = 'occ_id';
    protected $allowedFields = ['occ_role', 'occ_interest', 'occ_interest_code', 'cour_catid', 'cour_catname', 'result_DISC', 'result_AVK', 'result_LITE', 'result_LPJE', 'result_PERSPECTIVE', 'occ_position_entry', 'occ_salary', 'occ_job_detail', 'occ_workstyle', 'occ_job_skill', 'occ_status', 'occ_industry_outlook', 'bm_occ_job_detail', 'bm_occ_job_skill', 'bm_occ_industry_outlook', 'desc_image', 'style_image', 'skill_image'];
}
