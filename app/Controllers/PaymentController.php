<?php

namespace App\Controllers;

use App\Models\MenuModel;
use App\Models\ServiceModel;

class PaymentController extends BaseController
{
    public function index(): string
    {
        
         // get the list of menu items 
         $menuModel = new MenuModel();
         $data['mainMenu'] = $menuModel->where('menuStatus', 1)->findAll();

         // get the sub menu 
         $ServiceModel = new ServiceModel();
         $data['sub_menu'] = $ServiceModel->findAll();

        return view("public/payment", $data);
    }
}
