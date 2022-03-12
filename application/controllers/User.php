<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		logged_in();
	}

	public function index()
	{
		$data['user'] = $this->db->get_where('user', ["nis" => $this->session->userdata('nis')])->row_array();
		$data['title'] = "Home";
		$data['paslon'] = $this->db->get('paslon')->result_array();

		$this->load->view('templates/header', $data);
		$this->load->view('home/index', $data);
		$this->load->view('templates/footer');
	}
	public function changePassword()
	{
		$data['user'] = $this->db->get_where('user', ["nis" => $this->session->userdata('nis')])->row_array();
		$data['title'] = "Change Password";


		$this->form_validation->set_rules('current_password', 'Curent Password', 'required|trim');
		$this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[3]|matches[new_password2]');
		$this->form_validation->set_rules('new_password2', 'Repeat New Password', 'required|trim|min_length[3]|matches[new_password1]');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header', $data);
			$this->load->view('profile/changePassword', $data);
			$this->load->view('templates/footer');
		} else {
			$current_password = $this->input->post('current_password');
			$new_password = $this->input->post('new_password1');
			if ($current_password != $data['user']['password']) {
				$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissable">
			    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
			    Current Password salah!.
			  </div>');
				redirect('user/changePassword');
			} else {
				if ($current_password == $new_password) {
					$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissable">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
					New Password tidak boleh sama dengan Current Password!.
				  </div>');
					redirect('user/changePassword');
				} else {
					$this->db->set('password', $new_password);
					$this->db->where('nis', $this->session->userdata('nis'));
					$this->db->update('user');
					$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
					Password berhasil diubah!.
				  </div>');
					redirect('user/changePassword');
				}
			}
		}
	}

	public function profile()
	{
		$data['user'] = $this->db->get_where('user', ["nis" => $this->session->userdata('nis')])->row_array();
		$user = $data['user'];
		$data['title'] = "Profile";

		$this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[3]|max_length[50]');
		$this->form_validation->set_rules('kelas', 'Kelas', 'trim|required|min_length[3]|max_length[50]');

		$this->form_validation->set_rules('gender', 'Gender', 'trim|max_length[1]');
		$this->form_validation->set_rules('address', 'Address', 'trim|min_length[5]|max_length[100]');
		$this->form_validation->set_rules('telp', 'Telp', 'trim|min_length[6]|max_length[20]');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('profile/index', $data);
			$this->load->view('templates/footer');
		} else {


			// cek jika ada file gambar yang diupload

			$upload_image = $_FILES['image']['name'];

			if ($upload_image) {

				$config['upload_path'] = './assets/back/assets/images/';
				$config['allowed_types'] = 'jpeg|jpg|png';
				$config['max_size']  = '2048';

				$this->load->library('upload', $config);

				if (!$this->upload->do_upload('image')) {
					$error = $this->upload->display_errors();
				} else {

					$old_image = $data['user']['image'];

					if ($old_image != 'default.jpg') {
						unlink(FCPATH . '/assets/back/assets/images/' . $old_image);
					}

					$new_image = $this->upload->data('file_name');

					$this->db->set('image', $new_image);
				}
			}


			$name = htmlspecialchars($this->input->post('name'));
			$kelas = htmlspecialchars($this->input->post('kelas'));
			$gender = htmlspecialchars($this->input->post('gender'));
			$address = htmlspecialchars($this->input->post('address'));
			$telp = htmlspecialchars($this->input->post('telp'));


			$this->db->set('name', $name);
			$this->db->set('kelas', $kelas);
			$this->db->set('gender', $gender);
			$this->db->set('address', $address);
			$this->db->set('telp', $telp);
			$this->db->where('nis', $user['nis']);
			$this->db->update('user');

			if ($error) {
				$this->session->set_flashdata('message', "<script type='text/javascript'>
			Swal.fire({
				icon: 'warning',
				title: 'Gagal',
				text: 'File gambar yang anda masukan salah',
			  });</script>");
			} else {
				$this->session->set_flashdata('message', "<script type='text/javascript'>
			Swal.fire({
				icon: 'success',
				title: 'Berhasil',
				text: 'Data berhasil diubah',
			  });</script>");
			}

			redirect('user/profile');
		}
	}

	public function coblos($paslon_id)
	{
		$user = $this->db->get_where('user', ["nis" => $this->session->userdata('nis')])->row_array();
		$paslon = $this->db->get_where('paslon', ['id' => $paslon_id])->row_array();

		if ($user['password'] != '123') {
			if ($user['vote'] != '1') {
				if ($user['role_id'] != '1') {
					$data = [
						'vote' => 1,
						'pilihan' => $paslon_id
					];
					$this->db->set($data);
					$this->db->where('id', $user['id']);
					$this->db->update('user');

					$this->db->set('jumlah_vote', $paslon['jumlah_vote'] + 1);
					$this->db->where('id', $paslon['id']);
					$this->db->update('paslon');
					$this->session->set_flashdata('message', "<script type='text/javascript'>
					Swal.fire({
						icon: 'success',
						title: 'Berhasil',
						text: 'Pilihan anda telah kami simpan',
					});</script>");
					redirect("user");
				} else {

					$this->session->set_flashdata('message', "<script type='text/javascript'>
					Swal.fire({
						icon: 'error',
						title: 'Gagal...',
						text: 'Admin tidak mempunyai hak pilih!',
					});</script>");
					redirect('user');
				}
			} else {
				$this->session->set_flashdata('message', "<script type='text/javascript'>
				Swal.fire({
					icon: 'error',
					title: 'Gagal...',
					text: 'Hak pilih anda telah digunakan!',
				});</script>");
				redirect('user');
			}
		}
		$this->session->set_flashdata('message', "<script type='text/javascript'>
		Swal.fire({
			icon: 'error',
			title: 'Gagal...',
			text: 'Silahkan ubah password anda terlebih dahulu sebelum menggunakan hak pilih!',
		  });</script>");
		redirect('user');
	}
}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
