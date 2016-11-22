<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {

	public function __construct(){
	parent::__construct();
	$this->load->helper('url');
    $this->load->library('pagination');
    $this->load->Model('home');

        }

	public function index()
        {
            // Configuartion Pagination 
            $config = array();
            $config['base_url'] = base_url()."/index.php/HomeController/index";
            $config['total_rows'] = $this->home->get_Count();
            $config['per_page'] = 9;

        $this->pagination->initialize($config);
        $this->data['posts']=$this->home->getAll($config['per_page'],$this->uri->segment(3));
      
        $this->load->view('header');
         $this->data['links']=$this->pagination->create_links();
        $this->load->view('home_page',$this->data);
         
        $this->load->view('footer');

    }

    public function refine_search(){
        
        // Configuartion Pagination 
 $filter= ($this->input->post("filter"))? $this->input->post("filter") : "NIL";

        $filter = ($this->uri->segment(3)) ? $this->uri->segment(3) : $filter;
            $config = array();
            $config['base_url'] = base_url()."/index.php/HomeController/refine_search/$filter";
            $config['total_rows'] = $this->home->get_Count();
            $config['per_page'] = 9;

        $this->pagination->initialize($config);

        $data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        
      
        $this->load->view('header');
        $this->data['posts']=$this->home->filter($filter,$config['per_page'],$data['page']);
        $this->data['links']=$this->pagination->create_links();
        $this->load->view('home_page',$this->data);
        $this->load->view('footer');
       
    }

    public function addNewArticle(){

        if(NULL!==$this->input->post('Link')){
        $link=$this->input->post('Link');
    if (!preg_match("~^(?:f|ht)tps?://~i", $link)) {
        $link = "http://" . $link;
    }
 
        }
        $data=array(
            "Title"=>$this->input->post('Title'),
            "User"=>$this->input->post('Author'),
            "Date"=>date('Y-m-d'),
            "Link"=>$link,
            "Content"=>$this->input->post('Content'),
            "Tag"=>$this->input->post('Tag'),
            "Rate"=>0,
            "CommentsCount"=>0
        );
        $this->home->addNew($data);
        redirect(base_url());

    }

    public function rateLink(){


        if(null!==$this->input->post('plus')){
            $id=$this->input->post('id');
            $this->home->addOne($id);
            redirect(base_url());

        }
        if(null!==$this->input->post('minus')){
            $id=$this->input->post('id');
             $this->home->minusOne($id) ;
            redirect(base_url());

        }

    }
}
?>
