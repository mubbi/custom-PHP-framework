<?php
// Include base controller to support basic framework fuctions
include SYSTEM . 'BaseController.php';

/**
* Default Controller
*/
class DefaultController extends BaseController
{
    public function index()
    {
        $this->view('default');
    }
}
