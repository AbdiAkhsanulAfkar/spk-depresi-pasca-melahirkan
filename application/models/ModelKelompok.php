<?php

class ModelKelompok extends CI_model
{
    //mengambil data diagnosa
    public function getRules()
    {
        $this->db->select('rules.id as id,depresi.nama_depresi as depresi, gejala.gejala as gejala, gejala.id as gejala_id, gejala.mb as mb, gejala.md as md');
        $this->db->from('depresi');
        $this->db->join('rules','depresi.id=rules.depresi_id');
        $this->db->join('gejala','gejala.id=rules.gejala_id');
        $query =  $this->db->get();
        return $query->result();
    }

    public function tambahDiagnosa($data)
    {
        return $this->db->insert_batch('rules', $data);
    }

    public function getById($id)
    {
        $this->db->select('rules.id as id,depresi.nama_depresi as depresi, depresi.id as depresi_id, gejala.gejala as gejala, gejala.id as gejala_id, gejala.mb as mb, gejala.md as md');
        $this->db->from('depresi');
        $this->db->join('rules','depresi.id=rules.depresi_id');
        $this->db->join('gejala','gejala.id=rules.gejala_id');
        $query =  $this->db->where('rules.id', $id)->get();
        return $query->result();
    }

    // public function getUnchekedDepresi($id)
    // {
    //     $this->db->select('rules.id as id,depresi.nama_depresi as depresi, depresi.id as depresi_id, gejala.gejala as gejala, gejala.id as gejala_id, gejala.mb as mb, gejala.md as md');
    //     $this->db->from('depresi');
    //     $this->db->join('rules','depresi.id=rules.depresi_id');
    //     $this->db->join('gejala','gejala.id=rules.gejala_id');
    //     $query =  $this->db->where('rules.id', $id)->get();
    //     return $query->result();
    //     $this->db->where_not_in('id', $id);
    // }

    public function update($data,$id)
    {
        return $this->db->update('rules', $data, array('id' => $id));
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->delete('rules');
        return $query;
    }

}