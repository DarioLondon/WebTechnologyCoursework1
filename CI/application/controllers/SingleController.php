<?php
class SingleController extends CI_Controller{

public function __construct(){
    parent::__construct();
    $this->load->helper('url');
    $this->load->Model('SingleArticle');
    $this->load->Model('Comment');
   
}

public function index($ID=NULL)
{
     $id=$ID;
       if(NULL==$id){
       $id=$this->input->post('id');
      }else{
          $id=$ID;
      }
      $this->data['posts']=$this->SingleArticle->fetchDataArticle($id);
      $this->data['comments']=$this->renderComments($id);
      $this->load->view('header');
      $this->load->view('single',$this->data);
      $this->load->view('commentSection',$this->data);
      $this->load->view('footer');
       
        
}

public function addComments(){

    $id=$this->input->post('articleId');
    $data=array(
        "Username"=>$this->input->post('username'),
        "Text"=>$this->input->post('text'),
        "TopicId"=>$id,
        "ParentId"=>$this->input->post('parentId'),
        "Date"=>date('Y-m-d')
    );

    $this->Comment->insertComment($data);
    $thsi->Comment->increaseCount($id);
    redirect("/SingleController/index/".$id);


}



public function renderComments($id){
    $parents=array();
    $comments=$this->Comment->getCommentsByLinkId($id);
    foreach($comments as $comment){
        $parents[]=$comment->ParentId;
    }
    return $this->createList(0,$id,$parents);

}


function createList($child,$id,$parents) { 
    $list="";
    if (in_array($child,$parents)){
        $result = $this->Comment->getChilds($id,$child);
         $list .= $child== 0 ? "<ul class='list'>" : "<ul>"; 
         foreach ($result as $re) {
              $list .= " <li class='reply-container'> 
              <div class='reply-user'>".$re->Username."</div>  
              <div class='reply-text'>".$re->Text."</div>
               <div class='date'>".preg_replace('/(\d+)\D+(\d+)\D+(\d+)/',"$3-$2-$1",$re->Date)."</div> 
               <a href='#' class='reply'  data-id='".$re->CommentsId."'>Replay </a>
               <div class='hidden-form'>
               <form id='form-".$re->CommentsId."' method='post' action='/index.php/SingleController/addComments' style='display:none;'>
               <input type='hidden' name='parentId' value='".$re->CommentsId."'/>
               <input type='hidden' name='articleId' value='".$re->TopicId."'/>
               <div class='form-group'>
               <label for='username'>Username:</label>
               <input type='text' id='username' name='username' class='form-control'>
               </div>
                <div class='form-group'>
               <label for='text'>Username:</label>
               <input type='text' id='text' name='text' class='form-control'>
               </div>
               <input  type='submit' class='btn' value='reply'>
               </form></div>
               
               "; 
               $list .=$this->createList($re->CommentsId,$id,$parents); 
               $list .= "</li>"; 
               } 
               $list .= "</ul>"; 
               } 
               return $list; 
               }


}
 ?>
