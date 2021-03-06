<?php

class Proposal_model extends CI_Model {
    
	private $table = "proposal";
	
	// Constructor
	public function __construct()
	{
		parent::__construct();		
	}
        
    // C R E A T E
	public function create_proposal($data)
	{
		$this->db->insert($this->table, $data);
		return TRUE;
	}
        
    // R E A D
	public function read_proposal()
	{
		$this->db->select("*");
		$this->db->from($this->table);
		
		// $this->db->select("*")
			// ->from($this->table);
			// ->join('','','')
			// ->group_by('','')
			// ->order_by('','')
		// $this->db->order_by('proposal_id', 'DESC');
		$query=$this->db->get();
		
		return $query->result_array();
	}
        
    // U P D A T E
    public function update_proposal($data)
	{
		$this->db->where($data);
		$this->db->update($this->table, $data);
		return TRUE;
	}
    
	//DELETE
	public function delete_proposal($data)
	{
		$this->db->where($data);
		$this->db->delete($this->table);
		return TRUE;
	}
	
	public function search_proposal($searchquery){
		
		$this->db->select("*");
		$this->db->from($this->table);
			// if($searchquery != ''){
				// $this->db->like('proposal_id', $searchquery);
				$this->db->like('p_title', $searchquery);
				$this->db->or_like('p_subtitle', $searchquery);
				$this->db->or_like('p_duration', $searchquery);
				$this->db->or_like('p_type', $searchquery);
				$this->db->or_like('p_keywords', $searchquery);
			// }
		$this->db->order_by('proposal_id', 'DESC');
		// return $this->db->get();
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function find_proposal($propid)
	{	
		$this->db->where('proposal_id',$propid);
		$this->db->select("*");
		$this->db->from($this->table);
		$query=$this->db->get();
		
		return $query->result_array();
	}
}
