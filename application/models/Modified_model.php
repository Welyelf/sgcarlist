<?php

class Modified_model extends CI_Model {

    public function get_specific_seller($id)
    {
        $this->db->from('sg_sellers');
        $this->db->select('*');
        $this->db->join('sg_seller_car_details as scd', 'scd.seller_id = sg_sellers.id', 'left');
        $this->db->join('sg_seller_car_images', 'sg_seller_car_images.car_id = scd.id', 'left');
        $this->db->where("sg_sellers.id", $id);
        $query = $this->db->get();
        return $query->row();
    }

    public function get_vehicle_info($id)
    {
        $this->db->from('vehicles');
        $this->db->select('*,company.name as company_name, vehicles.id as vc_id');
        $this->db->join('users', 'users.id = vehicles.user_id', 'left');
        $this->db->join('company', 'company.user_id = vehicles.user_id', 'left');
        $this->db->where("vehicles.id", $id);
        $query = $this->db->get();
        return $query->row();
    }

}