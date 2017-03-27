<?php
class publicity_model  extends CI_Model
{
    public function getdata()
    {
        $data=$this->db->query('SELECT * FROM institute');
        return $data->result();
    }
    public function getmembers()
    {
        
        $this->db->where('team',"publicity");
        $data=$this->db->get('users');
        return $data->result();
    }
    public function gettask()
    {
        $data=$this->db->query('SELECT action,team,done FROM ptask');
        return $data->result();
    }

    public function insertCompany($data)
    {
        return $this->db->insert('institute',$data);
    }
    public function insertUser($data)
    {
       $this->db->insert('users',$data);
    }
    public function inserttask($data)
    {
        $this->db->insert('ptask',$data);
    }
    public function updatevisited($data,$id)
    {
        
        $this->db->where('id',$id);
        $this->db->update('institute',$data);
    }
}
?>