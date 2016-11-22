
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
            <input type="text" name="Title" class="form-control" id="Title" placeholder="Title" required>
            </div>
            <div class="form-group">
            <label for="Author">Username</label>
            <input type="text" name="Author" class="form-control" id="Author" placeholder="Username" required>
            </div>
            <input type="hidden" name="Date" value="2016-12-02">
            <div class="form-group">
            <label for="Link">Link</label>
            <input type="text" class="form-control" id="Link" name="Link" placeholder="Insert Your Link" required>
            </div>
            <div class="form-group">
            <label for="Link">Description</label>
            <input type="text" class="form-control" id="Description" name="Content" placeholder="Insert content description" required>
            </div>
            <div class="form-group">
            <label for="Tag">Tag</label>
            <input type="text" class="form-control" id="Tag" name="Tag" placeholder="Chose the Tag" required>
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
 <script   src="https://code.jquery.com/jquery-3.1.1.js" ></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js"></script>
  <script  src="<?php echo base_url();?>asset/js/main.js"></script>
</body>
</html>