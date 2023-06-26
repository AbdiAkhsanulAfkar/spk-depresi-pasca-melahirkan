<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class ModelHitung extends CI_Model 
{
    public function get()
    {
        $this->db->select('depresi.nama_depresi,hitung.cf_kombine');
        $this->db->from('rules');
        $this->db->join('hitung','rules.gejala_id = hitung.gejala_id');
        $this->db->join('gejala','hitung.gejala_id = gejala.id');
        $this->db->join('depresi','rules.depresi_id = depresi.id');
        $this->db->group_by('depresi.nama_depresi'); 

        $query =  $this->db->get();
        return $query->result_array();
    }

    public function countDepresi()
    {
        $this->db->select('depresi.nama_depresi');
        $this->db->from('rules');
        $this->db->join('hitung','rules.gejala_id = hitung.gejala_id');
        $this->db->join('gejala','hitung.gejala_id = gejala.id');
        $this->db->join('depresi','rules.depresi_id = depresi.id');
        $this->db->group_by('depresi.nama_depresi'); 
        $query =  $this->db->count_all_results();
        return $query;
    }  

    public function getPerDepresi(){
        $this->db->select('id,cf_kombine');
        $this->db->from('hitung_per_depresi');
        $query =  $this->db->get();
        return $query->result_array();
    }

    public function getDepresi(){
        $this->db->select('id');
        $this->db->from('depresi');
        return $this->db->get()->result_array();
    }
    
    public function hitung($data){
        $cf_old = 0;
        foreach($data as $key => $value){
            if($key === 0){
                $cf_old = $value['cf_kombine'];
            }else{
                $cf_old = $cf_old+$value['cf_kombine']*(1-$cf_old);
            }
        }
        return $cf_old;
        }
    
    public function arrayId($data){
        foreach($data as $key => $value){
            if($key === 0){
                $id = $value['id'];
            }else{
                $id = $value['id'];
            }
        }
        return $id;
    }

    public function kesimpulan(){
        $query = $this->db->query("select depresi.nama_depresi, depresi.detail, hasil.hasil,
CASE WHEN
depresi.solusi Like '%2. %' THEN replace(replace(replace(replace(replace(replace(replace(replace(replace(depresi.solusi, '2. ', '<br><br>2. '), '3. ', '<br><br>3. '),'4. ', '<br><br>4. '),'5. ', '<br><br>5. '),'6. ', '<br><br>6. '),'7. ', '<br><br>7. '),'8. ', '<br><br>8. '),'9. ', '<br><br>9. '), '10. ', '<br><br>10. ')
ELSE
depresi.solusi
END as solusi
from depresi inner join hasil on depresi.id = hasil.id_depresi WHERE hasil=(select max(hasil) from hasil) LIMIT 1");
        return $query->result();
    }   

    public function getHasilTertinggi(){
        $query = $this->db->query("SELECT * FROM `hasil` WHERE hasil = (select max(hasil) from hasil)");
        return $query->result();
    }
    }

    
/* End of file ModelHitung_model.php and path \application\models\ModelHitung_model.php */
    