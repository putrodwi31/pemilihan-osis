<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function index()
	{
		if ($this->session->userdata('nis')) {
			$user = $this->db->get_where('user', ['nis' => $this->session->userdata('nis')])->row_array();
			$username = $user['name'];
			if ($this->session->userdata('role_id') == '1') {
				$this->session->set_flashdata('message', "<script type='text/javascript'>
				
					Swal.fire(
					  'Hi! $username',
					  'Selamat datang di Website Pilkasis SMKN 2 Kota Bekasi',
					  'info'
					)
				</script>");
				redirect('admin');
			}
			$this->session->set_flashdata('message', "<script type='text/javascript'>
				
					Swal.fire(
					  'Hi! $username',
					  'Selamat datang di Website Pilkasis SMKN 2 Kota Bekasi',
					  'info'
					)
				</script>");
			redirect('user');
		}
		$this->form_validation->set_rules('nis', 'NIS', 'trim|required|min_length[5]|max_length[20]|numeric');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]|max_length[20]');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('auth/index');
		} else {
			$this->_login();
		}
	}

	public function _login()
	{
		$nis = $this->input->post('nis');
		$password = $this->input->post('password');

		$user = $this->db->get_where('user', ["nis" => $nis])->row_array();

		if ($user) {
			if ($password == $user['password']) {
				$data = [
					"nis" => $user['nis'],
					"role_id" => $user['role_id']
				];
				$username = $user['name'];
				$this->session->set_userdata($data);
				if ($data['role_id'] == 1) {
					$this->session->set_flashdata('message', "<script type='text/javascript'>
				
					Swal.fire(
					  'Hi! $username',
					  'Selamat datang di Website Pilkasis SMKN 2 Kota Bekasi',
					  'info'
					)
				</script>");
					redirect('admin');
				} else {
					$this->session->set_flashdata('message', "<script type='text/javascript'>
				
					Swal.fire(
					  'Hi! $username',
					  'Selamat datang di Website Pilkasis SMKN 2 Kota Bekasi',
					  'info'
					)
				</script>");
					redirect('user');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissable">
				    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
				    Password anda salah.
				  </div>');
				redirect('auth');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissable">
		    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
		    NIS tidak ditemukan.
		  </div>');
			redirect('auth');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('nis');
		$this->session->unset_userdata('role_id');

		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable">
		    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
		    Kamu berhasil log out.
		  </div>');
		redirect('auth');
	}
	public function blocked()
	{
		$this->load->view('auth/blocked');
	}
	public function notfound()
	{
		$this->load->view('auth/notfound');
	}
}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */
