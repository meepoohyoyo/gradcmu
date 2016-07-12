<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function index($page='home')
	{
		if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
		{
                // Whoops, we don't have a page for that!
			show_404();
		}

		$data['title'] = ucfirst($page); // Capitalize the first letter

		$this->load->view('templates/header', $data);
		$this->load->view('pages/'.$page, $data);
		$this->load->view('templates/footer', $data);
	}

	public function view($page = 'home')
	{
		if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
		{
                // Whoops, we don't have a page for that!
			show_404();
		}

		if($page==='home'){
        	$data['title'] = 'Home'; // Capitalize the first letter
        	$data['css'] = 'assets/css/business-casual.css';
        }
        else if($page==='about'){
        	$data['title'] = 'About'; // Capitalize the first letter
        	$data['css'] = 'assets/css/business-casual.css';
        }
        elseif ($page==='login') {
        	$data['title'] = 'Login'; // Capitalize the first letter
        	$data['css'] = 'assets/css/business-casual.css';
        }
        elseif ($page==='contact') {
        	$data['title'] = 'Contact'; // Capitalize the first letter
        	$data['css'] = 'assets/css/business-casual.css';
        }
        elseif ($page==='post') {
        	$data['title'] = 'Post'; // Capitalize the first letter
        	$data['css'] = 'assets/css/business-casual.css';
        }
        elseif ($page==='profile') {
            $data['title'] = 'Profile'; // Capitalize the first letter
            $data['css'] = 'assets/css/business-casual.css';
        }

        else{
        	$data['title'] = 'other';
        }

        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
    }

    public function login()
    {
    	$data['title'] = 'Login';
    	$data['css'] = 'assets/css/login.css';

    	$this->load->helper(array('form'));
    	$this->load->view('templates/header', $data);
    	$this->load->view('pages/login', $data);
    	$this->load->view('templates/footer', $data);
    }

    public function logout()
    {
    	$this->session->unset_userdata('logged_in');
    	session_destroy();
    	redirect('home', 'refresh');
    }

    public function admin()
    {
    	if($this->session->userdata('logged_in'))
    	{
    		$session_data = $this->session->userdata('logged_in');
    		$data['username'] = $session_data['username'];
    		$data['title'] = 'Admin';

    		$this->load->view('admin', $data);
    	}
    	else
    	{
    		redirect('login', 'refresh');
    	}
    }

 
}
