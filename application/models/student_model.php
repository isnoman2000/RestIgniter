<?php
class Student_model extends CI_Model {

    public function getStudentById($id) {
        $users = array(
                    1 => array('id' => 1, 'name' => 'Saif Noman', 'email' => 'isnoman2000@gmail.com'),
                    2 => array('id' => 2, 'name' => 'Emran Hasan', 'email' => 'isnoman2000@yahoo.com')
        );
        return $users[$id];
    }
}