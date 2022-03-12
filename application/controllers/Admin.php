<?php
defined('BASEPATH') or exit('No direct script access allowed');

//load Spout Library
require_once APPPATH . 'third_party/spout/src/Spout/Autoloader/autoload.php';

use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        logged_in();
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ["nis" => $this->session->userdata('nis')])->row_array();
        $data['title'] = 'Admin';

        $data['dpt'] = $this->db->get_where('user', ['role_id' => "2"])->num_rows();
        $data['belum'] = $this->db->get_where('user', ['role_id' => "2", 'vote' => '0'])->num_rows();
        $data['masuk'] = $this->db->get_where('user', ['role_id' => "2", 'vote' => '1'])->num_rows();
        $data['paslon'] = $this->db->get('paslon')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }
    public function datapaslon()
    {
        $data['user'] = $this->db->get_where('user', ["nis" => $this->session->userdata('nis')])->row_array();
        $data['title'] = 'Data Paslon';
        $data['paslon'] = $this->db->get('paslon')->result_array();

        $this->form_validation->set_rules('nama', 'Nama Paslon', 'required|trim');
        $this->form_validation->set_rules('jargon', 'Jargon Paslon', 'required|trim');
        $this->form_validation->set_rules('visi', 'Visi Paslon', 'required|trim');
        $this->form_validation->set_rules('misi', 'Misi Paslon', 'required|trim');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('admin/datapaslon', $data);
            $this->load->view('templates/footer');
        } else {

            //cek jika ada gambar yang akan diupload
            $upload_image = $_FILES['image']['name'];


            if ($upload_image) {
                $config['allowed_types'] = 'jpg|png|jpeg';
                $config['max_size'] = '3072';
                $config['upload_path'] = './assets/back/assets/images/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $gambar = $this->upload->data('file_name');
                } else {
                    echo $this->upload->display_errors();
                }

                $data = [
                    'nama' => $this->input->post('nama'),
                    'image' => $gambar,
                    'jargon' => $this->input->post('jargon'),
                    'visi' => $this->input->post('visi'),
                    'misi' => $this->input->post('misi')
                ];
                $this->db->insert('paslon', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
               New Paslon added!.
              </div>');
                redirect('admin/datapaslon');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
               Image required!.
              </div>');
                redirect('admin/datapaslon');
            }
        }
    }
    public function adduser()
    {
        $this->form_validation->set_rules('nama', 'Nama User', 'required|trim');
        $this->form_validation->set_rules('nis', 'nis User', 'required|trim');
        $this->form_validation->set_rules('kelas', 'kelas User', 'required|trim');
        $this->form_validation->set_rules('address', 'address User', 'required|trim');



        $data = [
            'name' => $this->input->post('name'),
            'image'         => 'default.jpg',
            'password'      => '123',
            'gender'        => $this->input->post('gender'),
            'telp'          => '',
            'role_id'       => '2',
            'vote'          => '0',
            'pilihan'       => '0',
            'nis' => $this->input->post('nis'),
            'kelas' => $this->input->post('kelas'),
            'address' => $this->input->post('address')
        ];
        $this->db->insert('user', $data);
        $this->session->set_flashdata('message', "<script type='text/javascript'>
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil',
                        text: 'User berhasil ditambahkan',
                    });</script>");
        redirect('admin/userManagement');
    }
    public function editpaslon($id)
    {
        $data['user'] = $this->db->get_where('user', ["nis" => $this->session->userdata('nis')])->row_array();
        $data['title'] = 'Data Paslon';
        $data['paslon'] = $this->db->get_where('paslon', ['id' => $id])->row_array();

        $this->form_validation->set_rules('nama', 'Nama Paslon', 'required|trim');
        $this->form_validation->set_rules('jargon', 'Jargon Paslon', 'required|trim');
        $this->form_validation->set_rules('visi', 'Visi Paslon', 'required|trim');
        $this->form_validation->set_rules('misi', 'Misi Paslon', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('admin/editpaslon', $data);
            $this->load->view('templates/footer');
        } else {
            $upload_image = $_FILES['image']['name'];
            $nama = $this->input->post('nama');
            $jargon = $this->input->post('jargon');
            $visi = $this->input->post('visi');
            $misi = $this->input->post('misi');


            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size'] = '3072';
                $config['upload_path'] = './assets/back/assets/images/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['paslon']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/back/assets/images/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $data = [
                'nama' => $nama,
                'jargon' => $jargon,
                'visi' => $visi,
                'misi' => $misi
            ];
            $this->db->set($data);
            $this->db->where('id', $id);
            $this->db->update('paslon');
            $this->session->set_flashdata('message', "<script type='text/javascript'>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: 'Data paslon berhasil diubah',
              });</script>");
            redirect('admin/editpaslon/' . $id);
        }
    }
    public function deletepaslon($id)
    {
        $this->db->delete('paslon', ['id' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        Paslon deleted!.
      </div>');
        redirect('admin/datapaslon');
    }

    public function role()
    {
        $data['user'] = $this->db->get_where('user', ["nis" => $this->session->userdata('nis')])->row_array();
        $data['title'] = 'Role';
        $data['role'] = $this->db->get('user_role')->result_array();

        $this->form_validation->set_rules('role', 'Role', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('admin/role', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->insert('user_role', ['role' => $this->input->post('role')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable">
		    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
		    New role added!.
		  </div>');
            redirect('admin/role');
        }
    }
    public function roledelete($role_id)
    {
        $this->db->delete('user_role', ['id' => $role_id]);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        Role deleted!.
      </div>');
        redirect('admin/role');
    }
    public function roleaccess($role_id)
    {
        $data['user'] = $this->db->get_where('user', ["nis" => $this->session->userdata('nis')])->row_array();
        $data['title'] = 'Role Access';
        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

        // $this->db->where('id !=', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('admin/role-access', $data);
        $this->load->view('templates/footer', $data['title']);
    }
    public function viewfeed($feed_id)
    {
        $data['user'] = $this->db->get_where('user', ["nis" => $this->session->userdata('nis')])->row_array();
        $data['title'] = 'View Saran & Masukan';
        $data['feedback'] = $this->db->get_where('feedback', ['id' => $feed_id])->row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('admin/viewfeed', $data);
        $this->load->view('templates/footer');
    }
    public function changeAccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_access_menu', $data);


        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        Role access changed!.
      </div>');
    }
    public function menu()
    {
        $data['user'] = $this->db->get_where('user', ["nis" => $this->session->userdata('nis')])->row_array();
        $data['title'] = 'Menu';
        $data['menu'] = $this->db->get('user_menu')->result_array();
        $this->form_validation->set_rules('menu', 'Menu', 'required|trim');



        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('admin/menu', $data);
            $this->load->view('templates/footer');
        } else {
            $chek = $this->db->get_where('user_menu', ['menu' => $this->input->post('menu')]);
            if ($chek->num_rows() < 1) {
                $this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);

                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
           New menu added!.
          </div>');
                redirect('admin/menu');
            }
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
           Menu already used!.
          </div>');
            redirect('admin/menu');
        }
    }
    public function deletemenu($menu_id)
    {
        $this->db->delete('user_menu', ['id' => $menu_id]);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
       Menu deleted!.
      </div>');
        redirect('admin/menu');
    }
    public function deletesubmenu($submenu_id)
    {
        $this->db->delete('user_sub_menu', ['id' => $submenu_id]);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
       Menu deleted!.
      </div>');
        redirect('admin/submenumanagement');
    }
    public function submenuManagement()
    {
        $data['user'] = $this->db->get_where('user', ["nis" => $this->session->userdata('nis')])->row_array();
        $data['title'] = 'Sub Menu';
        $this->load->model('Menu_model', 'menu');
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $data['subMenu'] = $this->menu->getSubMenu();
        $this->form_validation->set_rules('title', 'Title', 'required|trim');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required|trim');
        $this->form_validation->set_rules('url', 'Url', 'required|trim');
        $this->form_validation->set_rules('icon', 'Icon', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('admin/submenu', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'title' => $this->input->post('title'),
                'menu_id' => $this->input->post('menu_id'),
                'url' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
                'is_active' => $this->input->post('is_active'),
            ];
            $this->db->insert('user_sub_menu', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
           New SubMenu added!.
          </div>');
            redirect('admin/submenuManagement');
        }
    }
    public function userManagement()
    {
        $data['user'] = $this->db->get_where('user', ["nis" => $this->session->userdata('nis')])->row_array();
        $data['title'] = 'User Management';
        $data['user_list'] = $this->db->get_where('user', ['role_id' => '2'])->result_array();



        $this->load->view('templates/header', $data);
        $this->load->view('admin/user', $data);
        $this->load->view('templates/footer', $data['title']);
    }
    public function feedback()
    {
        $data['user'] = $this->db->get_where('user', ["nis" => $this->session->userdata('nis')])->row_array();
        $data['title'] = 'Saran dan Masukan';
        $data['feedback'] = $this->db->get('feedback')->result_array();



        $this->load->view('templates/header', $data);
        $this->load->view('admin/feedback', $data);
        $this->load->view('templates/footer');
    }

    public function pass()
    {
        $data['user'] = $this->db->get_where('user', ["nis" => $this->session->userdata('nis')])->row_array();
        $data['title'] = 'Passwords';
        $data['user_list'] = $this->db->get_where('user', ['role_id' => '2'])->result_array();



        $this->load->view('templates/header', $data);
        $this->load->view('admin/files', $data);
        $this->load->view('templates/footer', $data['title']);
    }

    public function importexcel()
    {
        //ketika button submit diklik
        if ($this->input->post('submit', TRUE) == 'upload') {
            $config['upload_path']      = './temp_doc/'; //siapkan path untuk upload file
            $config['allowed_types']    = 'xlsx|xls|csv'; //siapkan format file
            $config['file_name']        = 'doc' . time(); //rename file yang diupload

            $this->load->library('upload', $config);

            $this->load->model('Datamasuk_model', 'import');

            $file = $_FILES['excel']['tmp_name'];
            $eks = strtolower(end(explode('.', $_FILES['excel']['name'])));

            if ($eks === 'csv' && $_FILES['excel']['size'] > 0) {
                $i = 0;
                $handle = fopen($file, 'r');
                while (($row = fgetcsv($handle, 2048))) {
                    $i++;
                    if ($i == 1) continue;

                    $data = [
                        'name'          => $row[2],
                        'nis'           => $row[1],
                        'image'         => 'default.jpg',
                        'password'      => '123',
                        'gender'        => $row[3],
                        'address'       => $row[4],
                        'telp'          => '',
                        'role_id'       => '2',
                        'vote'          => '0',
                        'kelas'         => $row[5],
                        'pilihan'       => '0'
                    ];
                    $this->import->simpancsv($data);
                    $this->session->set_flashdata('message', "<script type='text/javascript'>
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil',
                        text: 'Data User berhasil ditambahkan',
                    });</script>");
                    redirect('admin/userManagement');
                }
            } elseif ($eks === 'xlsx' && $_FILES['excel']['size'] > 0) {

                if ($this->upload->do_upload('excel')) {
                    //fetch data upload
                    $file   = $this->upload->data();

                    $reader = ReaderEntityFactory::createXLSXReader(); //buat xlsx reader
                    $reader->open('temp_doc/' . $file['file_name']); //open file xlsx yang baru saja diunggah

                    //looping pembacaat sheet dalam file        
                    foreach ($reader->getSheetIterator() as $sheet) {
                        $numRow = 1;

                        //siapkan variabel array kosong untuk menampung variabel array data
                        $save   = array();

                        //looping pembacaan row dalam sheet
                        foreach ($sheet->getRowIterator() as $row) {

                            if ($numRow > 1) {
                                //ambil cell
                                $cells = $row->getCells();

                                $data = array(
                                    'name'          => $cells[2],
                                    'nis'           => $cells[1],
                                    'image'         => 'default.jpg',
                                    'password'      => '123',
                                    'gender'        => $cells[3],
                                    'address'       => $cells[4],
                                    'telp'          => '',
                                    'role_id'       => '2',
                                    'vote'          => '0',
                                    'kelas'         => $cells[5],
                                    'pilihan'       => '0'
                                );

                                //tambahkan array $data ke $save
                                array_push($save, $data);
                            }

                            $numRow++;
                        }
                        //simpan data ke database
                        $this->import->simpan($save);

                        //tutup spout reader
                        $reader->close();

                        // hapus file yang sudah diupload
                        unlink('temp_doc/' . $file['file_name']);

                        $this->session->set_flashdata('message', "<script type='text/javascript'>
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil',
                        text: 'Data User berhasil ditambahkan',
                    });</script>");
                        redirect('admin/userManagement');
                    }
                }
            } else {
                $this->session->set_flashdata('message', "<script type='text/javascript'>
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal',
                    text: 'Format data tidak sesuai',
                });</script>");
                redirect('admin/userManagement');
            }
        }
    }

    public function reset($id)
    {
        $user = $this->db->get_where('user', ['id' => $id])->row_array();
        $paslon = $this->db->get_where('paslon', ['id' => $user['pilihan']])->row_array();
        $this->db->set('vote', '0');
        $this->db->where('id', $id);
        $this->db->update('user');

        $this->db->set('jumlah_vote', $paslon['jumlah_vote'] - 1);
        $this->db->where('id', $paslon['id']);
        $this->db->update('paslon');

        $this->db->set('pilihan', '0');
        $this->db->where('id', $id);
        $this->db->update('user');

        $this->session->set_flashdata('message', "<script type='text/javascript'>
		Swal.fire({
			icon: 'success',
			title: 'Berhasil',
			text: 'User berhasil direset',
		  });</script>");
        redirect('admin/userManagement');
    }

    public function resetAll()
    {
        $this->db->set('vote', '0');
        $this->db->update('user');

        $this->db->set('jumlah_vote', '0');
        $this->db->update('paslon');

        $this->db->set('pilihan', '0');
        $this->db->update('user');

        $this->db->set('password', '123');
        $this->db->update('user');

        $this->session->set_flashdata('message', "<script type='text/javascript'>
        Swal.fire({
            icon: 'success',
            title: 'Berhasil',
            text: 'Semua User berhasil direset',
          });</script>");
        redirect('admin/userManagement');
    }
    public function deleteUser($id)
    {
        $user = $this->db->get_where('user', ['id' => $id])->row_array();
        $paslon = $this->db->get_where('paslon', ['id' => $user['pilihan']])->row_array();

        $this->db->set('jumlah_vote', $paslon['jumlah_vote'] - 1);
        $this->db->where('id', $paslon['id']);
        $this->db->update('paslon');

        $this->db->delete('user', ['id' => $id]);
        $this->session->set_flashdata('message', "<script type='text/javascript'>
		Swal.fire({
			icon: 'success',
			title: 'Berhasil',
			text: 'User berhasil dihapus',
		  });</script>");
        redirect('admin/userManagement');
    }
    public function deleteAllUser()
    {
        $this->db->set('jumlah_vote', '0');
        $this->db->update('paslon');
        $this->db->delete('user', ['role_id' => '2']);
        $this->session->set_flashdata('message', "<script type='text/javascript'>
		Swal.fire({
			icon: 'success',
			title: 'Berhasil',
			text: 'Semua User berhasil dihapus',
		  });</script>");
        redirect('admin/userManagement');
    }
    public function deletefeed($id)
    {
        $this->db->delete('feedback', ['id' => $id]);
        $this->session->set_flashdata('message', "<script type='text/javascript'>
		Swal.fire({
			icon: 'success',
			title: 'Berhasil',
			text: 'Feedback berhasil dihapus',
		  });</script>");
        redirect('admin/feedback');
    }
}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */
