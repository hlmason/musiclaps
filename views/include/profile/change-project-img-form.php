					<section class="row col-xs-12 change-project-img-container changeProjectImgContainer">

						<form action="<?php echo BASE_URL; ?>controllers/profile/change-project-img-form-controller.php" method="post" enctype="multipart/form-data">
							<span class="glyphicon glyphicon-remove glyphiconRemove"></span>
							<label for="change_project_img">Change Project Image</label>
						
							<input class="choose-file" id="change_project_img" type="file" value="Choose File">
							
							<input class="update-file" type="submit" value="Update">
						</form>
					</section>
