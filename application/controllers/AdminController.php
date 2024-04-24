<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelDepresi');
        $this->load->model('ModelGejala');
        $this->load->model('ModelKelompok');
        $this->load->helper('url');
    }

    public function home()
    {
        $data['title'] = 'Admin | Dashboard';
        $data['konsultasi']=$this->db->get('riwayat')->num_rows();
        $data['gejala']=$this->ModelGejala->getGejala()->num_rows();
        $data['depresi']=$this->ModelDepresi->getDepresi()->num_rows();
        $data['admin'] = $this->db->get_where('user', ["role_id" => 1])->num_rows();
        $data['user'] = $this->db->get_where('user', ["role_id" => 2])->num_rows();
        // $data['rules']=$this->ModelKelompok->getRules()->num_rows();
        $data['rules']=$this->db->get('rules')->num_rows();
        $this->db->select('user.usia, count(user.usia) count');
        $this->db->from('(select user.username from riwayat inner join user on user.username=riwayat.nama group by user.username) as nama');
        $this->db->join('user', 'user.username = nama.username');
        $this->db->group_by('user.usia');
        $res_usia=$this->db->get()->result();
        $usia = [];
        foreach($res_usia as $row) {
            $usia['usia'][] = $row->usia;
            $usia['count'][] = $row->count;
        }
        $data['usia'] = json_encode($usia);  

        $this->db->select('user.alamat, count(user.alamat) count');
        $this->db->from('(select user.username from riwayat inner join user on user.username=riwayat.nama group by user.username) as alamat');
        $this->db->join('user', 'user.username = alamat.username');
        $this->db->group_by('user.alamat');
        $res_alamat=$this->db->get()->result();
        $alamat = [];
        foreach($res_alamat as $row) {
            $alamat['alamat'][] = $row->alamat;
            $alamat['count'][] = $row->count;
        }
        $data['alamat'] = json_encode($alamat);

        $this->db->select('depresi.nama_depresi,countdep.count');
        $this->db->from('(select depresi.id_depresi, count(id_depresi) count from user inner join (select DISTINCT nama, id_depresi from riwayat) as depresi on depresi.nama=user.username GROUP BY depresi.id_depresi) as countdep');
        $this->db->join('depresi', 'depresi.id = countdep.id_depresi');
        $res_dep=$this->db->get()->result();
        $depresi = [];
        foreach($res_dep as $row) {
            $depresi['depresi'][] = $row->nama_depresi;
            $depresi['count'][] = $row->count;
        }
        $data['dpr'] = json_encode($depresi);
        $this->load->view('template/admin/header_admin', $data);
        $this->load->view('admin/admin', $data);
        $this->load->view('template/admin/footer_admin');
    }

    public function datadepresi()
	{
        $data['title'] = 'Admin | Data Depresi';   
        $data['depresi'] = $this->ModelDepresi->getDepresi()->result();
        $this->load->view('template/admin/header_admin', $data);
		$this->load->view('admin/data/depresi/depresi', $data);
        $this->load->view('template/admin/footer_admin');
	}

    public function tambahdepresi()
	{
        $data['title'] = 'Admin | Tambah Depresi';
        $data['page'] = 'depresi';
        $this->load->view('template/admin/header_admin', $data);
		$this->load->view('admin/data/depresi/tambah_depresi');
        $this->load->view('template/admin/footer_admin');
	}

    public function post()
	{
        $this->session->set_flashdata('flash', 'data depresi ditambah');
        $this->ModelDepresi->save();
        redirect('/admin/datadepresi');
	}

    public function hapusdepresi($id)
	{
        $this->session->set_flashdata('flash', 'data depresi telah dihapus');
        $this->ModelDepresi->delete($id);
        redirect('/admin/datadepresi');
	}

    public function editdepresi($id)
	{
        $data['title'] = 'Admin | Edit Depresi';
        $data['depresi'] = $this->ModelDepresi->getById($id);
        $this->load->view('template/admin/header_admin', $data);
		$this->load->view('admin/data/depresi/edit_depresi', $data);
        $this->load->view('template/admin/footer_admin');
	}

    public function posteditdepresi()
	{
        $this->form_validation->set_rules('depresi','nama_depresi','required');
		$this->form_validation->set_rules('detail','detail','required');
		$this->form_validation->set_rules('solusi','solusi','required');
		if ($this->form_validation->run()==true)
        {
            $this->session->set_flashdata('flash', 'data depresi telah diubah');
		 	$id = $this->input->post('id');
			$data['nama_depresi'] = $this->input->post('depresi');
			$data['detail'] = $this->input->post('detail');
			$data['solusi'] = $this->input->post('solusi');
			$this->ModelDepresi->update($data,$id);
			redirect('admin/datadepresi');
		}else{
            echo validation_errors();
            return;
        }
	}

    public function datagejala()
	{
        $data['title'] = 'Admin | Data Gejala';
        $data['gejala'] = $this->ModelGejala->getGejala()->result();
        $this->load->view('template/admin/header_admin', $data);
		$this->load->view('admin/data/gejala/gejala', $data);
        $this->load->view('template/admin/footer_admin');
	}

    public function tambahgejala()
	{
        $data['title'] = 'Admin | Tambah Gejala';
        $this->load->view('template/admin/header_admin', $data);
		$this->load->view('admin/data/gejala/tambah_gejala');
        $this->load->view('template/admin/footer_admin');
	}

    public function postgejala()
	{
        $this->form_validation->set_rules('gejala','gejala','required');
        $this->form_validation->set_rules('mb','mb','required');
		$this->form_validation->set_rules('md','md','required');
		if ($this->form_validation->run()==true)
        {
            $this->session->set_flashdata('flash', 'data gejala ditambah');
			// $data['gejala'] = $this->input->post('gejala');
            // $data['mb'] = $this->input->post('mb');
			// $data['md'] = $this->input->post('gejmdala');
			$this->ModelGejala->save();
			redirect('admin/datagejala');
		}else{
            $this->session->set_flashdata('msg', 'Silakan isi kolom gejala!!!');
            redirect('admin/tambahgejala');
            return;
        }

        $this->ModelDepresi->save();
        redirect('/admin/depresi');
	}

    public function editgejala($id)
	{
        $data['title'] = 'Admin | Edit Gejala';
        $data['gejala'] = $this->ModelGejala->getById($id);
        $this->load->view('template/admin/header_admin', $data);
		$this->load->view('admin/data/gejala/edit_gejala', $data);
        $this->load->view('template/admin/footer_admin');
	}

    public function posteditgejala()
	{
        $this->form_validation->set_rules('gejala','gejala','required');
		$this->form_validation->set_rules('mb','mb','required');
		$this->form_validation->set_rules('md','md','required');
		if ($this->form_validation->run()==true)
        {
            $this->session->set_flashdata('flash', 'data gejala telah diubah');
		 	$id = $this->input->post('id');
			$data['gejala'] = $this->input->post('gejala');
			$data['mb'] = $this->input->post('mb');
			$data['md'] = $this->input->post('md');
            $data['cf'] = $this->input->post('mb') - $this->input->post('md');
			$this->ModelGejala->update($data,$id);
			redirect('admin/datagejala');
		}else{
            echo validation_errors();
            return;
        }
	}

    public function hapusgejala($id)
	{
        $this->session->set_flashdata('flash', 'data gejala telah dihapus');
        $this->ModelGejala->delete($id);
        redirect('/admin/datagejala');
	}

    public function datadiagnosa()
	{
        $data['title'] = 'Admin | Data Diagnosa';
        $data['kelompok'] = $this->ModelKelompok->getRules();
        $this->load->view('template/admin/header_admin', $data);
		$this->load->view('admin/data/diagnosa/diagnosa', $data);
        $this->load->view('template/admin/footer_admin');
	}

    public function tambahdiagnosa()
	{
        $data['title'] = 'Admin | Tambah Diagnosa';
        $data['gejala'] = $this->ModelGejala->getGejala()->result();
        $data['depresi'] = $this->ModelDepresi->getDepresi()->result();
        $this->load->view('template/admin/header_admin', $data);
		$this->load->view('admin/data/diagnosa/tambah_diagnosa',$data);
        $this->load->view('template/admin/footer_admin');
	}

    public function posttambahdiagnosa()
    {
        $this->session->set_flashdata('flash', 'data diagnosa ditambah');
        $depresi = $this->input->post('depresi');
        $gejala = $this->input->post('gejala');
        $data = array();
        $index = 0;
        foreach ($depresi as $d) {
            array_push($data, array(
                'depresi_id' => $d,
                'gejala_id' => $gejala[$index],
            ));
        }
        $this->ModelKelompok->tambahDiagnosa($data);
        redirect('admin/datadiagnosa');
    }

    public function editdiagnosa($id)
	{
        $data['title'] = 'Admin | Edit Diagnosa';
        $data['depresi'] = $this->ModelKelompok->getById($id);
        $gejala = $this->ModelKelompok->getById($id);
        foreach ($gejala as $g) {
            $query = $this->db->query("SELECT gejala.id from depresi INNER JOIN rules on depresi.id=rules.depresi_id INNER join gejala on gejala.id=rules.gejala_id where depresi.id=1");
            $array = $query->result_array();
            $this->db->select('id, gejala');
            $this->db->from('gejala');
            $this->db->where_not_in('id', array_column($array, 'id'));
            $data['gejala'] = $this->db->get()->result();
        }        
        // $data['depresi'] = $this->ModelKelompok->getUnchekedDepresi($id);
        $this->load->view('template/admin/header_admin', $data);
		$this->load->view('admin/data/diagnosa/edit_diagnosa', $data);
        $this->load->view('template/admin/footer_admin');
	}

    public function posteditdiagnosa()
	{
        $this->session->set_flashdata('flash', 'data gejala telah diubah');
        $id = $this->input->post('id');
        $data['gejala_id'] = $this->input->post('gejala');
        $this->ModelKelompok->update($data,$id);
        redirect('admin/datadiagnosa');        
	}

    public function hapusdiagnosa($id)
	{
        $this->session->set_flashdata('flash', 'data gejala telah dihapus');
        $this->ModelKelompok->delete($id);
        redirect('/admin/datadiagnosa');
	}

    public function datariwayat(){
        $data['title'] = 'Admin | Riwayat Diagnosa';
        $this->db->select('riwayat.*, depresi.nama_depresi, user.nama, user.usia, user.alamat');
        $this->db->from('riwayat');
        $this->db->join('depresi', 'riwayat.id_depresi = depresi.id');
        $this->db->join('user', 'riwayat.nama = user.username');
        $data['riwayat'] = $this->db->get()->result();
        $this->load->view('template/admin/header_admin', $data);
		$this->load->view('admin/riwayat', $data);
        $this->load->view('template/admin/footer_admin');
    }

    public function logout(){
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('usia');
        $this->session->unset_userdata('alamat');
        $this->session->unset_userdata('role_id');
        $this->session->sess_destroy();
        redirect('/');
    }
}
