<?php

namespace App\Models;

use CodeIgniter\Model;

class CustomerModel extends Model
{
    protected $table = 'customer_table'; // Replace 'your_menu_table' with your actual database table name
    protected $primaryKey = 'customerId'; // Replace 'id' with your primary key field name

    protected $allowedFields = ['fullName','phoneNo','email','passportNum','currencySelect','orderNo','customerId'];
}
	
