<?php

namespace App\Models;

use CodeIgniter\Model;

class CompgalleryModel extends Model
{
    protected $table      = 'tb_comp_gallery';
    protected $primaryKey = 'id';
    protected $allowedFields = ['company_id', 'name', 'path'];
}
