<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('news_model');
	}

    public function index()
    {
    	if($this->session->userdata('logged_in'))
    	{
    		$session_data = $this->session->userdata('logged_in');
    		$data['username'] = $session_data['username'];
    		$data['title'] = 'Admin';
    		$data['active']='home';
    		$data['news'] = $this->news_model->get_news();

			$this->load->view('admin/header',$data);
			$this->load->view('admin/pages/index',$data);
			$this->load->view('admin/footer');
    	}
    	else
    	{
    		redirect('login', 'refresh');
    	}
    }

	function create()
	{
	    if($this->session->userdata('logged_in'))
    	{
    		$data['title'] = 'Admin';
 		    $session_data = $this->session->userdata('logged_in');
    		$data['username'] = $session_data['username'];
    		$data['active']='addnew';

	        $this->load->helper('form');
	        $this->load->library('form_validation');
	        $this->form_validation->set_rules('title', 'Title', 'required');
	        $this->form_validation->set_rules('body', 'Body', 'required');
	       	$config['upload_path'] = './uploads/';
	        $config['allowed_types'] = 'gif|jpg|png';
	        $config['max_size'] = '2048';
	        $config['max_width']  = '50';
	        $config['max_height']  = '50';
	        $this->load->library('upload', $config);

	        if ($this->form_validation->run() === FALSE)
	        {
	        	$this->load->view('admin/header',$data);
				$this->load->view('admin/pages/create',$data);
				$this->load->view('admin/footer');
	        }
	        else
	        {
                if ( ! $this->upload->do_upload('image_path'))
	            {
	                $this->session->set_userdata('flash_notification.message', $this->upload->display_errors());

		        	$this->load->view('admin/header',$data);
					$this->load->view('admin/pages/create',$data);
					$this->load->view('admin/footer');
	            }
	            else
	            {
	                $uploaded = $this->upload->data();
	                $_POST['image_path'] = 'uploads/' . $uploaded['file_name'];

	                $this->news_model->set_news();
	                $this->session->set_userdata('flash_notification.message', 'Created Successfully');
	                redirect('admin');
	            }
	        }

    	}
    	else
    	{
    		redirect('login', 'refresh');
    	}
	}

	function edit($id)
	{
	    if($this->session->userdata('logged_in'))
    	{
    		$data['title'] = 'Admin';
 		    $session_data = $this->session->userdata('logged_in');
    		$data['username'] = $session_data['username'];
    		$data['active']='addnew';

	        $this->load->helper('form');
	        $this->load->library('form_validation');

	        $this->form_validation->set_rules('title', 'Title', 'required');
	        $this->form_validation->set_rules('body', 'Body', 'required');
	       	$config['upload_path'] = './uploads/';
	        $config['allowed_types'] = 'gif|jpg|png';
	        $config['max_size'] = '2048';
	        $config['max_width']  = '0';
	        $config['max_height']  = '0';
	        $this->load->library('upload', $config);

	        if ($this->form_validation->run() === FALSE)
	        {
	        	$data['news_item'] = $this->news_model->get_news($id);
	        	$this->load->view('admin/header',$data);
				$this->load->view('admin/pages/edit',$data);
				$this->load->view('admin/footer');
	        }
	        else
	        {
	        	if(file_exists($_FILES['image_path']['tmp_name'])) {
                    if ( ! $this->upload->do_upload('image_path'))
		            {
		                $this->session->set_userdata('flash_notification.message', $this->upload->display_errors());

			        	$this->load->view('admin/header',$data);
						$this->load->view('admin/pages/edit',$data);
						$this->load->view('admin/footer');
		            }
		            else
		            {
		                $uploaded = $this->upload->data();
		                $_POST['image_path'] = 'uploads/' . $uploaded['file_name'];

		                $this->news_model->set_news();
		                $this->session->set_userdata('flash_notification.message', 'Updated Successfully');
		                redirect('admin');
		            }
				}else{
					$_POST['image_path'] = $news_item['image_path'];

	                $this->news_model->set_news();
	                $this->session->set_userdata('flash_notification.message', 'Updated Successfully');
	                redirect('admin');
				}
	        }

    	}
    	else
    	{
    		redirect('login', 'refresh');
    	}
	}

	function delete($id)
	{
    	if($this->session->userdata('logged_in'))
    	{
    		$this->news_model->delete_news($id);

    		redirect('admin', 'refresh');
    	}
    	else
    	{
    		redirect('login', 'refresh');
    	}
	}

}