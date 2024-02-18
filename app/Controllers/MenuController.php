<?php
namespace App\Controllers;
use App\Models\MenuModel;

class MenuController extends BaseController
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
        $menuModel = new MenuModel();
        $data['menu_data'] = $menuModel->findAll();
        // set the validation rules for the form to be submitted 
        $validationRules = [

            'menuName' => [
                    'rules' => 'required|max_length[20]',
                    'label' => 'Menue Name',
                    'errors' => [
                        'required' => 'Menu name is required',
                        'max_length' => 'Menu name cannot be more than 10 characters'
                    ]
                ],

            'menuStatus' => [
                'rules'=>'required',
                'label' => 'Menu Status or Visibility',
                'errors' => [
                    'required' =>'Please choose the menu status or visibility setting'
                ]
            ],

            'menuDescription' => [
                'rules'=>'required|max_length[60000]',
                'label' => 'Menu description',
                'errors' => [
                    'required' =>'Give the general service description.',
                    'max_length' =>'The details cannot be more than 60000 characters'
                ]
            ],

             'menuPic' => [
                'rules' => 'uploaded[menuPic]|max_size[menuPic,6024]|is_image[menuPic]|mime_in[menuPic,image/jpeg,image/jpg,image/png]',
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
                  $menuBanner_new_name  = "";
                // process and upload the image here 
                 if($this->request->getFile('menuPic'))
                 {
                    $menuPic = $this->request->getFile('menuPic');
                    $menuBanner_new_name = $menuPic->getRandomName(); // random image name 
                     if(!$menuPic->move('uploads/', $menuBanner_new_name))
                     {
                        return redirect()->to('/dashboard/menu')->with('error', 'There was an error in processing the menu banner');
                        exit();
                     }    
                  }

        		$formData['menuName'] = $this->request->getPost('menuName');
        		$formData['menuStatus'] = $this->request->getPost('menuStatus');
        		$formData['menuDescription'] = $this->request->getPost('menuDescription');
        		$formData['menuPic'] = $menuBanner_new_name;

        		if($menuModel->save($formData)){
        			return redirect()->to('/dashboard/menu')->with('success', 'A customer testimony save and publshed successfully');
        		}else{
        			return redirect()->to('/dashboard/menu')->with('error', 'Error in saving and publishing A customer testimony');
        		}

        	}else{
        		$data['validation'] = $this->validator;
        	}
        }

        return view('dashboard/menu', $data);
    }


    //EDIT ROUTE 
    public function edit($menuId)
        {
            $data = [];
            $menuModel = new MenuModel();
            $menu  = $menuModel->find($menuId);
            $data['menu_data'] = $menu;

            if (!$menu) {
                return redirect()->to('/dashboard/menu')->with('error', 'Menu not found');
            }

            // Validation rules for editing menu
            $validationRules = [

                'menuName' => [
                        'rules' => 'required|max_length[20]',
                        'label' => 'Menue Name',
                        'errors' => [
                            'required' => 'Menu name is required',
                            'max_length' => 'Menu name cannot be more than 10 characters'
                        ]
                    ],
    
                'menuStatus' => [
                    'rules'=>'required',
                    'label' => 'Menu Status or Visibility',
                    'errors' => [
                        'required' =>'Please choose the menu status or visibility setting'
                    ]
                ],
    
                'menuDescription' => [
                    'rules'=>'required|max_length[60000]',
                    'label' => 'Menu description',
                    'errors' => [
                        'required' =>'Give the general service description.',
                        'max_length' =>'The details cannot be more than 60000 characters'
                    ]
                ]
            ];

            //check if the file is submitted 
            $updateImg = false;

            if($this->request->getFile('menuPic') && $this->request->getFile('menuPic')->isValid())
            {
                $updateImg = true; 

                $validationRules['menuPic'] = [
                        'rules' => 'uploaded[menuPic]|max_size[menuPic,6024]|is_image[menuPic]|mime_in[menuPic,image/jpeg,image/jpg,image/png]',
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
                        $menuPic = $this->request->getFile('menuPic');
                        $menuBanner_new_name = $menuPic->getRandomName();
                        $data['menu_data']['menuPic'] = $menuBanner_new_name;

                        if (!$menuPic->move('uploads/', $menuBanner_new_name)) {
                            return redirect()->to('/dashboard/menu')->with('error', 'Error in processing the menu banner');
                            exit();
                        }
                    }

                    $data['menu_data']['menuName'] = $this->request->getPost('menuName');
                    $data['menu_data']['menuStatus'] = $this->request->getPost('menuStatus');
                    $data['menu_data']['menuDescription'] = $this->request->getPost('menuDescription');
                   

                    // Update the menu entry
                    if ($menuModel->update($menuId, $data['menu_data'])) {
                        return redirect()->to('/dashboard/menu')->with('success', 'Menu updated successfully');
                    } else {
                        return redirect()->to('/dashboard/menu')->with('error', 'Error in updating the menu');
                    }
                } else {
                    $data['validation'] = $this->validator;
                }
            }

            $data['menu'] = $menu;

            return view('dashboard/edit_menu', $data); // Create an edit_menu view for editing
        }

}
