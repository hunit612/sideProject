<?php
class Students extends Base_Controller{
    public function __construct()
    {
        parent::__construct();
    }

    public function add(){

        if(isset($_POST['submit'])){
            unset($_POST['submit']);
            $this->view->id = $this->model->addStudent($_POST);
        }
echo 11;
        $this->view->render('students/add');
    }

    public function get($id = null){
    }
}