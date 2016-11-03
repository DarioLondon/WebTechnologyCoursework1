<?php
class Home extends CI_Model{

  //Class constructor
  public function __construct(){
      parent::__construct();
        $this->load->database();
  }

  public function getAll(){
      $data=$this->db->get('Article');
      return $data->result();
  }


  public function sortByDate($val){
    $data;
    if($val==0){

    }
    else {
      # code...
    }
    return $data;
  }

  public function sortByRate($val){
    $data;
    if($val==0){

    }
    else {
      # code...
    }
    return $data;
  }
  public function addNew($data){

    $this->db->insert('Article',$data);
  }
  public function addOne($id){

     $this->db->set('Rate', 'Rate+1', FALSE);
     $this->db->where('id', $id);
     $this->db->update('Article');
  }

  public function minusOne($id){

      $this->db->set('Rate', 'Rate-1',FALSE);
      $this->db->where('id', $id);
      $this->db->update('Article');
  }

}

?>
