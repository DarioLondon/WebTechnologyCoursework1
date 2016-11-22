 <body>
		<!--NAVIGATION SECTION
	  	============================-->
  <div class="container">
    <nav class="navbar navbar-full navbar-fixed-top navbar-dark bg-primary ">
    <a class="navbar-brand" href="/">
    <img src="http://clipartsy.com/SVG/Animal/elephant_robin_egg_blue_animal.png" width="80" height="80" class="d-inline-block align-top" alt="Logo">
    <span id="logo-text">STACKOVERNEWS</span>
  </a>
    <ul class="nav navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/"> <i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i> Home <span class="sr-only">(current)</span></a>
      </li>
    </ul>
   
  </nav>
</div>
<!--MAIN SECTION
	============================-->
	<section id="content">
    <div class="container">
        <div class="row">
            <main class="col-xs-12 col-sm-5 col-md-8">
              <?php foreach($posts as $post){
                 
                  $pattern=$post->Link;
                  $link=pathinfo($post->Link);
                      if(preg_match("/youtube.com/i", $pattern)){ ?>
                          <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src='<?php echo $post->Link;?>' allowfullscreen style="width:100%; height:auto;"></iframe>
                          </div>
                       <?php } elseif($link['extension']=='jpg'  || $link['extension']=='jpeg' || $link['extension']=='gif' || $link['extension']=='png'){ ?>    
         <img class="card-img-top w-100" src="<?php echo $post->Link;?>" style="max-width:338px;max-height:190.18px;width:338px;" alt="Card image cap"/>
                      <?php }else{ ?>
                        <img class="card-img-top w-100" src="http://www.vanparys.eu/wp-content/themes/123ecology/assets/img/placeholder-page-533.png" style="width:100%; height:auto;" alt="Card image cap"/>
                      <?php }?>
                      

                <h2 class="media-heading"><?php echo $post->Title;?></h2>
                <br>
                <br>
                <p class="lead"><?php echo $post->Content;?></p>

            </main>
            <aside class="col-xs-12 col-sm-7 col-md-4">
                <ul class="list-group">
                  <li  class="list-group-item  active">
                    <h5 class="list-group-item-heading">Post Information </h5>
                    <p class="list-group-item-text"></p>
                  </li>
                  <li  class="list-group-item">
                    <p class="list-group-item-text">Author: <?php echo $post->User;?><p>
                  </li>
                  <li  class="list-group-item ">
                    <p class="list-group-item-text">Date: <?php  echo preg_replace("/(\d+)\D+(\d+)\D+(\d+)/","$3-$2-$1",$post->Date);?></p>
                  </li>
                  <li  class="list-group-item ">
                    <p class="list-group-item-text">Tag: <?php echo $post->Tag;?></p>
                  </li>
                  <li  class="list-group-item ">
                    <p class="list-group-item-text">Visit the Link: <a href="<?php echo $post->Link;?>" target="_blank"><i class="fa fa-link" aria-hidden="true"></i></a> </p>
                  </li>
                  <li class="list-group-item ">
                    <div class="row">
                        <div class="col-xs-6">
                      <h4>Rate <span class="tag tag-primary"><?php echo $post->Rate;?></span></h4>
                    </div>
                    <div class="col-xs-6">
                    <form class="form" action="/index.php/Homecontroller/rateLink" method="post">
                      <input type="hidden" name="id" value="<?php echo $post->Id; ?>" >
                      <button type="submit" class="btn btn-success" name="plus"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></button>
                      <button type="submit" class="btn btn-danger" name="minus"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></button>
                    </form>
                  </div>
                </div>
                  </li>
                </ul>

        </aside>
            <?php } ?>    
      </div>
    </div>
  </section>
  <section id="comments">
    <div class="container clearfix">
      <div class="row">
        <div class="col-xs-12">
          <form class="" action="/index.php/SingleController/addComments" method="post">
            <input type="hidden" name="articleId" value="<?php echo $posts[0]->Id;?>">
             <input type="hidden" name="parentId" value="0">
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