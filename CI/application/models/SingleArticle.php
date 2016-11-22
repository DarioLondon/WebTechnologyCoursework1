<?php
class SingleArticle extends CI_Model{


function __construct(){
    parent::__construct();
    $this->load->database();
}

public function fetchDataArticle($id){

    $this->db->select('*');
    $this->db->from('ArticleList');
    $this->db->where('ArticleList.Id', $id);
    $res=$this->db->get();
    return $res->result();


}
public function fetchDataComments($id){

    $this->db->select('*');
    $this->db->from('Comments');
    $this->db->where('Comments.TopicId', $id);
    $res=$this->db->get();
    return $res->result();


}
public function fetchDataReplies(){

    $this->db->select('*');
    $this->db->from('Replies');
    $res=$this->db->get();
    return $res->result();
}










}
?>
