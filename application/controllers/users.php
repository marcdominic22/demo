<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
    }	
	public function index()
	{
		$this->load->view('users/index');		
	}
	
	public function Login()
	{
		if ($this->input->post())
		{
			$this->load->model('users_model');
			
			$data = $this->input->post();
			
			$result=$this->users_model->login($data['username'], $data['password']);
			
			if($result) {
				echo "noob";
			}
			else {
				redirect ('/users/admin/');
			}
			
			echo $result;
			exit();
		}
	}
	
	public function Login2()
	{
		if ($this->input->post())
		{
			$this->load->model('users_model');
			
			$data = $this->input->post();
			$this->users_model->login2($data['username'], $data ['password']);
			
			$result=$this->users_model->login2($data['username'], $data['password']);
			
			if($result) {
				redirect('/users');
			}
			else {
				redirect ('/users/admin/');
			}
			
			echo $result;
			exit();
		}
	}
	
	public function admin()
	{
		$this->load->view('users/admin');
	}
	
	public function loginadmin()
	{
		$this->load->view('users/loginadmin');
	}
	
	public function register()
	{
		$this->load->view('users/register');
	}

	public function logout()
	{
		$this->load->view('users/logout');
	}

	public function add() {
        $this->load->library('form_validation');
		
		//rules to become a member
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]|max_length[20]|is_unique[users.username]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]|max_length[20]|matches[cpassword]');
		$this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required|min_length[3]|max_length[20]');
		$this->form_validation->set_rules('fname', 'First Name', 'trim|required|min_length[3]|max_length[20]');
		$this->form_validation->set_rules('lname', 'Last Name', 'trim|required|min_length[3]|max_length[20]');
		
		if ($this->form_validation->run() == FALSE) {
			//user didn't validate, send back to login form, show errors
			$this->load->view('users/register');
		}
		else {
			//add to database
			$this->load->model('Users_model');
			
			$result = $this->Users_model->insert_user();
			
			if ($result){
				$this->load->view('users/success', array('username' => $result));
			}
			else{
				//this should never occur
				echo 'Sorry, there\'s a problem with the website. Contact McDonalds for Jollibee food lol xD';
			}
			/*if ($this->input->post()) {
				$data = $this->input->post();
				$result = $this->Users_model->add($data);
				redirect ('users/success');
			}*/
			
		}
		}
		
		public function tryadmin() {
			$persons = array();
			$info = array();
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "eb_lms";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			} 

			$sql = "SELECT book_id, book_title FROM book";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {
      
					$ctr = 1;
					$info['Book ID'] = $row["book_id"];
					$info['Book Title'] = $row["book_title"];
		
					$persons[] = $info;}
			}
		}
}

?>