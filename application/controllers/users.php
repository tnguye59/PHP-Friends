<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {
	
public function __construct()
	{
		parent::__construct();
		$this->load->model("User");
	}

	public function index()
	{
		// $this->output->enable_profiler(TRUE);
		$this->load->view('login');
	}
		public function register_user()
	{
		$this->load->library("form_validation");
		$this->form_validation->set_rules("name", "Name", "trim|required");
		$this->form_validation->set_rules("alias", "Alias", "required|trim");
		$this->form_validation->set_rules("email", "Email", "required|valid_email|is_unique[users.email]");
		$this->form_validation->set_rules("password", "Register Password", "required|min_length[8]|matches[r_password]");
		$this->form_validation->set_rules("r_password", "Confirm Password", "required|min_length[8]|");
		$this->form_validation->set_rules("birthdate", "Birthday", "");
		if($this->form_validation->run() === FALSE)
		{
			//failed validation
			$this->session->set_flashdata("register_error", validation_errors());
			redirect('/');
		}
		else
		{// success validated
			$this->load->model("User");
			$register = $this->User->add_user($this->input->post());
			echo "Your account has been created. Please log in";
			$this->load->view('login');
		}
	}
	public function login()
	{
		$email = $this->input->post('login_email');
		$password = md5($this->input->post('login_password'));
		$this->load->model('User');
		$user = $this->User->get_login_user($email);
		if($user && $user['password'] == $password)
		{
			$user = array(
               'user_id' => $user['id'],
               'user_email' => $user['email'],
               'user_name' => $user['name'],
               'user_alias' => $user['alias'],
               'is_logged_in' => true
               );
			$this->session->set_userdata($user);
			redirect("/users/profile");
		}
		else
		{
			$this->session->set_flashdata("login_error", "Invalid email or password!");
            redirect("/");
		}
	}
	
	public function profile()
	{
		if($this->session->userdata('is_logged_in') === TRUE)
		{
			$infos = [
				'friends' => $this->User->getUserWithFriend(),
				'notfriends' => $this->User->notFriend()
			];
			// var_dump($infos);
			// die();
            $this->load->view('friends', $infos);
		}
		else
		{
			redirect("/");
		}
	}
	public function logout() {
		$this->session->sess_destroy();

		redirect("/");
	}
	public function getFriendInfo($id)
	{
		$userInfo['users'] = $this->User->userInfo($id);
		$this->load->view('user', $userInfo);
	}
	public function removeFriend($id)
	{
		$this->User->removeFriendById($id);
		redirect("/users/profile");
	}
	public function notFriend()
	{
	$this->User->addFriend($this->input->post());
	redirect("/users/profile");
	}
	public function friends($id)
	{
		$userInfo['users'] = $this->User->userInfo($id);
		$this->load->view('profile', $userInfo);
	}

}


