<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'ID';
    protected $allowedFields = ['email', 'password', 'ic', 'university', 'gender', 'about_me', 'facebook', 'twitter', 'instagram', 'phone', 'token', 'IP', 'username', 'first_name', 'last_name', 'fullname', 'avatar', 'resume', 'bg_image', 'work_type', 'remote_work', 'preferred_location', 'special_certificates', 'joined', 'joined_date', 'online_timestamp', 'oauth_provider', 'oauth_id', 'oauth_token', 'oauth_secret', 'email_notification', 'aboutme', 'why_hire', 'complicated', 'decision', 'profession', 'yourself_in5', 'money_do', 'working_exp', 'points', 'premium_time', 'user_role', 'premium_planid', 'active', 'activate_code', 'profile_comments', 'profile_views', 'address_1', 'address_2', 'city', 'state', 'zipcode', 'country', 'noti_count', 'test_attempt', 'module1', 'module2', 'module3', 'module4', 'module5', 'module6', 'module7', 'module8', 'module9', 'module10', 'credit', 'credit_update', 'profile_progress', 'study_working_progress', 'video_progress', 'disc_progress', 'current_job', 'job_experience', 'current_company', 'BankType', 'AccountHolder', 'AccountNo', 'BankUpdate', 'show_profile', 'request_plan', 'profile_status', 'prev_profstat', 'user_profcert', 'user_skills', 'is_online'];
}
