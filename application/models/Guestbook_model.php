<?php
class Guestbook_model extends CI_Model {

  public function __construct()
  {
    $this->load->database();
  }

  public function get_posts()
  {
  	$query = $this->db->get('guestbook');
  	return $query->result_array();
	}

	public function add_post()
	{
    $this->load->helper('url');

    $data = array(
      'name' => $this->input->post('name'),
      'email' => $this->input->post('email'),
      'comment' => $this->input->post('comment')
    );

    return $this->db->insert('guestbook', $data);
	}

	public function delete_post($id)
	{
		$this->db->delete('guestbook', array('id' => $id));
	}
}
