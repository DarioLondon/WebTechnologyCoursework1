<?php
class Home extends CI_Model{
  //Class Variables
  public $author;
  public $date;
  public $title;
  public $image;
  public $content;
  public $rating;
  public $tag;
  public $comments=array();

  //Class constructor
  public function __construct(){
      parent::__construct();

  }
  /*
  * Class Methods :
  * Getting methods to retrive the data
  */

  public function the_Author(){
    return $this->author;
  }

  public function the_Date(){
    return $this->date;
  }

  public function the_title(){
    return $this->title;
  }

  public function get_Image(){
    return $this->image;
  }

  public function the_content(){
    return $this->content();
  }

  public function get_rate(){
    return $this->rate;
  }

  public function the_tag(){
    return $this->tag;
  }

  public function get_comments(){
    return $this->comments;
  }

  public function getArticles(){
    $query = $this->db->get('Articles', 20);
    return $query->result();
  }

  public function sortByDate($val){
    $data;
    if($val==0){

    }
    else {
      # code...
    }
    return $data;
  }

  public function sortByRate($val){
    $data;
    if($val==0){

    }
    else {
      # code...
    }
    return $data;
  }
  public function addNew($data){

  }


}

?>
