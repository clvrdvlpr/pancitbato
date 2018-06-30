<?php

class Submit_model extends CI_Model {
    
	private $table = "submits";
	
	// Constructor
	public function __construct()
	{
		parent::__construct();		
	}
        
    // C R E A T E
	public function create_submit($data)
	{
		$this->db->insert($this->table, $data);
		return TRUE;
	}
        
    // R E A D
	public function read_submit()
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
    public function update_submit($data)
	{
		$this->db->where($data);
		$this->db->update($this->table, $data);
		return TRUE;
	}
    
	//DELETE
	public function delete_submit($data)
	{
		$this->db->where($data);
		$this->db->delete($this->table);
		return TRUE;
	}
	
	public function find_submit($prop_id)
	{
		$this->db->where('proposal_id',$prop_id);
		$this->db->select("*");
		$this->db->from($this->table);
		$query=$this->db->get();
		
		return $query->result_array();
	}

	public function latest_submit($status)
	{
		$this->db->where('status_tag',$status);
		$this->db->select("*");
		$this->db->from($this->table);
		$query=$this->db->get();
		
		return $query->result_array();
	}

	public function submit_join()
	{	
		$this->db->select("*");
		$this->db->from($this->table);
		$this->db->join('proposal','submits.proposal_id = proposal.proposal_id');
		// $this->db->select("*")
			// ->from($this->table);
			// ->join('','','')
			// ->group_by('','')
			// ->order_by('','')
		
		$this->db->order_by('proposal.proposal_id', 'DESC');
		$this->db->limit(10);
		$query= $this->db->get();
		
		return $query->result_array();
	}

	public function submit_join_research($res_id)
	{	
		$this->db->select("*");
		$this->db->from($this->table);
		$this->db->join('researcher','submits.researcher_id = researcher.researcher_id');
		// $this->db->select("*")
			// ->from($this->table);
			// ->join('','','')
			// ->group_by('','')
			// ->order_by('','')
		$this->db->where('submits.researcher_id',$res_id);
		$query= $this->db->get();
		// $this->db->where('researcher_id',$res_id);
		return $query->result_array();
	}

	
}

