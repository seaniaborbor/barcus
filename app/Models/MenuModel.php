<?php

namespace App\Models;

use CodeIgniter\Model;

class MenuModel extends Model
{
    protected $table = 'menu'; // Replace 'your_menu_table' with your actual database table name
    protected $primaryKey = 'menuId'; // Replace 'id' with your primary key field name

    protected $allowedFields = ['menuName', 'menuStatus', 'menuDescription', 'menuPic'];
}