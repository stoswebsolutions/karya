<?php

namespace App\Models;

use CodeIgniter\Model;

class OrdertransactionModel extends Model
{
    protected $table      = 'tl_order_transactions';
    protected $primaryKey = 'tl_order_id';
    protected $allowedFields = ['comp_id','comp_email','order_id','pgtrans_ref','trans_amount','trans_type','trans_reason','cart_id','created_at','updated_at','status'];
}
