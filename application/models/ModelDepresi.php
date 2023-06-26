<?php

class ModelDepresi extends CI_model
{
    protected $gejala = 'gejala';

    //mengambill data depresi
    public function getDepresi()
    {
        $query = $this->db->query("select nama_depresi,detail,
		CASE WHEN
		depresi.solusi Like '%2. %' THEN replace(replace(replace(replace(replace(replace(replace(replace(replace(depresi.solusi, '2. ', '<br><br>2. '), '3. ', '<br><br>3. '),'4. ', '<br><br>4. '),'5. ', '<br><br>5. '),'6. ', '<br><br>6. '),'7. ', '<br><br>7. '),'8. ', '<br><br>8. '),'9. ', '<br><br>9. '), '10. ', '<br><br>10. ')
		ELSE
		depresi.solusi
		END as solusi
		from depresi");
        return $query->result();
    }
 
    //insert(tambah) data depresi
    public function save()
    {
        $data = array(
            "nama_depresi" => $this->input->post('depresi'),
            "detail" => $this->input->post('detail'),
            "solusi" => $this->input->post('solusi'),
        );
        return $this->db->insert('depresi', $data);
    }

    //menngambil data depresi berdasarkan id untuk ditampilkan di form update data
    public function getById($id)
    {
        return $this->db->get_where('depresi', ["id" => $id])->row();
    }

    //fungsi update data depresi
    public function update($data,$id)
    {
        return $this->db->update('depresi', $data, array('id' => $id));
    }

    //menghapus data depresi
    public function delete($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->delete('depresi');
        return $query;
    }

}
