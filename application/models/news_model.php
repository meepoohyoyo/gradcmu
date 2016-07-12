<?php
class News_model extends CI_Model {
	public function __construct()
	{
		$this->load->database();
	}

	public function get_news($id = FALSE)
	{
		if ($id === FALSE)
		{
			$query = $this->db->get('news');
			return $query->result_array();
		}
		
		$query = $this->db->get_where('news', array('id' => $id));
		return $query->row_array();
	}

	public function set_news()
	{
		$data = array(
			'title' => $this->input->post('title'),
			'body' => $this->input->post('body'),
			'image_path' => $this->input->post('image_path'),
			'created' => date('Y-m-d H:i:s',now()),
			'modified' => date('Y-m-d H:i:s',now()),
		);
		return $this->db->insert('news', $data);
	}
	public function update_news($id)
	{
		$data = array(
			'title' => $this->input->post('title'),
			'body' => $this->input->post('body'),
			'image_path' => $this->input->post('image_path'),
			'modified' => now(),
		);
		$this->db->where('id', $id);
		return $this->db->update('news', $data);
	}

	public function delete_news($id)
	{
		$this->db->where('id', $id);
      	return $this->db->delete('news'); 
	}
}