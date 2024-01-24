<?php

class AdminMOdel extends CI_Model{


public function insert($data){
    $this->db->insert('product',$data);
}

public function get_product_list(){
  return  $this->db->order_by('p_id','DESC')->get('product')->result_array();
}


}