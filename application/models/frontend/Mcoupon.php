<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mcoupon extends CI_Model {

	public function __construct()
    {
        parent::__construct();
        $this->table = $this->db->dbprefix('discount');
    }
    
    //Thêm
    public function coupon_insert($mydata)
    {
        $this->db->insert($this->table,$mydata);
    }

        // Lấy tất cả mã giảm giá với phân trang
        public function coupon_all($limit, $first) {
            $this->db->where('trash', 1);
            $this->db->where('orders', 1);
            $this->db->order_by('orders', 'desc');
            $this->db->order_by('created', 'desc');
            $query = $this->db->get($this->table, $limit, $first);
            return $query->result_array();
        }
}