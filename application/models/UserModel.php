<?php

class UserModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_all_categories()
    {
        
        return $this->db->get("categories")->result();
    }
    public function get_target_murads($id)
    {

        return $this->db->where('c_product_slug',$id)->get("categories")->result();
    }
    public function get_all_murads()
    {

        return $this->db->get("categories")->result();
    }

    public function get_all_cate($join = array(), $select = "")
    {

        $this->db->select($select);
        $this->db->from('product');
        $this->db->join($join['table'], $join['condition']);

        return $this->db->get()->result();
    }
    public function get_by_categgroy($join = array(), $select = "")
    {

        $this->db->select($select);
        $this->db->from('product');
        $this->db->join($join['table'], $join['condition']);
        return $this->db->get()->result();
    }

    //   public function join_cate(){
    //     $this->db->select("product.p_id p_category, categories.c_product_name, categories.c_description");
    //     $this->db->select("product.p_id p_category, sub_category.s_name, sub_category.s_description");
    //     $this->db->from('product');
    //     $this->db->join("categories","categories.c_id = product.p_category",'LEFT');
    // $this->db->join("sub_category","sub_category.s_id = product.p_sub_category",'LEFT');
    // return  $this->db->get()->result();
    //   }

    public function join_cate($join = array(), $select_cat = "", $select_subcat = "")
    {
        $this->db->select($select_cat);
        $this->db->select($select_subcat);
        $this->db->from('product');
        $this->db->join($join['table'], $join['condition']);
        $this->db->join($join['table_sub'], $join['condition_sub']);
        return  $this->db->get()->result();
    }
    public function join_categories($join = array(), $select_cat = "", $select_subcat = "")
    {
        $this->db->select($select_cat);
        $this->db->select($select_subcat);
        $this->db->from('product');
        $this->db->join($join['table'], $join['condition']);
        $this->db->join($join['table_sub'], $join['condition_sub']);
        return  $this->db->get()->result();
    }
}
