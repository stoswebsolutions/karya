<?php

namespace App\Models;

use CodeIgniter\Model;

class EventsdetailsModel extends Model
{
    protected $table      = 'tb_events_details';
    protected $primaryKey = 'tb_events_details';
    protected $allowedFields = ['event_title', 'batch', 'name', 'IC_no', 'contact_no', 'university', 'courses', 'user_email', 'video_for', 'video_name', 'video_path', 'ext', 'submit_date'];
}
