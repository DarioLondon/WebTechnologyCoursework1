<?php
class SingleController extends CI_Controller{

public function __construct(){
    parent::__construct();
    $this->load->helper('url');
    $this->load->Model('SingleArticle');
}

public function getData(){
      $this->data['posts']=$this->SingleArticle->getData($this->uri->segment(3));
      var_dump($this->data);
      $this->load->view('single',$this->data);
}

public function addComments(){
  $id=$this->input->post('id');
  if((null!==$this->input->post('username')) && (null!==$this->input->post('text'))){
    $data=array(
        "Username"=>$this->input->post('username'),
        "Text"=>$this->input->post('text'),
        "TopicId"=>$id
    );
    $this->SingleArticle->addComment($data);
    redirect("/SingleController/getData/$id");

}
else{
  echo "You have to fill all the fields ";
}
}




}
 ?>
