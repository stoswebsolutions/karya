<?php

namespace App\Models;

use CodeIgniter\Model;

class PortfolioModel extends Model
{
    protected $table      = 'tb_portfolio';
    protected $primaryKey = 'tb_portfolio_id ';
    protected $allowedFields = ['user_email','image_path','description','created'];
}
