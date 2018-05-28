<?php

class Office_model extends CI_Model {
    
	private $table = "office";
	
	// Constructor
	public function __construct()
	{
		parent::__construct();		
	}
        
    // C R E A T E
	public function create_office($data)
	{
		$this->db->insert($this->table, $data);
		return TRUE;
	}
        
    // R E A D
	public function read_office()
	{
		$this->db->select("*");
		$this->db->from($this->table);
		
		// $this->db->select("*")
			// ->from($this->table);
			// ->join('','','')
			// ->group_by('','')
			// ->order_by('','')
			
		$query=$this->db->get();
		
		return $query->result_array();
	}
        
    // U P D A T E
    public function update_office($data)
	{
		$this->db->where($data);
		$this->db->update($this->table, $data);
		return TRUE;
	}
    
	//DELETE
	public function delete_office($data)
	{
		$this->db->where($data);
		$this->db->delete($this->table);
		return TRUE;
	}
	
	public function search_office($searchquery){
		
		$this->db->select("*");
		$this->db->from($this->table);
			// if($searchquery != ''){
				$this->db->like('college_campus', $searchquery);
			// }
		$this->db->order_by('office_id', 'DESC');
		// return $this->db->get();
		$query = $this->db->get();
		return $query->result_array();
	}
	
	
	
	// public function find_office($officenum)
	// {
	// 	$this->db->where($officenum);
	// 	$this->db->select("*");
	// 	$this->db->from($this->table);
	// 	$query=$this->db->get();
		
	// 	return $query->result_array();
	// }
}
