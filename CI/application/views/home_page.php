 
		<!--NAVIGATION SECTION
	  	============================-->
  <div class="container">
    <nav class="navbar navbar-full navbar-fixed-top navbar-light bg-faded ">
    <a class="navbar-brand" href="/">
    <img src="http://clipartsy.com/SVG/Animal/elephant_robin_egg_blue_animal.png" width="80" height="80" class="d-inline-block align-top" alt="Logo">
        <span id="logo-text">STACKOVERNEWS</span>
    </a>
    <ul class="nav navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/"><i class="fa fa-home" aria-hidden="true"></i> HOME <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item"> 
   <a role="button" class="btn btn-outline-success" name="button" data-toggle="modal" data-target="#addNewModal" ><i class="fa fa-plus" aria-hidden="true"></i> Add New Article</a>
        </li>
    </ul>
  
    <form class="form-inline float-xs-right" action="/index.php/HomeController/refine_search" method="post">
								<div class="form-group">
									<label for="rate">Refine your search:</label>
								<select class="custom-select" name="filter" id="rate">
	  						<option value="0">Newer</option>
								<option value="1">Older</option>
							<option value="2">Most Rated </option>
							<option value="3">Less Rated </option>
						</select>
					</div>
						<button type="submit" class="btn btn-outline-primary" >Filter</button>
							</form>
                
  </nav>
</div>
<!--MAIN SECTION
	============================-->
	<section id="content">
    <div class="container">
<br>
<br>
        <div class="row">
            <main class="col-xs-12  clearfix">
              <?php //Start the loop
              foreach($posts as $post){?>

                  <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="card" >
                  <?php
                  $pattern=$post->Link;
                  $path=pathinfo($post->Link);
                      if(preg_match("/youtube.com/i", $pattern)){?>
                          <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="<?php echo $post->Link;?>" allowfullscreen></iframe>
                          </div>
                  <?php }
                  elseif($path['extension']=='jpg'  || $path['extension']=='jpeg' || $path['extension']=='gif' || $path['extension']=='png'){?>    
         <img class="card-img-top w-100 homeImg" src="<?php echo $post->Link;?>"  alt="Card image cap"/>
                      <?php }else{?>
                        <img class="card-img-top w-100" src="http://www.vanparys.eu/wp-content/themes/123ecology/assets/img/placeholder-page-533.png" style="max-width:338px;max-height:190.18px;width:338px;" alt="Card image cap"/>
                      <?php }?>

                  <div class="card-block">
                    <h5 class="card-title"><?php echo $post->Title;?></h5>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item"><i class="fa fa-user" aria-hidden="true"></i>User:</span> <?php echo $post->User;?></span></li>
                    <li class="list-group-item"><i class="fa fa-calendar" aria-hidden="true"></i> Date:<span> <?php echo preg_replace("/(\d+)\D+(\d+)\D+(\d+)/","$3-$2-$1",$post->Date);?></span></li>
                    <li class="list-group-item"><i class="fa fa-comments-o" aria-hidden="true"></i> Comments:<span> <?php echo $post->CommentsCount;?></span></li>
                    <li class="list-group-item"><i class="fa fa-tag" aria-hidden="true"></i> Tag:<span> <?php echo $post->Tag;?></span></li>
                  </ul>
                  <div class="card-block">
                  <form method="post" action="index.php/SingleController/">
                  <input type="hidden" name="id" value="<?php echo $post->Id ?>"/>
                    <input type="submit" class="btn btn-primary btn-sm" value="Card link">
                    </form>
                    <hr>
                    <div class="row">
                        <div class="col-xs-6">
                      <h4>Rate <span class="tag tag-primary"><?php echo $post->Rate; ?></span></h4>
                    </div>
                    <div class="col-xs-6">  <form class="form" action="/index.php/Homecontroller/rateLink" method="post">
                    <input type="hidden" name="id" value="<?php echo $post->Id; ?>" >
                    <button type="submit" class="btn btn-success btn-sm" name="plus"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></button>
                    <button type="submit" class="btn btn-danger btn-sm" name="minus"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></button>
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
<div class="container">
    <div class="row text-xs-center">
 <ul class="pagination pagination-lg ">
<?php echo $links ;?>
</ul>
</div>
</div>