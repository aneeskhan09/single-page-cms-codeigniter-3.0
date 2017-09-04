<?php
class My_model extends CI_Model
{
	function check_user($username,$password)
	{
		$this->db->where($username);
		$this->db->where($password);
		$query = $this->db->get('usr_user');
		//echo $this->db->last_query();
		if(!$query->num_rows() > 0)
		{
			return true;
			}
		else
			return false;
	}
	function all_slider()
	{
		$query = $this->db->query('select * from slider');
		echo $this->db->last_query();
		return $query->num_rows();
	}
	function select_any_row($table,$where)
	{
		$query = $this->db->where($where)->from($table)->get();
		//
		//echo $this->db->last_query();
		return $query->row();
	}
	/////////////////////////////////////////////////
	function select_any_table($table,$where = NULL)
	{
		if($where != NULL)
		{
			$this->db->where($where);
			}
		$query = $this->db->get($table);
		return $query->result();
	}
	//////////////////////////////////////////
	function insert_data($table,$data)
	{
		$this->db->insert($table,$data);
		return true;
	}
	//////////////////////////////////////////////
	function update_any_table($table,$data,$where)
	{
		$this->db->where($where)->update($table,$data);
		//echo $this->db->last_query();
		return true;
	}
	////////////////////////////////////////////
	function delete_any_row($table,$where)
	{
		$this->db->where($where)->delete($table);
		//echo $this->db->last_query();
		return true;
	}
	//////////////////////////////////////////////
	function get_works()
	{
		$this->db->distinct();
		$this->db->select('*')->from('portfolio');
		$this->db->join('portfolio_category','portfolio_category.cat_id = portfolio.cat_id');
		$query = $this->db->get();
		//echo $this->db->last_query();
		return $query->result();
	} 
	///////////////////////////////////////////
	function get_works_single($id)
	{
		$this->db->where('portfolio_id',$id);
		$this->db->select('*')->from('portfolio');
		$this->db->join('portfolio_category','portfolio_category.cat_id = portfolio.cat_id');
		$query = $this->db->get();
		//echo $this->db->last_query();
		return $query->result();
	} 
	///////////////////////////////////////////
	function get_member()
	{
		
		$this->db->select('*')->from('team');
		$this->db->join('social_links','social_links.member_id = team.member_id');
		$query = $this->db->get();
		//echo $this->db->last_query();
		return $query->result();
	} 
	/////////// .//////////////////
	function get_member_data($id)
	{
		$this->db->where('team.member_id',$id);
		$this->db->select('*')->from('team');
		$this->db->join('social_links','social_links.member_id = team.member_id');
		$query = $this->db->get();
		//echo $this->db->last_query();
		return $query->result();
	} 
	/////////////// current_issue ///////////
	/*function current_issue_style()
	{
		$sql = 'SELECT DISTINCT 
				  * 
				FROM
				  `invoice` 
				  JOIN `student` 
					ON `student`.`STUDENT_ID` = `invoice`.`student_id`
					WHERE STATUS = 1
					ORDER BY INVOICE_NO DESC LIMIT 1';
		return $this->db->query($sql)->result();		
	} */
	function canceling_current_issue_style($STUDENT_ID)
	{
		$sql = 'SELECT DISTINCT 
				  * 
				FROM
				  `invoice` 
				  JOIN `student` 
					ON `student`.`STUDENT_ID` = `invoice`.`student_id`
					WHERE STATUS = 1
					AND `student`.`STUDENT_ID` = '.$STUDENT_ID.'
					ORDER BY INVOICE_NO DESC  LIMIT 1';
		return $this->db->query($sql)->result();			
	}
	////////////////////////////////////////
	function select_query($sql)
	{

		return $this->db->query($sql)->row();			
	}
}

?>