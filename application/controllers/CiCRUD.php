<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CiCRUD extends CI_Controller {

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
	public function index()
	{
		$this->load->view('index');
	}	
	public function LeaveForm()	// function name
	{
	
		$this->load->model('User_model');
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
	    $this->form_validation->set_rules('phone_number', 'Phone No.', 'required');
     // echo"controller";
		
		if ($this->form_validation->run()==false)
		{
			$this->load->view('LeaveForm');	
		}
		else
		{
		
			$data = array();
			//databaseTableName = formName
			$data['ename'] = $this->input->post('name');  
			$data['email'] = $this->input->post('email');  
			$data['contactNo'] = $this->input->post('phone_number');
			$data['remark'] = $this->input->post('Remark');
			$data['empno'] = $this->input->post('Emp_No');
			$data['designation'] = $this->input->post('Designation');


			
		    $this->User_model->LeaveFormm($data);
			$this->session->set_flashdata('success' , 'We have received your message, our team will contact you asap!');
			
			redirect(base_url().'LeaveForm');
		}
	}

	public function  Overview()// function name
	{
	    $this->load->model('User_model'); // To use functions inside this model

	    $users= $this->User_model->read();
	    $query= array();
	    $query['users']= $users;
	    $this->load->view('overview', $query);// view page name
	}
	public function delete($userempId)
	{
	    $this->load->model('User_model');
	    $users = $this->User_model->getUser($userempId);
	    if(empty($users))
	    {
	    	$this->session->set_flashdata('delFail' , 'Record not found!');
	    }else{
	    	$this->User_model->deleteUser($userempId);
			$this->session->set_flashdata('delSucc' , 'Record deleted successfully!');

	    }
    	redirect(base_url().'Overview');
	}
	public function edit($userempId)
	{
           $this->load->model('User_model');
           $users= $this->User_model->getUser($userempId);
           $data= array();

		   $data['updtRow']= $users;
		   $this->form_validation->set_rules('name', 'Name', 'required');
		   $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
	       $this->form_validation->set_rules('phone_number', 'Phone No.', 'required');
		   if ($this->form_validation->run()==false)
			{
				$this->load->view('edit', $data);
			}
			  else
			{  //update user records
				$qry = array();
				$qry['ename'] = $this->input->post('name');  
				$qry['email'] = $this->input->post('email');  
				$qry['contactNo'] = $this->input->post('phone_number');
				$qry['remark'] = $this->input->post('Remark');
				$qry['empno'] = $this->input->post('Emp_No');
				$qry['designation'] = $this->input->post('Designation');
				
				$this->User_model->updateUser($userempId, $qry);
				$this->session->set_flashdata('succes' , 'Record updated successfully!');
				redirect(base_url().'Overview');
			}
			
	}
	/*public function email()
	{
		$this->form_validation->set_rules('name', 'Name', 'required|alpha');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[mail.email]');
		$this->form_validation->set_error_delimiters('<div class="text-danger">' , '</div>');

		
		if ($this->form_validation->run())
		{
			$this->load->library('email');
			$this->email->from(set_value('email'), set_value('name'));	
			$this->email->to("anku.kesharwani17@gmail.com");
			$this->email->subject("Contact details");
			$this->email->message("Thank you for contacting");
			$this->email->set_newline("\r\n");
			$this->email->send();
			     
		if($this->email->send())
		{
			show_error($this->email->print_debugger());
		}
		else
		{
		echo"Your message has been sent!";
			
		}
	}
	else
	{
		$this->load->view('email');
	}
		
 
}*/
}

?>