<?php class company_model extends CI_Model {     

	public function _construct()
	{
		parent::__construct();
	}
	
	public function get_company()
	{
		return $this->db->get("company")->result();
	}

	public function save_company($ar = array())
	{
		$this->db->insert("company",$ar);
	}

	public function clear_company()
	{
		$this->db->truncate("company")->result();
	}
}