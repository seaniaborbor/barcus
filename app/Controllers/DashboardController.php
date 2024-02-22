<?php

namespace App\Controllers;

use App\Models\MenuModel;
use App\Models\ServiceModel;
use App\Models\CustomerModel;
use App\Models\OrderModel;

class DashboardController extends BaseController
{

    public function index()
    {
        $menu = new MenuModel();
        $services = new ServiceModel();
        $customer = new CustomerModel();
        $order = new OrderModel();

        $data = [
         'menu' => $menu->findAll(),
         'services' => $services->findAll(),
          'customer' => $customer->findAll(),
          'order' => $order->findAll(),
        ];

        return view('dashboard/index', $data);
    }
}
