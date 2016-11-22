<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class Comment extends CI_Model
{
  //Class constructor
  public function __construct(){
      parent::__construct();
      $this->load->database();
        
  }
    public function getCommentsByLinkId($id){
        $this->db->where('TopicId',$id);
        $comments=$this->db->get('Comments');
        return $comments->result();
    }
    public function getChilds($id,$parentId){
         $this->db->where('TopicId',$id);
         $this->db->where('ParentId',$parentId);
        $comments=$this->db->get('Comments');
        return $comments->result();
    }

    public function insertComment($data){
        $this->db->insert('Comments',$data);
    }

    public function increaseCount($id){
      $this->db->set('CommentsCount', 'CommentsCount+1', FALSE);
       $this->db->where('Id',$id);
       $this->db->update('ArticleList');
        
    }


 



}