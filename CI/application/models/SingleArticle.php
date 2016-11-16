<?php
class SingleArticle extends CI_Model{


function __construct(){
    parent::__construct();
    $this->load->database();
}

function getDAta($id){

   $this->db->select('*');
    $this->db->from('ArticleList');
    $this->db->join('Comments', 'ArticleList.Id = Comments.TopicId');
    $this->db->where('ArticleList.Id', $id);
    $res=$this->db->get();
    return $res->result();


}
function addComment($data){
    $this->db->insert('Comments',$data);
}


}
?>
