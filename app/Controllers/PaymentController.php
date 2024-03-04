<?php

namespace App\Controllers;

use App\Models\MenuModel;
use App\Models\ServiceModel;
use App\Models\CustomerModel;
use App\Models\OrderModel;

class PaymentController extends BaseController
{
    public function __construct()
    {
        helper(['form', 'text', 'url']);
    }
    public function index()
    {
        
         // get the list of menu items 
         $menuModel = new MenuModel();
         $data['mainMenu'] = $menuModel->where('menuStatus', 1)->findAll();

         // get the sub menu 
         $ServiceModel = new ServiceModel();
         $data['sub_menu'] = $ServiceModel->findAll();

         // validation rules 
         $rules = [
            'fullName' => [
                'rules' => "required|min_length[6]|max_length[50]",
                'label' => "Your Full Name",
                'errors' => [
                    'required' => 'Name is required',
                    'min_length'  => 'The name is too short',
                    'max_length' => 'Title too long'
                ]
            ],
            'phoneNo' => [
                'rules' => "required|min_length[10]|max_length[15]",
                'label' => "Phone Number",
                'errors' => [
                    'required' => 'Phone Number is required',
                    'min_length'  => 'Phone number is too short',
                    'max_length' => 'Invalid phone number'
                ]
            ],
            'email' => [
                'rules' => "required|valid_email",
                'label' => "Your email",
                'errors' => [
                    'required' => 'Please provide your email',
                    'valid_email'  => 'A valid email is required',
                ]
            ],

            'passportNum' => [
                'rules' => "required|min_length[10]",
                'label' => "Passport Number",
                'errors' => [
                    'required' => 'Please provide your email',
                    'min_length'  => 'Passport number is too short',
                ]
            ],
            'currencySelect' => [
                'rules' => "required",
                'label' => "Currency",
                'errors' => [
                    'required' => 'Please Choose a currency',
                ]
            ],
        ];

         if($this->request->getMethod() == 'post'){
           
            if($this->validate($rules)){
                // get the form data 
                $form_data = [];
                $form_data['fullName'] = $this->request->getPost('fullName');
                $form_data['phoneNo'] = $this->request->getPost('phoneNo');
                $form_data['email'] = $this->request->getPost('email');
                $form_data['passportNum'] = $this->request->getPost('passportNum');
                $form_data['currencySelect'] = $this->request->getPost('currencySelect');
                $form_data['orderNo'] = random_string('alnum', 16);

                // get the service in a data array 
                $order_services = $this->request->getPost('services');
                // print_r($order_services);
                // var_dump($order_services);

                // exit();
                $orderTable = new OrderModel();
                $CustomerModel = new CustomerModel();
                if($CustomerModel->save($form_data)){
                    // insert code to save $order_services here 
                    // here is example of the data from $oder_services: Array ( [0] => CD Print [1] => T-Shirt Printing [2] => T-Shirt Printing )
                    for ($i = 0; $i < count($order_services); $i++) {
                         $servData = [
                           'orderServiceName'=>$order_services[$i],
                           'serviceOrderNo'=> $form_data['orderNo']
                        ];
                        $orderTable->save($servData);

                    }

                    return redirect()->to('/payment')->with('success', 'your order was received successfully. Our customer service will get to you very soon');
                    exit();
                }else{
                    echo "customer infor not inserted";
                }

                // order services 



           }else{
            $data['validation'] = $this->validator;
           }
         }

        return view("public/payment", $data);
    }

    public function view_orders($orderNo){

        $customer = new CustomerModel();
        $order = new OrderModel();
        $data['passedLink'] = "dashboard";


        $data['orderDetails'] = $order->where('serviceOrderNo',$orderNo)->find();
        $data['customerDetails'] = $customer->where('orderNo',$orderNo)->find();

        if(!($data['orderDetails']) || !$data['customerDetails']){
            return redirect()->to('/dashboard')->with('error', 'Order details missing or might have been deleted');
            exit();
        }

        return view("dashboard/order_detail", $data);
    }


    public function delete($orderNo){

        $customer = new CustomerModel();
        $order = new OrderModel();

        if(empty($orderNo)){
          return redirect()->to('/dashboard')->with('error', 'Invalid perimeter');
        }
  
        
        if($order->where('serviceOrderNo', $orderNo)->delete()){
            $customer->where('orderNo', $orderNo)->delete();
          return redirect()->to('/dashboard/blog/')->with('success', 'Order deleted');
        }else{
          return redirect()->to('/dashboard/blog/')->with('error', 'Error Occured');
        }
      }
}
