<?php

namespace App\Models;

use CodeIgniter\Model;

class CartModel extends Model
{
    protected $table      = 'tb_cart';
    protected $primaryKey = 'tb_cart_id';
    protected $allowedFields = ['company_id','company_email','user_email','candidate_id','occ_id','status','date'];
}
