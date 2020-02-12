<?php

/**
 *Login Admin Staff Model
 */
class Login_m extends CI_Model 
{
    public function SignIn($email,$password) //Sign Up Job Seeker Model
    {    
        //check user admin di database
        $this->db->select('*');
        $this->db->from('admin_staff');
        $this->db->where(array('email' => $email, 'password' => md5($password)));
        $query = $this->db->get();
        $cek_status = $query->row();
        if($cek_status ==  TRUE) {
            $_SESSION['main_data']['id'] = $cek_status->id;
            return 1;
        }
        //check user admin di database jika password error
        $this->db->select('*');
        $this->db->from('admin_staff');
        $this->db->where('email',$email);
        $query = $this->db->get();
        $cek_status = $query->row();
        if($cek_status ==  TRUE) {
            return 2;
        }

        //check user admin di database jika email error
        $this->db->select('*');
        $this->db->from('admin_staff');
        $this->db->where('password',md5($password));
        $query = $this->db->get();
        $cek_status = $query->row();
        if($cek_status ==  TRUE) {
            return 3;
        } else {
            return 4;
        }
    }

    

}
