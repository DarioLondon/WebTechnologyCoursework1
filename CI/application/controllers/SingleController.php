<?php
class SingleController extends CI_Controller{

public function __construct(){
    parent::__construct();
    $this->load->Model('SingleArticle');
}

public function getData(){
      $this->data['posts']=$this->SingleArticle->getData($this->uri->segment(3));
      $this->load->view('single',$this->data);
}

}
 ?>
