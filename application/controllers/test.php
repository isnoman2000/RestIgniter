<?php
require APPPATH.'/libraries/REST_Controller.php';
class Test extends REST_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->model('student_model', 'student'); //load model

    }
    function student_get()
    {
        if(!$this->get('id')) {
            $this->response(NULL, 400);
        }
        $user = $this->student->getStudentById( $this->get('id') );

        if($user) {
            $this->response($user, 200); // 200 being the HTTP response code
        } else {
            $this->response(array('error' => 'Student could not be found'), 404);
        }
    }
}