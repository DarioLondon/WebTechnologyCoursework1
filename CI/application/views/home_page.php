<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coursework1</title>
    <!-- CORE CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css"  integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url();?>user_guide/_static/css/style.css" media="screen" title="Custom CSS">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
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
						<div class="pull-right">
							<form class="form-inline" action="index.html" method="post">
								<div class="form-group">
									<label for="rate">Rate</label>
								<select class="form-control form-control-sm" name="date" id="rate">
	  						<option value="new">Newer</option>
								<option value="old">Older</option>
							</select>
						</div>
						<div class="form-group">
							<label for="rating">Date</label>
							<select class="form-control form-control-sm" name="vote" id="date">
							<option value="h">Higher</option>
							<option value="l">Lower</option>
						</select>
					</div>
						<button type="submit" class="btn btn-primary" name="button">Filter</button>
							</form>
						</div>
				</div>
				<hr>
        <div class="row">
            <main class="col-sm-9">

                            <?php //Start the loop
                            foreach($posts as $post){?>
							<div class="media">
  							<a class="media-left" href="#">
                            <img class="media-object" src="<?php echo $post->Link; ?>" alt="Generic placeholder image" width='64' height='64'>
  							</a>
  							<div class="media-body">
                            <h4 class="media-heading"><?php echo $post->Title;?></h4>
                            <a href="#"><p class="lead"><?php echo $post->Content;?></p></a>
                            <div class="row">
                            <div class="col-xs-8">
                            <i class="fa fa-user" aria-hidden="true"></i><span> <?php echo $post->Author;?></span>
                            <i class="fa fa-calendar" aria-hidden="true"></i><span><?php echo $post->Date;?></span>
                            <i class="fa fa-tag" aria-hidden="true"></i><span><?php echo $post->Tag;?></span>
<a href="index.php/SingleController/getData/<?php echo $post->id;?>"> <?php echo $post->Rate;?></span>
                            <i class="fa fa-reddit-alien" aria-hidden="true"></i></a></div>
                            <div class="col-xs-4">
                                        <span><form class="form" action="/index.php/Homecontroller/rateLink" method="post">
                                        <input type="hidden" name="id" value="<?php echo $post->id; ?>" >
                                        <button type="submit" class="btn btn-success" name="plus"><i class="fa fa-hand-o-up" aria-hidden="true"></i></button>
                                        <button type="submit" class="btn btn-danger" name="minus"><i class="fa fa-hand-o-down" aria-hidden="true"></i></button></form>
                                        </span></div>
                                        </div> <!-- end of row -->
									</div>
								</div>
                            <hr>
                              <?php } ?>
            </main>
						<aside class="col-sm-3">
						<h4>Add new Link</h4>
						<button type="button" class="btn btn-primary" name="button" data-toggle="modal" data-target="#addNewModal"><i class="fa fa-plus" aria-hidden="true"></i> Add New</button>
						</aside>
    </div>
    </div>
	</section>

	<footer>
		<div class="container-fluid ">
			<div class="row text-xs-center">
				<p>
					&copy;Dario Guida W1409831
				</p>
			</div>
		</div>
	</footer>
	<!-- Modal -->
<div class="modal fade" id="addNewModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Add New Link</h4>
      </div>
      <div class="modal-body">
            <form class="form" action="/index.php/Homecontroller/addNewArticle" method="post">
            <div class="form-group">
            <label for="Title">Title</label>
            <input type="text" name="Title" class="form-control" id="Title" placeholder="Title">
            </div>
            <div class="form-group">
            <label for="Author">Username</label>
            <input type="text" name="Author" class="form-control" id="Author" placeholder="Username">
            </div>
            <input type="hidden" name="Date" value="2016-12-02">
            <div class="form-group">
            <label for="Link">Link</label>
            <input type="text" class="form-control" id="Link" name="Link" placeholder="Insert Your Link">
            </div>
            <div class="form-group">
            <label for="ImageUrl">Image Url</label>
            <input type="text" class="form-control" id="ImageUrl" name="ImageUrl" placeholder="Insert Your Image Url">
            </div>
            <div class="form-group">
            <label for="Link">Description</label>
            <input type="text" class="form-control" id="Description" name="Content" placeholder="Insert content description">
            </div>
            <div class="form-group">
            <label for="Tag">Tag</label>
            <input type="text" class="form-control" id="Tag" name="Tag" placeholder="Chose the Tag">
            </div>


                </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="Save">
      </div>
    </div>
</form>
  </div>
</div>
</body>
  <!-- CORE JAVASCRIPT -->
  <script   src="https://code.jquery.com/jquery-3.1.1.js"   integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="   crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
<script type="text/javascript" scr="<?php echo base_url()?>user_guide/_static/js/main.js"></script>

</html>
