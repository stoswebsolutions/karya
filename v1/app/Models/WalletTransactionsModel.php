<?php

namespace App\Models;

use CodeIgniter\Model;

class WalletTransactionsModel extends Model
{
    protected $table      = 'tl_wallet_transactions';
    protected $primaryKey = 'trans_id';
    protected $allowedFields = ['comp_id','comp_email','order_id','pgtrans_ref','trans_amount','trans_type','trans_reason','created_at','updated_at','status'];
}
