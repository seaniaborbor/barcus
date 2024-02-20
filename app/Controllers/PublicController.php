<?php

namespace App\Controllers;

use App\Models\MenuModel;
use App\Models\ServiceModel;


class PublicController extends BaseController
{
    //============home page 
    public function index()
    {
        $data  = [];

        // get the list of menu items 
        $menuModel = new MenuModel();
        $data['mainMenu'] = $menuModel->where('menuStatus', 1)->findAll();

        // get the sub menu 
        $ServiceModel = new ServiceModel();
        $data['sub_menu'] = $ServiceModel->findAll();

        // render the index/home page 
        return view('public/index', $data);
    }

    // ========== method that render service page base on the menu
    public function service($service)
    {
        $data  = [];


        // get the list of menu items 
        $menuModel = new MenuModel();
        $data['mainMenu'] = $menuModel->where('menuStatus', 1)->findAll();

         // get the sub menu 
         $ServiceModel = new ServiceModel();
         $data['sub_menu'] = $ServiceModel->findAll();

        //get the service that is requested 
        $serve = $menuModel->where('menuName', $service)->find();
        $data['service'] = $serve;

    
        //check if the service is not found, exit;
        if(!$data['service']){
            return redirect()->to("/")->with("error","Service Not Found");
        }

        //get the sub services 
        $data['sub_services'] = $ServiceModel->where('serviceMenu', $serve[0]['menuId'])->findAll();


        // render the index/home page 
        return view('public/service_page', $data);
    }



        // ========== method that render service page base on the menu
    public function subservice($service)
    {
        $data  = [];


        // get the list of menu items 
        $menuModel = new MenuModel();
        $data['mainMenu'] = $menuModel->where('menuStatus', 1)->findAll();

         // get the sub menu 
         $ServiceModel = new ServiceModel();
         $data['sub_menu'] = $ServiceModel->findAll();

        //get the sub service that is requested 
        $serve = $ServiceModel->where('serviceName', $service)->find();
        $data['service_sub'] = $serve;

    
        //check if the service is not found, exit;
        if(!$data['service_sub']){
            return redirect()->to("/")->with("error","Service Not Found");
        }


        // render the index/home page 
        return view('public/sub_servicepage', $data);
    }

}
