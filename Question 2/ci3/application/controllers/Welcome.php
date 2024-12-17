<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	 public function __construct(){
        parent::__construct();
		$this->isLogin = $this->session->userdata('user_logged');
        $this->load->model('Auth_Model', 'Auth_Model');
    }

	public function index()
	{
		if(isset($_POST['submit'])){
			$this->form_validation->set_rules('userName','Username','trim|required');
			$this->form_validation->set_rules('passWord','Password','trim|required|min_length[6]');

			if($this->form_validation->run() == TRUE){
				$userdata = array(
					'user_name' => $_POST['userName'],
					'password' => $_POST['passWord']
				);

				$result = $this->Auth_Model->Mathc_Password($userdata);
				if($result == TRUE){
					$_SESSION['user_logged'] = TRUE;

                    $_SESSION['first_name'] = $result['first_name'];

                    $_SESSION['last_name'] = $result['last_name'];

                    $_SESSION['user_name'] = $result['user_name'];
					redirect(base_url('index.php/welcome/home'));
				}else{
					redirect(base_url());
				}
			}else{
				redirect(base_url());
			}
		}else{
			$this->load->view('welcome_message');
		}

	}

	function register(){
		if(isset($_POST['submit'])){
			$this->form_validation->set_rules('firstName','Firstname','trim|required');

			$this->form_validation->set_rules('lastName','Lastname','trim|required');

			$this->form_validation->set_rules('userName','Username','trim|required|is_unique[login.user_name]');

			$this->form_validation->set_rules('passWord','Password','trim|required|min_length[6]');

			if($this->form_validation->run()==TRUE){
				$userdata = array(
					'first_name' => $_POST['firstName'],
					'last_name' => $_POST['lastName'],
					'user_name' => $_POST['userName'],
					'password' => md5($_POST['passWord'])
				);
			
				if($this->Auth_Model->registration_data($userdata) == true){
					$_SESSION['user_logged'] = TRUE;
					redirect(base_url().'index.php/welcome/home');
				}
			}else{
				redirect(base_url().'index.php/welcome/home');
			}
		}else{
			$this->load->view('register');
		}
	}

	function home(){
		if($_SESSION['user_logged'] == TRUE){
			$this->load->view('home');
		}else{
			redirect(base_url());
		}
	}

	function about_us(){
		if($_SESSION['user_logged'] == TRUE){
			$this->load->view('about_us');
		}else{
			redirect(base_url());
		}
	}

	function profile(){
		if($_SESSION['user_logged'] == TRUE){
			$this->load->view('profile');
			if(isset($_POST['submit'])){
				$this->form_validation->set_rules('text','Text','trim|required');
				if($this->form_validation->run() == TRUE){
					$userdata = array(
						'first_name' => $_SESSION['first_name'],
						'last_name' => $_SESSION['last_name'],
						'user_name' => $_SESSION['user_name'],
						'blog' => $_POST['text'],
						'posted_at' => date('y-m-d')
					);
					if($this->Auth_Model->post_blogs($userdata) == TRUE){
						redirect(base_url('index.php/welcome/home'));
					}else{
						redirect(base_url('index.php/welcome/profile'));
					}
				}else{
					redirect(base_url('index.php/welcome/profile'));
				}
			}
		}else{
			redirect(base_url());
		}
	}

	function api(){
		$result = $this->Auth_Model->Mathc_Password();
		print_r(json_encode(array("result" => $result)));
	}

	function Logout(){

		unset($_SESSION);

        session_destroy();

        redirect(base_url(), "refresh");

	}
}
