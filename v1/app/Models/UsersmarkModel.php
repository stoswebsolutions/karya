<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersmarkModel extends Model
{
    protected $table      = 'tb_users_mark';
    protected $primaryKey = 'tb_users_mark_id';
    protected $allowedFields = ['email', 'DISC_result', 'LITE_result', 'second_top_LITE_result', 'LPJE_result', 'second_top_LPJE_result', 'PERSPECTIVE_result', 'DISC_TOP', 'AVK_TOP', 'second_top_AVK', 'mensa_intuitive', 'mensa_ambitious', 'mensa_tenacious', 'mensa_practical_planner', 'mensa_social_skill', 'english_proficiecy', 'skill_level1', 'skill_level2', 'skill_level3', 'skill_level4', 'skill_level5', 'skill_level6', 'skill_level7', 'skill_level8', 'skill_level9', 'skill_level10', 'skill_level11', 'skill_level12', 'skill_level13', 'skill_level14', 'skill_level15', 'skill_level16', 'appt_lm', 'appt_ps', 'appt_com', 'appt_time', 'appt_pd', 'recommended_roles_from_test', 'date_attampt'];
}
