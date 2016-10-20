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
    <link rel="stylesheet" href="../../user_guide/_static/css/style.css" media="screen" title="Custom CSS">
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
							<div class="media">
  							<a class="media-left" href="#">
    							<img class="media-object" src="http://placehold.it/64x64" alt="Generic placeholder image">
  							</a>
  							<div class="media-body">
    							<h4 class="media-heading">Title</h4>
    							<a href="#"><p class="lead">The content here</p></a>
										<i class="fa fa-user" aria-hidden="true"></i><span> Bob</span>
										<i class="fa fa-calendar" aria-hidden="true"></i><span> 12/3/2014</span>
										<i class="fa fa-tag" aria-hidden="true"></i><span> Movie</span>
										<i class="fa fa-fa-comments-o" aria-hidden="true"></i><span> 200</span>
										<i class="fa fa-reddit-alien" aria-hidden="true"></i><span> 3000</span>
										<span><button type="button" class="btn btn-success" name="button"><i class="fa fa-hand-o-up" aria-hidden="true"></i></button>
										<button type="button" class="btn btn-danger" name="button"><i class="fa fa-hand-o-down" aria-hidden="true"></i></button></span>
									</div>
								</div>
							<hr>
							<div class="media">
								<a class="media-left" href="#">
									<img class="media-object" src="http://placehold.it/64x64" alt="Generic placeholder image">
								</a>
								<div class="media-body">
									<h4 class="media-heading">Title</h4>
									<a href="#"><p class="lead">The content here</p></a>
										<i class="fa fa-user" aria-hidden="true"></i><span> Bob</span>
										<i class="fa fa-calendar" aria-hidden="true"></i><span> 12/3/2014</span>
										<i class="fa fa-tag" aria-hidden="true"></i><span> Movie</span>
										<i class="fa fa-fa-comments-o" aria-hidden="true"></i><span> 200</span>
										<i class="fa fa-reddit-alien" aria-hidden="true"></i><span> 3000</span>
										<span><button type="button" class="btn btn-success" name="button"><i class="fa fa-hand-o-up" aria-hidden="true"></i></button>
										<button type="button" class="btn btn-danger" name="button"><i class="fa fa-hand-o-down" aria-hidden="true"></i></button></span>
									</div>
								</div>
							<hr>
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
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</body>
  <!-- CORE JAVASCRIPT -->
  <script   src="https://code.jquery.com/jquery-3.1.1.js"   integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="   crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
  <script type="text/javascript" scr="js/app.js"></script>
</html>
