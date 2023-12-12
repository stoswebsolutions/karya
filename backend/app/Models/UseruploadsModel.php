<?php

namespace App\Models;

use CodeIgniter\Model;

class UseruploadsModel extends Model
{
    protected $table      = 'user_uploads';
    protected $primaryKey = 'user_uploads_id';
    protected $allowedFields = ['user_email', 'img_for', 'img_name', 'img_path', 'thumb_name', 'thumb_path', 'ext', 'upload_date'];
}
