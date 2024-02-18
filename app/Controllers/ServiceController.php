<?php

namespace App\Controllers;
use App\Models\ServiceModel;
use App\Models\MenuModel;



class ServiceController extends BaseController
{

       // initialize some functionalities 
       public function __construct()
       {
           helper(['form', 'url']);
       }
       // THE INDEX METHOD 
       public function index()
       {
           $data = [];
           // get all the services 
           $serviceModel = new serviceModel();
           $data['service_data'] = $serviceModel
                                    ->join('menu', 'menu.menuId = services.serviceMenu')
                                    ->groupBy('services.serviceId')
                                    ->get()
                                    ->getResult();
           // get all the menu items 
           $menuModel = new MenuModel();
           $data['menu_data'] = $menuModel->findAll();

           // set the validation rules for the form to be submitted 
           $validationRules = [
   
               'serviceName' => [
                       'rules' => 'required|max_length[20]',
                       'label' => 'Service Name',
                       'errors' => [
                           'required' => 'service name is required',
                           'max_length' => 'service name cannot be more than 20 characters'
                       ]
                   ],

                'serviceIcon' => [
                        'rules' => 'required|max_length[20]',
                        'label' => 'Service Icon',
                        'errors' => [
                            'required' => 'service icon is required',
                            'max_length' => 'service icon cannot be more than 20 characters'
                            ]
                    ],
   
               'serviceStatus' => [
                   'rules'=>'required',
                   'label' => 'service Status or Visibility',
                   'errors' => [
                       'required' =>'Please choose the service status or visibility setting'
                   ]
                   ],

               'serviceMenu' => [
                'rules'=>'required',
                'label' => 'service menu or Visibility',
                'errors' => [
                    'required' =>'Please indicate the menu under which this service should be'
                ]
                ],
   
               'serviceDescription' => [
                   'rules'=>'required|max_length[60000]',
                   'label' => 'service description',
                   'errors' => [
                       'required' =>'Give the general service description.',
                       'max_length' =>'The details cannot be more than 60000 characters'
                   ]
               ],
   
                'servicePic' => [
                   'rules' => 'uploaded[servicePic]|max_size[servicePic,6024]|is_image[servicePic]|mime_in[servicePic,image/jpeg,image/jpg,image/png]',
                       'label' => 'Service Banner',
                       'errors' => [
                       'required' => 'This field must be a valid file',
                       'max_size'  => 'The file is too large',
                       'is_image' => 'Only image files is allowed',
                       'mime_in' => 'Only of type jpeg, jpg & png are allowed'
                       ]
               ]
           ];
   
           if($this->request->getMethod() == "post")
           {

           
               $formData = [];
   
               if($this->validate($validationRules))
               {
           
                     $serviceBanner_new_name  = "";
                   // process and upload the image here 
                    if($this->request->getFile('servicePic'))
                    {
                       $servicePic = $this->request->getFile('servicePic');
                       $serviceBanner_new_name = $servicePic->getRandomName(); // random image name 
                        if(!$servicePic->move('uploads/', $serviceBanner_new_name))
                        {
                           return redirect()->to('/dashboard/service')->with('error', 'There was an error in processing the service banner');
                           
                        }    
                     }
   
                   $formData['serviceName'] = $this->request->getPost('serviceName');
                   $formData['serviceStatus'] = $this->request->getPost('serviceStatus');
                   $formData['serviceDescription'] = $this->request->getPost('serviceDescription');
                   $formData['serviceIcon'] = $this->request->getPost('serviceIcon');
                   $formData['serviceMenu'] = $this->request->getPost('serviceMenu');
                   $formData['servicePic'] = $serviceBanner_new_name;

                   if($serviceModel->save($formData)){
                       return redirect()->to('/dashboard/service')->with('success', 'A sub survice was added');
                   }else{
                       return redirect()->to('/dashboard/service')->with('error', 'an error occured while adding a service. ');
                   }
   
               }else{
                   $data['validation'] = $this->validator;
               }
           }
   
           return view('dashboard/service', $data);
       }
   
   
       //EDIT ROUTE 
       public function edit($serviceId)
           {
 
               $data = [];
               $serviceModel = new serviceModel();
               $service  = $serviceModel->find($serviceId);
               $data['service_data'] = $service;


   
               if (!$service) {
                   return redirect()->to('/dashboard/service')->with('error', 'service not found');
               }
   
               $menuModel = new MenuModel();
               $data['menu_data'] = $menuModel->findAll();
    
               // set the validation rules for the form to be submitted 
               $validationRules = [
       
                   'serviceName' => [
                           'rules' => 'required|max_length[20]',
                           'label' => 'Service Name',
                           'errors' => [
                               'required' => 'service name is required',
                               'max_length' => 'service name cannot be more than 20 characters'
                           ]
                       ],
    
                    'serviceIcon' => [
                            'rules' => 'required|max_length[20]',
                            'label' => 'Service Icon',
                            'errors' => [
                                'required' => 'service icon is required',
                                'max_length' => 'service icon cannot be more than 20 characters'
                                ]
                        ],
       
                   'serviceStatus' => [
                       'rules'=>'required',
                       'label' => 'service Status or Visibility',
                       'errors' => [
                           'required' =>'Please choose the service status or visibility setting'
                       ]
                       ],
    
                   'serviceMenu' => [
                    'rules'=>'required',
                    'label' => 'service menu or Visibility',
                    'errors' => [
                        'required' =>'Please indicate the menu under which this service should be'
                    ]
                    ],
       
                   'serviceDescription' => [
                       'rules'=>'required|max_length[60000]',
                       'label' => 'service description',
                       'errors' => [
                           'required' =>'Give the general service description.',
                           'max_length' =>'The details cannot be more than 60000 characters'
                       ]
                   ]
               ];

               //check if the file is submitted 
               $updateImg = false;
   
               if($this->request->getFile('servicePic') && $this->request->getFile('servicePic')->isValid())
               {
                   $updateImg = true; 
   
                   $validationRules['servicePic'] = [
                           'rules' => 'uploaded[servicePic]|max_size[servicePic,6024]|is_image[servicePic]|mime_in[servicePic,image/jpeg,image/jpg,image/png]',
                           'label' => 'Service Banner',
                           'errors' => [
                           'required' => 'This field must be a valid file',
                           'max_size'  => 'The file is too large',
                           'is_image' => 'Only image files is allowed',
                           'mime_in' => 'Only of type jpeg, jpg & png are allowed'
                           ]
                           ];
               }
   
               // get handle post if the file is submitted 
               if ($this->request->getMethod() == 'post') {
                   
                   $formData = [];
   
                   if ($this->validate($validationRules)) {
   
                       if ($updateImg) {
                           $servicePic = $this->request->getFile('servicePic');
                           $serviceBanner_new_name = $servicePic->getRandomName();
                           $data['service_data']['servicePic'] = $serviceBanner_new_name;
   
                           if (!$servicePic->move('uploads/', $serviceBanner_new_name)) {
                               return redirect()->to('/dashboard/service/edit/'.$data['service_data']['serviceId'])->with('error', 'Error in processing the service banner');
                               exit();
                           }
                       }
   
                       $data['service_data']['serviceName'] = $this->request->getPost('serviceName');
                       $data['service_data']['serviceStatus'] = $this->request->getPost('serviceStatus');
                       $data['service_data']['serviceDescription'] = $this->request->getPost('serviceDescription');
                       $data['service_data']['serviceIcon'] = $this->request->getPost('serviceIcon');
                       $data['service_data']['serviceMenu'] = $this->request->getPost('serviceMenu');
                      
   
                       // Update the service entry
                       if ($serviceModel->update($serviceId, $data['service_data'])) {
                           return redirect()->to('/dashboard/service')->with('success', 'service updated successfully');
                       } else {
                           return redirect()->to('/dashboard/service/edit/'.$data['service_data']['serviceId'])->with('error', 'Error in updating the service');
                       }
                   } else {
                       $data['validation'] = $this->validator;
                   }
               }

   
               return view('dashboard/edit_service', $data); // Create an edit_service view for editing
           }

}
