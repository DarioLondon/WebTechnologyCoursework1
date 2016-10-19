<?php
class Article {

//Class Variables
private $author;
private $date;
private $title;
private $image;
private $content;
private $rating;
private $tag;
private $comments=array();

//Class constructor
public function __construct($a,$d,$t,$i,$c,$r,$t,$f){
  this->author=$a;
  this->date=$d;
  this->title=$t;
  this->image=$i;
  this->content=$c;
  this->rating=$r;
  this->tag=$t;
  this->comments=$f;
}
/*
* Class Methods :
* Getting methods to retrive the data
*/

public function the_Author(){
  return this->author;
}

public function the_Date(){
  return this->date;
}

public function the_title(){
  return this->title;
}

public funtion get_Image(){
  retrun this->image;
}

public function the_content(){
  return this->content();
}

public function get_rate(){
  return this->rate;
}

public function the_tag(){
  return this->tag;
}

public function get_comments(){
  return this->comments;
}



}

?>
