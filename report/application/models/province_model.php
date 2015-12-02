<?php class province_model extends CI_Model {     

	public function _construct()
	{
		parent::__construct();
	}
	
	public function get_district()
	{
		return $this->db->get("district")->result();
	}
	public function get_amphur()
	{
		return $this->db->get("amphur")->result();
	}
	public function get_province()
	{
		return $this->db->get("province")->result();
	}
}