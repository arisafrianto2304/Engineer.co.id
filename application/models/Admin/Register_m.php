<?php

/**
 *Register Admin Staff Model
 */
class Register_m extends CI_Model 
{
     //Untuk mengecek apakah ada duplikat atau tidak
     public function Cek_Duplikat($email) 
     {
          // mengecek apakah email udah terdaftar atau belum
          $this->db->select('*');
          $this->db->from('admin_staff');
          $this->db->where('email',$email);
          $query = $this->db->get();
          return $query->row();
     }
     
     public function SignUp($email,$password) //Sign Up Job Seeker Model
     {    
          // upload data ke table admin data staff
          $data = array (
               'email' => $email,
               'password' => md5($password)
          );
          $this->db->insert('admin_staff', $data);
          $id = $this->db->insert_id();
          // upload data ke table admin data staff
          $data = array (
               'id' => $id,
               'email' => $email
          );
          $this->db->insert('admin_data_staff', $data);
     }

}
