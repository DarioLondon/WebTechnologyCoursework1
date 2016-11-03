<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {

	public function __construct(){
	parent::__construct();
    $this->load->Model('home');

        }

	public function index()
        {

        $this->data['posts']=$this->home->getAll();
        $this->load->view('home_page',$this->data);

    }
    public function addNewArticle(){
        $data=array(
            "Title"=>$this->input->post('Title'),
            "Author"=>$this->input->post('Author'),
            "Date"=>$this->input->post('Date'),
            "Link"=>$this->input->post('Link'),
            "ImageUrl"=>$this->input->post('ImageUrl'),
            "Content"=>$this->input->post('Content'),
            "Tag"=>$this->input->post('Tag'),
            "Rate"=>0,
            "TopicId"=>10,
            "Comments"=>0
        );
        $this->home->addNew($data);
        $this->index();
    }

    public function rateLink(){

        if(null!==$this->input->post('plus')){
            $id=$this->input->post('id');
            $this->home->addOne($id);
            $this->index();
        }
        if(null!==$this->input->post('minus')){
            $id=$this->input->post('id');
             $this->home->minusOne($id) ;
            $this->index();

        }

    }
}
?>
