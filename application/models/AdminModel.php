<?php

class AdminMOdel extends CI_Model{


public function insert(){
    $this->db->insert('product',$data);
}


}