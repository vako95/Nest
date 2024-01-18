<?php
class UserCon extends CI_Controller{

public function index(){

    $this->load->view('user/index');
}
public function deals(){
    $this->load->view('user/deals');
}



}