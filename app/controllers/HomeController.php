<?php
// Include base controller to support basic framework fuctions
include SYSTEM . 'BaseController.php';

/**
* Home Controller
*/
class HomeController extends BaseController
{
    public function index()
    {
        $userModel = $this->loadModel('UserModel');
        $data['users'] = $userModel->getUsers();
        $data['page_title'] = 'Home Page - Custom PHP Framework';

        $this->view('home', $data);
    }
}
