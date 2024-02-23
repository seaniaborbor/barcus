<?php

namespace App\Controllers;

use App\Models\MenuModel;
use App\Models\ServiceModel;
use App\Models\TeamModel;
use App\Models\BlogModel;


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

    public function search(){
        $data  = [];
        // get the list of menu items
        $menuModel = new MenuModel();
        $data['mainMenu'] = $menuModel->where('menuStatus', 1)->findAll(); 

        // get the sub menu 
        $ServiceModel = new ServiceModel();
        $data['sub_menu'] = $ServiceModel->findAll();

        $search = $this->request->getPost('search');
        
        // get the value search from the service model
        $data['search_result'] = $ServiceModel->like('serviceDescription', $search)->get()->getResult();
        if(!$data['search_result']){
            return redirect()->to("/")->with("error","No match found of yourch on our pages. ");
        }

        return view('public/search', $data);

    }

    // contact method 

    public function contact(){
        $data  = [];

        // get the list of menu items 
        $menuModel = new MenuModel();
        $data['mainMenu'] = $menuModel->where('menuStatus', 1)->findAll();

        // get the sub menu 
        $ServiceModel = new ServiceModel();
        $data['sub_menu'] = $ServiceModel->findAll();

        // render the index/home page 
        return view('public/contact', $data);
        
    }


    // about us 
    public function about(){
        $data  = [];

        // get the list of menu items 
        $menuModel = new MenuModel();
        $data['mainMenu'] = $menuModel->where('menuStatus', 1)->findAll();

        // get the sub menu 
        $ServiceModel = new ServiceModel();
        $data['sub_menu'] = $ServiceModel->findAll();

        // render the index/home page 
        return view('public/about', $data);
        
    }


    

    // ALL BLOG POSTS METHOD 
    public function blog()
    {
        // get the list of menu items 
        $BlogModel = new BlogModel();

        $data = [
            'blog_posts' => $BlogModel->orderBy('blog.id', 'desc')->paginate(6),
            'pager' => $BlogModel->pager,
        ];
        $menuModel = new MenuModel();
        $data['mainMenu'] = $menuModel->where('menuStatus', 1)->findAll();

         // get the sub menu 
         $ServiceModel = new ServiceModel();
         $data['sub_menu'] = $ServiceModel->findAll();

        

        return view('public/blog', $data);
    }


    // BLOG DETAILS - SHOW/READ A BLOG 
    public function blog_details($id = null)
    {
        $data = [];
        // get the list of menu items 
        $menuModel = new MenuModel();
        $data['mainMenu'] = $menuModel->where('menuStatus', 1)->findAll();

         // get the sub menu 
         $ServiceModel = new ServiceModel();
         $data['sub_menu'] = $ServiceModel->findAll();

        // get all team members 
        $BlogModel = new BlogModel();
        $data['blog_to_read'] = $BlogModel->blog_post_to_read($id); // get the blog to be read

        if(!$data['blog_to_read'])
        {
            return redirect()->to('/')->with('error', 'The document you requested couldnot be found');
        }
        $data['recent_blogs'] = $BlogModel->groupBy('id', 'desc')->findAll(4); // find the latest 4 recent posts
        
        // $data['post_per_category'] = $BlogModel->post_per_category(); // get all the categories with num of post

        // $CommentModel = new CommentModel();
        // $data['post_comments'] = $CommentModel->where('blog_comments.postId', $id)->findAll();



        // if an instance the readerposts a comment, get validation rules that must be applied
         $validationRules = [

            'name' => 
                [
                    'rules' => 'required',
                    'label' => 'Your Name',
                    'errors' => [
                        'required' => 'Please enter a name reader will see'
                    ]
                ],

            'email' => [
                'rules'=>'required|max_length[50]',
                'label' => 'Your email',
                'errors' => [
                    'required' =>'Give your email which administrator of this platform may contact you through',
                    'max_length' =>'The email is too long'
                ]
            ],

             'comment' => [
                'rules'=>'required|min_length[50]|max_length[500]',
                'label' => 'Your comments',
                'errors' => [
                    'required' =>'Provide your comment. It is required',
                    'min_length' =>'Your comment is too short. It should be 50 characters minimum',
                    'max_length' =>'Comment is too long. It should be 500 characters maxamium',
                ]
            ]
        ];

        // handle posted comments if received

        if($this->request->getMethod() == 'post'){
            if($this->validate($validationRules)){

                $commentData['name'] = htmlspecialchars($this->request->getPost('name'));
                $commentData['email'] = htmlspecialchars($this->request->getPost('email'));
                $commentData['comment'] = htmlspecialchars($this->request->getPost('comment'));
                $commentData['postId'] = $this->request->getPost('postId');

                if($CommentModel->save($commentData)){
                    return redirect()->to('/blog-details/'.$id)->with('success', 'Your comments were received successfully');
                }else{
                    return redirect()->to('/blog-details/'.$id)->with('error', 'Error in receiving your comments');
                }

            }else{
                $data['validation'] = $this->validator;
            }
        }



        return view('public/blog_details', $data);
    }

}
