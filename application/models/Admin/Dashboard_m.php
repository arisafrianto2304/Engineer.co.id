<?php

/**
 *Login Admin Staff Model
 */
class Dashboard_m extends CI_Model 
{
    public function JobVacancy_R() //Read Job Vacancy Model
    {    
        //mengambil data job vacancy
        $this->db->select('*');
        $this->db->from('job_vacancy');
        $query = $this->db->get();
        return $query->result();
    }

    public function JobSeeker_R() //Read Job Seeker Model
    {    
        //mengambil data job seeker
        $this->db->select('*');
        $this->db->from('job_seeker');
        $query = $this->db->get();
        return $query->result();
    }

    public function Company_R() //Read Company Model
    {    
        //mengambil data company
        $this->db->select('*');
        $this->db->from('company');
        $query = $this->db->get();
        return $query->result();
    }

    public function Staff_R($id) //Read Company Model
    {    
        //mengambil data company
        $this->db->select('*');
        $this->db->from('admin_data_staff');
        $this->db->where('id',$id);
        $query = $this->db->get();
        return $query->first_row('array');
    }

}
