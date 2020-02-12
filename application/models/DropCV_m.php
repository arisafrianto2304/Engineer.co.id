<?php

/**
 *Register Admin Staff Model
 */
class DropCV_m extends CI_Model 
{
    //Untuk mengupload CV ke dalam folder Uploads -> curriculum_vitae
    public function upload($file_name, $name) //Upload File cv Model 
    {
        //menambahkan cv baru ke folder uploads
        // $config = array();
        $config['upload_path']          = 'uploads/cv';
        $config['file_name']            = $name;
        $config['overwrite']            = TRUE;
        $config['allowed_types']        = 'pdf';
        $config['max_size']             = 10240;

        $this->upload->initialize($config);
        //lakukan do upload file untuk mendapatkan nama file
        if ($this->upload->do_upload($file_name)) {
            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
            return $return;
        } else{
     	    // Jika gagal :
     		$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
     		return $return;
     	}
    }
     
    public function save($data) //save file cv model
    {    
        $this->db->insert('job_seeker', $data);
    }
    public function saveRequest($dataRequest) //save file cv model
    {    
        $this->db->insert('job_request', $dataRequest);
    }
    public function saveKontak($dataKontak) //save file cv model
    {    
        $this->db->insert('kontak', $dataKontak);
    }

}
