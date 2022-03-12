<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Base extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = 'Pilkasis';
		$data['paslon'] = $this->db->get('paslon')->result_array();
		$data['paslon1'] = $this->db->get_where('paslon', ['id' => '1'])->row_array();

		$this->form_validation->set_rules('name', 'Nama Lengkap', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim');
		$this->form_validation->set_rules('subject', 'Status', 'required|trim');
		$this->form_validation->set_rules('message', 'Masukan', 'required|trim');
		

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('base/index', $data);
		} else {
			$data = [
			'nama' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'status' => $this->input->post('subject'),
			'masukan' => $this->input->post('message')
		];
		$this->db->insert('feedback', $data);
		$this->session->set_flashdata('message', "<script type='text/javascript'>
		Swal.fire({
			icon: 'success',
			title: 'Berhasil',
			text: 'Terimakasih masukan anda telah kami terima',
		  });</script>");
			redirect('base#contact');
		}


		
	}













}

/* End of file Base.php */
/* Location: ./application/controllers/Base.php */
