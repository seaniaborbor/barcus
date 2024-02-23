<?php

namespace App\Controllers;

use App\Models\MenuModel;
use App\Models\ServiceModel;
use App\Models\CustomerModel;
use App\Models\OrderModel;
use App\Models\TeamModel;
use App\Models\BlogModel;




class DashboardController extends BaseController
{

    public function index()
    {
        $menu = new MenuModel();
        $services = new ServiceModel();
        $customer = new CustomerModel();
        $order = new OrderModel();
        $team = new TeamModel();
        $blog = new BlogModel();
        
    
        $data = [
            'menu' => $menu->findAll(),
            'services' => $services->findAll(),
            'customer' => $customer->findAll(),
            'order' => $order->select('*')
                ->from('ordertable o') // Use alias 'o' for ordertable in the from clause
                ->join('customer_table c', 'o.serviceOrderNo = c.orderNo') // Use alias 'c' for customer_table
                ->groupBy('c.orderNo')
                ->orderBy('o.serviceOrderNo', 'ASC') // Corrected from 'orderBy' to 'orderBy'
                ->get()
                ->getResult(),
            'team' => $team->findAll(),
            'blog' => $blog->findAll(),
        ];
    
        return view('dashboard/index', $data);
    }
    
}
