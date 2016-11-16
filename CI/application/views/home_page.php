<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coursework1</title>
    <!-- CORE CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('asset/css/style.css');?>" media="screen" title="Custom CSS">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" >
    <script   src="https://code.jquery.com/jquery-3.1.1.js" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js"></script>
   <script  scr="../asset/js/main.js"></script>
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
              <div class="pull-right">
                <h4>Add new Link</h4>
              <button type="button" class="btn btn-primary" name="button" data-toggle="modal" data-target="#addNewModal"><i class="fa fa-plus" aria-hidden="true"></i> Add New</button>
				</div>
      </div>
				<hr>
        <div class="row">
            <main class="col-xs-12  clearfix">
              <?php //Start the loop
              foreach($posts as $post){?>

                  <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="card" style="max-height:580px;height:580px;">
                  <?php
                  $pattern=$post->Link;
                      if(preg_match("/youtube.com/i", $pattern)){?>
                          <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="<?php echo $post->Link;?>" allowfullscreen style="max-width:338px;max-height:190.18px;width:338px;"></iframe>
                          </div>
                  <?php }else{?>
         <img class="card-img-top w-100" src="<?php echo $post->Link;?>" style="max-width:338px;max-height:190.18px;width:338px;" alt="Card image cap"/>
                      <?php }?>

                  <div class="card-block">
                    <h5 class="card-title"><?php echo $post->Title;?></h5>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item"><i class="fa fa-user" aria-hidden="true"></i><span> <?php echo $post->User;?></span></li>
                    <li class="list-group-item"><i class="fa fa-calendar" aria-hidden="true"></i><span> <?php echo preg_replace("/(\d+)\D+(\d+)\D+(\d+)/","$3-$2-$1",$post->Date);?></span></li>
                    <li class="list-group-item"><i class="fa fa-tag" aria-hidden="true"></i><span> <?php echo $post->Tag;?></span></li>
                  </ul>
                  <div class="card-block">
                    <a href="index.php/SingleController/getData/<?php echo $post->Id;?>" class="btn btn-primary">Card link</a>
                    <hr>
                    <div class="row">
                        <div class="col-xs-6">
                      <h4>Rate <span class="tag tag-primary"><?php echo $post->Rate; ?></span></h4>
                    </div>
                    <div class="col-xs-6">  <form class="form" action="/index.php/Homecontroller/rateLink" method="post">
                    <input type="hidden" name="id" value="<?php echo $post->Id; ?>" >
                    <button type="submit" class="btn btn-success" name="plus"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></button>
                    <button type="submit" class="btn btn-danger" name="minus"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></button>
                  </form>
                </div>
                </div>



                  </div>
                  </div>
                </div>

  <?php } ?>
</main>

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

  <!-- CORE JAVASCRIPT -->

</body>
</html>
