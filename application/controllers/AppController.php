<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AppController extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('ModelDepresi');
        $this->load->model('ModelGejala');
        $this->load->model('ModelKelompok');
        $this->load->model('ModelHitung');
        $this->load->helper('url');
    }

	public function index()
	{
        $data['page'] = 'home';
        $data['title'] = 'Sistem Pakar | Home';
        $data['gejala']=$this->ModelGejala->getGejala()->num_rows();
        $data['depresi']=$this->ModelDepresi->getDepresi();
        $data['rules']=$this->db->get('rules')->num_rows();
        $this->load->view('template/user/header', $data);
        $this->load->view('home', $data);
        $this->load->view('template/user/footer');        
	}

    public function depresi()
	{
        $data['page'] = 'jenis_depresi';
        $data['title'] = 'Sistem Pakar | Jenis Depresi';
        $data['depresi'] = $this->ModelDepresi->getDepresi();
        $this->load->view('template/user/header', $data);
        $this->load->view('user/jenis_depresi', $data);
        $this->load->view('template/user/footer');
	}

    public function gejala()
	{
        $data['page'] = 'gejala_depresi';
        $data['title'] = 'Sistem Pakar | Jenis Depresi';
        $data['gejala'] = $this->ModelGejala->getGejala()->result();
        $this->load->view('template/user/header', $data);
		$this->load->view('user/gejala_depresi', $data);
        $this->load->view('template/user/footer');
	}

    public function kelompok()
	{
        $data['page'] = 'diagnosa';
        $data['title'] = 'Sistem Pakar | Diagnosa';
        $data['kelompok'] = $this->ModelKelompok->getRules();
        $this->load->view('template/user/header', $data);
		$this->load->view('user/diagnosa', $data);
        $this->load->view('template/user/footer');
	}

    public function konsultasi()
	{
        $data['page'] = 'konsultasi';
        $data['title'] = 'Sistem Pakar | Konsultasi';
        $data['kelompok'] = $this->ModelGejala->getGejala()->result();
        $this->load->view('template/user/header', $data);
		$this->load->view('user/konsultasi', $data);
        $this->load->view('template/user/footer');
	}

    public function riwayat()
	{
        $data['page'] = 'riwayat';
        $data['title'] = 'Sistem Pakar | Riwayat Konsultasi';
        $this->db->select('riwayat.*, depresi.nama_depresi', 'user.username');
        $this->db->from('riwayat');
        $this->db->join('depresi', 'riwayat.id_depresi = depresi.id');
        $this->db->join('user', 'riwayat.nama = user.username');
        $this->db->where('riwayat.nama', $this->session->username);
        $data['riwayat'] = $this->db->get()->result();
        $this->load->view('template/user/header', $data);
		$this->load->view('user/riwayat', $data);
        $this->load->view('template/user/footer');
	}

    public function hitung()
	{
        $data['page'] = 'konsultasi';
        $data['title'] = 'Sistem Pakar | Konsultasi';
        $this->db->truncate('hitung');
        $gejala = $this->input->post('gejala');
        $kondisi = $this->input->post('kondisi');
        $cf = $this->input->post('cf');
        $count = array_count_values($kondisi);
        if($count["0.0"]>17){
            $this->session->set_flashdata('flash', 'Silahkan isikan lebih banyak gejala yang anda derita');
            redirect('konsultasi');
        }
        $data = array();
        $index = 0;
        foreach ($gejala as $d) {
            array_push($data, array(
                'gejala_id' => $d,
                'kondisi' => $kondisi[$index],
                'cf_pakar' => $cf[$index],
                'cf_kombine' => $kondisi[$index] * $cf[$index],
            ));
            $index++;
        }
        $this->db->insert_batch('hitung', $data);
        redirect('hasil');
	}

    public function hasil(){
        $data['page'] = 'konsultasi';
        $data['title'] = 'Sistem Pakar | Konsultasi';
        $this->load->dbforge();
        $data['data'] = $this->ModelHitung->get();

        foreach($data['data'] as $key => $value){
            if($key === 0){
                $this->db->truncate('hasil');
                $this->dbforge->drop_table('merge_cf', TRUE);
                $this->dbforge->drop_table('hitung_per_depresi', TRUE);
                $this->dbforge->drop_table('merge_cf_copy', TRUE);
                $this->db->query('create table merge_cf as SELECT depresi.id, depresi.nama_depresi, gejala.gejala, rules.gejala_id, hitung.cf_kombine FROM rules inner join hitung on rules.gejala_id = hitung.gejala_id inner join gejala on hitung.gejala_id = gejala.id inner join depresi on rules.depresi_id = depresi.id ');
                $this->db->query('create table hitung_per_depresi as SELECT id, nama_depresi, gejala, gejala_id, cf_kombine from merge_cf where id = (select min(id) from merge_cf)');
                $this->db->query('delete from merge_cf where id = (select min(id) from merge_cf)');
                $data['cf'] = $this->ModelHitung->getPerDepresi();
                $data['hasil']=$this->ModelHitung->hitung($data['cf']);
                $data['id']=$this->ModelHitung->arrayId($data['cf']);
                $insert = array(
                    "hasil" => $data['hasil'],
                    "id_depresi" => $data['id'],
                );
                $this->db->insert('hasil', $insert);
                
            }else{
                $this->dbforge->drop_table('hitung_per_depresi', TRUE);
                $this->db->query('create table hitung_per_depresi as SELECT id, nama_depresi, gejala, gejala_id, cf_kombine from merge_cf where id = (select min(id) from merge_cf)');
                $this->db->query('delete from merge_cf where id = (select min(id) from merge_cf)');
                $data['cf'] = $this->ModelHitung->getPerDepresi();
                $data['hasil']=$this->ModelHitung->hitung($data['cf']);
                $data['id']=$this->ModelHitung->arrayId($data['cf']);
                
                $insert = array(
                    "hasil" => $data['hasil'],
                    "id_depresi" => $data['id'],
                );
                $this->db->insert('hasil', $insert);
            }
        }
        $riwayat = $this->ModelHitung->getHasilTertinggi();
        $t=time();
        foreach($riwayat as $a){
            $post = array(
                "id_depresi" => $a->id_depresi,
                "nama" => $this->session->username,
                "kemungkinan" => $a->hasil,
                "tanggal" => date("Y-m-d",$t),
            );
            $this->db->insert('riwayat', $post);
        }
        $data['kesimpulan'] = $this->ModelHitung->kesimpulan();
        $this->load->view('template/user/header', $data);
		$this->load->view('user/hasil', $data);
        $this->load->view('template/user/footer');
    }

    public function login()
	{
		$this->load->view('auth/login');
	}

    public function register()
	{
		$this->load->view('auth/register');
	}
}
