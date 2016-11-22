<?php
class Home extends CI_Model{

  //Class constructor
  public function __construct(){
      parent::__construct();
        $this->load->database();
  }

  public function getAll($limit,$start){
    
     $this->db->limit($limit,$start);
      $this->db->order_by("Id", "desc");
      $data=$this->db->get('ArticleList');
      return $data->result();
      
  }

public function get_Count(){
    return  $this->db->count_all('ArticleList');
}

public function filter($val,$limit,$start){
  if($val==0){
      $this->db->limit($limit,$start);
      $this->db->order_by("Id", "desc");
      $data=$this->db->get('ArticleList');
      return $data->result();
    }
    elseif($val==1) {
      $this->db->limit($limit,$start);
      $this->db->order_by("Id", "asc");
      $data=$this->db->get('ArticleList');
      return $data->result();
    }
    elseif($val==2){
      $this->db->limit($limit,$start);
      $this->db->order_by("Rate", "desc");
      $data=$this->db->get('ArticleList');
      return $data->result();
    }
    else{
      $this->db->limit($limit,$start);
      $this->db->order_by("Rate", "asc");
      $data=$this->db->get('ArticleList');
      return $data->result();
    }


}

  public function addNew($data){

    $this->db->insert('ArticleList',$data);
  }
  public function addOne($id){

     $this->db->set('Rate', 'Rate+1', FALSE);
     $this->db->where('id', $id);
     $this->db->update('ArticleList');
  }

  public function minusOne($id){

      $this->db->set('Rate', 'Rate-1',FALSE);
      $this->db->where('id', $id);
      $this->db->update('ArticleList');
  }

}

?>
