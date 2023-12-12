<?php

namespace App\Models;

use CodeIgniter\Model;

class CompanyModel extends Model
{
    protected $table      = 'tb_company';
    protected $primaryKey = 'tb_company_id';
    protected $allowedFields = ['tb_company_user_id', 'company_name', 'sector', 'sector_name', 'company_address1', 'company_address2', 'company_zip', 'company_city', 'company_state', 'company_location_coordinate', 'company_banefit', 'company_growth', 'company_mission_statement', 'company_history', 'company_vision', 'company_lifestyle1', 'company_lifestyle2', 'company_size', 'website_url', 'culture_style', 'company_value', 'company_sector', 'video_name', 'video_path', 'membership_level', 'total_views', 'last_update', 'created_date', 'tb_account_manager_id'];
}
