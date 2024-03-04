<?php

class AdminMOdel extends CI_Model
{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }
 

  public function get_product_list()
  {
    return  $this->db->order_by('p_id', 'DESC')->get('product')->result_array();
  }
  public function get_product()
  {
    return  $this->db->order_by('p_id', 'DESC')->get('product')->result_array();
  }

  public function get_single_product($id)
  {

    return $this->db->where('p_id', $id)->get('product')->row_array();
  }
  public function get_single_temp_product($id)
  {

    return $this->db->where('p_id', $id)->get('product')->row_array();
  }
  public function delete_product($id)
  {
    $this->db->where('p_id', $id)->delete('product');
  }
  public function product_update($id, $data)
  {
    $this->db->where('p_id', $id)->update('product', $data);
  }
  //CAtegory

  // public function insert_category($data)
  // {
  //   $this->db->insert('categories', $data);
  //   // return $this->db->insert_id();
  // }
  public function insert_category($data)
  {
    $this->db->insert('categories', $data);
    // return $this->db->insert_id();
  }
  public function test_category($data)
  {
    $this->db->insert('test_category', $data);
    // return $this->db->insert_id();
  }
  public function get_categories_test()
  {
    return $this->db->get('test_category')->result();
  }
  public function category_get()
  {
    return $this->db->get('categories')->result();
  }
  public function insert_parent($data)
  {
    $this->db->insert('parents', $data);
    // return $this->db->insert_id();
  }
  public function insert_products($data)
  {
    $this->db->insert('product', $data);
  }
  public function get_categories()
  {
    return $this->db->get('categories')->result();
  }
  public function inset_subcategory($data)
  {
    $this->db->insert('sub_category', $data);
  }

  public function get_subcategory()
  {
    return $this->db->get('sub_category')->result();
  }

  public function get_all_cate($join = array(), $select = "" ){

    $this->db->select($select);
    $this->db->from('product');
    $this->db->join($join['table'], $join['condition']);
    return $this->db->get()->result();


  }

  

  //CAtegory





  //make template
  public function insert_product_template($data)
  {
    $this->db->insert('template', $data);
  }

  public function update_product_template($temlateName, $data)
  {
    $this->db->where("t_name", $temlateName)->update('template', $data);
  }

  public function get_product_template($temlateName)
  {
    return $this->db->order_by("t_id", "DESC")->where("t_name", $temlateName)->get("template")->row_array();
  }

  //make template
}
