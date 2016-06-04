<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
        	$data['css'] = 'assets/css/blog.css';
        }
        else if($page==='about'){
        	$data['title'] = 'About'; // Capitalize the first letter
        	$data['css'] = 'assets/css/clean-blog.min.css';
        }
        elseif ($page==='login') {
        	$data['title'] = 'Login'; // Capitalize the first letter
        	$data['css'] = 'assets/css/login.css';
        }
        elseif ($page==='contact') {
        	$data['title'] = 'Contact'; // Capitalize the first letter
        	$data['css'] = 'assets/css/clean-blog.min.css';
        }
        elseif ($page==='post') {
        	$data['title'] = 'Post'; // Capitalize the first letter
        	$data['css'] = 'assets/css/clean-blog.min.css';
        }
        else{
        $data['title'] = ucfirst($page);
        }

        $this->load->helper('url');
        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
	}

	public function login()
	{
		$data['title'] = 'Login';
        $data['css'] = 'assets/css/login.css';

        $this->load->library('database');
        $this->load->library('session');
        $this->load->helper('url');
        
        $this->load->view('templates/header', $data);
        $this->load->view('pages/login', $data);
        $this->load->view('templates/footer', $data);
	}
}
