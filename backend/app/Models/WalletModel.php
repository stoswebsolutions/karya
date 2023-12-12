<?php

namespace App\Models;

use CodeIgniter\Model;

class WalletModel extends Model
{
    protected $table      = 'tl_wallet';
    protected $primaryKey = 'wallet_id';
    protected $allowedFields = ['comp_id','comp_email','order_id','wallet_balance','created_at','modified_at'];
}
