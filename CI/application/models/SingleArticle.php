<?php
class SingleArticle extends CI_Model{


function __construct(){
    parent::__construct();
    $this->load->database();
}

function getDAta($id){
    $this->db->where('id',$id);
    $res=$this->db->get('Article');
    return $res->result();


}


}
?>
