<!-- Form Update & Check Session -->
<!DOCTYPE html>
<html>
<head>
	<title>INSERT</title>
	<?php include_once 'helper/template/include.php'; ?>
</head>
<body>
	<?php include_once 'helper/template/header.php'; ?>
	
	<!-- If user has not logged in, Redirect to login.php -->
  
    <div class="title">
        <center>
          <h3>Insert</h3>
        </center>
      </div>
		<div class="container text-center update-form">
      
			<div class="errorMessage">
				<!-- Show Error Message -->
					<p style="color: red;">
            <?php
							if(isset($_SESSION['error'])) {
								echo $_SESSION['error'];

								// kalau errornya sudah ditunjukkan
								// jangan tunjukkan lagi
								unset($_SESSION['error']);
							}
						?>
          </p>
			</div>
			<form class="form-horizontal" method="POST" action="controller/doInsert.php" enctype="multipart/form-data">
			<input type="hidden" name="id"> <!-- id from selected product -->
            <div class="form-group">
              <label class="control-label col-sm-2" for="title">Title:</label>
              <div class="col-sm-10">
                <!-- Show selected brand in value input type -->
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter Book's Title">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-sm-2" for="author">Author:</label>
              <div class="col-sm-10">
        <!-- Show selected type in value input type -->
                <input type="text" class="form-control" id="author" name="author" placeholder="Enter Book's Author">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-sm-2" for="genre">Genre:</label>
              <div class="col-sm-10">
				<!-- Show selected type in value input type -->
                <input type="text" class="form-control" id="genre" name="genre" placeholder="Enter Book's Genre">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="type">Type:</label>
              <div class="col-sm-10">
                <!-- Show selected brand in value input type -->
                <input type="text" class="form-control" id="type" name="type" placeholder="New / Used / e-book">
              </div>
            </div>
            
            <div class="form-group">
              <label class="control-label col-sm-2" for="price">Price:</label>
              <div class="col-sm-10">
				<!-- Show selected price in value input type -->
                <input type="text" class="form-control" id="price" name="price" placeholder="Enter Book's Price">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="image">Image:</label>
              <div class="col-sm-10">
                <input type="file" id="image" name="image">
              </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-default">Submit</button></button>
            </div>
          </form>
		</div>
</body>
</html>