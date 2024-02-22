<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderModel extends Model
{
    protected $table = 'ordertable'; // Replace 'your_menu_table' with your actual database table name
    protected $primaryKey = 'orderIdNo'; // Replace 'id' with your primary key field name

protected $allowedFields = [
'orderServiceName','serviceOrderNo'
];

}
	