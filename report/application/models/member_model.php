<?php class member_model extends CI_Model {     

	public function _construct()
	{
		parent::__construct();
	}
	public function get_member()
	{
		return $this->db->get("member")->result();
	}
	public function save_member($ar = array())
	{
		$this->db->insert("member",$ar);
	}
	
}
?>