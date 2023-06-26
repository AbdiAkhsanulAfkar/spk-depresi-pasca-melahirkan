<?php

class ModelGejala extends CI_model
{
    //mengambil data gejala
    public function getGejala()
    {
        return $this->db->get('gejala');
    }

    //memasukan data gejala
    public function save()
    {
        $data = array(
            "gejala" => $this->input->post('gejala'),
            "mb" => $this->input->post('mb'),
            "md" => $this->input->post('md'),
            "cf" => $this->input->post('mb') - $this->input->post('md'),
        );
        return $this->db->insert('gejala', $data);
    }

    public function getById($id)
    {
        return $this->db->get_where('gejala', ["id" => $id])->row();
    }

    //update data gejala
    public function update($data,$id)
    {
        return $this->db->update('gejala', $data, array('id' => $id));
    }

    //mengahpus data gejala
    public function delete($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->delete('gejala');
        return $query;
    }

}
