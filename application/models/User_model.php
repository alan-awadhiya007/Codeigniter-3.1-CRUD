<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
	 public function LeaveFormm($data)
	{
		$this->db->insert("employee", $data);
	}
	public function read() 
  	{
		$users = $this->db->get('employee')->result_array();
		// print_r($users);
		return $users;
  	}
	
	/*  public function read() 
	{
		$sql="SELECT COUNT(cateId) as totalCat, bc.category FROM blog b LEFT JOIN blogcategory bc ON b.cateId = bc.id GROUP by b.cateId; ";    
        $users = $this->db->query($sql);
		//$users = $this->db->select("COUNT(cateId) as totalCat, bc.category FROM blog b LEFT JOIN blogcategory bc ON b.cateId = bc.id GROUP by b.cateId;");
        //$users=$this->db->get();
		return $users->result_array();						
		
	} */

public function getUser($userempId)
	{
		$this->db->where('empId', $userempId);
		return $users =$this->db->get('employee')->row_array(); //select *from user where id=?
	}
public function deleteUser($userempId)
	{
		$this->db->where('empId', $userempId);
		$this->db->delete('employee'); //delete from users where id=?
		
	}
	public function updateUser($userempId, $query)
	{
		$this->db->where('empId', $userempId);
	$this->db->update('employee', $query);  //update users set name=?, email=? where id =?
	}

}
?>