<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coursework1</title>
    <!-- CORE CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" >
    <link rel="stylesheet" href="<?php echo base_url('asset/css/style.css');?>" media="screen" title="Custom CSS">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
  </head>
  <body>
    <!--NAVIGATION SECTION
    ============================-->
  <div class="conatiner">
    <nav class="navbar navbar-full navbar-fixed-top navbar-dark bg-primary ">
    <a class="navbar-brand" href="/"><i class="fa fa-newspaper-o fa-2x" aria-hidden="true"></i></a>
    <ul class="nav navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <form class="form-inline float-xs-right" >
      <input class="form-control" type="text" placeholder="Search Topic">
      <button class="btn btn-outline-info" type="submit">Search</button>
    </form>
  </nav>
</div>
<!--MAIN SECTION
	============================-->
	<section id="content">
    <div class="container">
        <div class="row">
            <main class="col-xs-12 col-sm-5 col-md-8">

                <img class="imge-resonsive" src="<?php echo $posts[0]->Link;?>" alt="Generic placeholder image" width='100%' height='auto'>
                <h4 class="media-heading"><?php echo $posts[0]->Title;?></h4>
                <p class="lead"><?php echo $posts[0]->Content;?></p>

            </main>
            <aside class="col-xs-12 col-sm-7 col-md-4">
                <ul class="list-group">
                  <li  class="list-group-item  active">
                    <h5 class="list-group-item-heading">Post Information </h5>
                    <p class="list-group-item-text"></p>
                  </li>
                  <li  class="list-group-item">
                    <p class="list-group-item-text">Author: <?php echo $posts[0]->User;?><p>
                  </li>
                  <li  class="list-group-item ">
                    <p class="list-group-item-text">Date: <?php  echo preg_replace("/(\d+)\D+(\d+)\D+(\d+)/","$3-$2-$1",$posts[0]->Date);?></p>
                  </li>
                  <li  class="list-group-item ">
                    <p class="list-group-item-text">Tag: <?php echo $posts[0]->Tag;?></p>
                  </li>
                  <li  class="list-group-item ">
                    <p class="list-group-item-text">Comments:</p>
                  </li>
                  <li class="list-group-item ">
                    <div class="row">
                        <div class="col-xs-6">
                      <h4>Rate <span class="tag tag-primary"><?php echo $posts[0]->Rate;?></span></h4>
                    </div>
                    <div class="col-xs-6">
                    <form class="form" action="/index.php/Homecontroller/rateLink" method="post">
                      <input type="hidden" name="id" value="<?php echo $posts[0]->Id; ?>" >
                      <button type="submit" class="btn btn-success" name="plus"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></button>
                      <button type="submit" class="btn btn-danger" name="minus"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></button>
                    </form>
                  </div>
                </div>
                  </li>
                </ul>

        </aside>
      </div>
    </div>
  </section>
  <section id="comments">
    <div class="container clearfix">
      <div class="row">
        <div class="col-xs-5">
          <form class="" action="/index.php/SingleController/addComments" method="post">
            <input type="hidden" name="id" value="<?php echo $posts[0]->Id;?>">
            <div class="form-group">
              <label for="username">Username : </label>
              <input type="text" id='username' class="form-control" name="username" placeholder="@username" required>
            </div>
            <div class="form-group">
              <label for="comment">Comment:</label>
              <textarea type="text" id='comment' class="form-control" name="text" required  rows="6" placeholder="Your Comment.... :-)"></textarea>
            </div>
            <br>
            <button type="button" name="button" class="btn btn-danger">Cancel</button>
            <button type="submit" name="button" class="btn btn-primary pull-right">Submit</button>
          </form>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-10">
          <br>
          <br>
          <hr>
          <h4>Comments:</h4>
          <ul class="list">
            <li>
              <div class="media">
                <a class="media-left" href="#">
                  <img class="media-object" src="http://placehold.it/64x64" alt="Generic placeholder image">
                </a>
                <div class="media-body">
                  <h4 class="media-heading"><?php echo $posts[0]->Username;?></h4>
                  <?php echo $posts[0]->Text;?>
                </div>
                <div class="media-footer">
                  <button id="btn-reply" class="btn">Replay</button>
                  <form id="form-rep" action="index.html" method="post" style="display:none;">
                    <div class="form-group">
                      <label for="username">Username :</label>
                      <input type="text" id='username' class="form-control" name="usernname" placeholder="@username" required>
                    </div>
                    <div class="form-group">
                      <label for="comment">Comment:</label>
                      <textarea type="text" id='username' class="form-control" name="usernname" required  rows="6" placeholder="Your Comment.... :-)"></textarea>
                    </div>
                    <br>
                    <button type="button" name="button" class="btn btn-danger">Cancel</button>
                    <button type="submit" name="button" class="btn btn-primary pull-right">Submit</button>
                  </form>
                </div>
              </div>
            </li>
          </ul>
      </div>
    </div>
  </section>
  <footer>
		<div class="container-fluid ">
			<div class="row text-xs-center">
				<p>&copy;Dario Guida W1409831</p>
			</div>
		</div>
	</footer>

<!-- CORE JAVASCRIPT -->
<script  src="https://code.jquery.com/jquery-3.1.1.js"></script>
<script  src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js"></script>
<script  scr="<?php echo base_url();?>asset/js/main.js"></script>
</body>
</html>
