<?php
	require_once('../../controllers/require/config.php');

	$page_title = 'Forum';
	
	include(ROOT_PATH . 'views/include/header.php');
?>

	<div id="wrapper">
		<div class="container">

			<div id="forum-page">

				<div class="row col-xs-12">
					<img id="dialog-boxes" src="<?php echo BASE_URL; ?>assets/images/forum-pg/dialog-boxes.png" alt="Three dialog boxes">
					<h3>Talk with Members</h3>
					<button class="post-new-topic" id="postNewTopic" type="button">Post New Topic</button>
				</div>

				<div class="row"> 
					<div class="col-xs-12 table-scroll-x-axis">
						<table><!-- Hard-coded placeholder -->
							<thead>
								<tr class="thead-tr">
									<th></th>
									<th>Member</th>
									<th>Topic</th>
									<th>Posted</th>
									<th>Replies</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>#</td><!-- Hard-coded placeholder -->
									<td>
										<a href="<?php echo BASE_URL; ?>views/profile/public-profile.php"><img class="avatar" src="<?php echo BASE_URL; ?>assets/images/profile-pages/female-avatar.png" alt="Placeholder for female Musiclaps user"><span class="username">$username</span></a>
									</td><!-- Hard-coded placeholder -->
									<td>$Topic Title</td><!-- Hard-coded placeholder -->
									<td>$days/months ago</td><!-- Hard-coded placeholder -->
									<td>#</td><!-- Hard-coded placeholder -->
								</tr>
							</tbody>
						</table>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-2"></div>
					
					<div class="col-xs-8">
						<section class="new-topic-container" id="newTopicContainer">
							<div id="glyphicon-and-h4-title">
								<span class="glyphicon glyphicon-pencil"></span>
								<h4 id="post-topic">&nbsp; Post Your Topic</h4>
							</div>
							
							<form action="<?php echo BASE_URL; ?>controllers/forum-controller.php" method="post">
								<div>
									<label id="topic-title-label" for="topic_title">Title</label>
									<input class="topic-title" id="topic_title" type="text" name="topic_title">
								</div>
								
								<div>
									<label for="topic_description">Description</label>
									<textarea id="topic_description" name="topic_description"></textarea>
								</div>

								<input id="post-topic" type="submit" value="Post">
								<button class="cancel-topic" id="cancelTopic" type="button">Cancel</button>
							</form>
						</section>
					</div>
					
					<div class="col-xs-2"></div>
				</div>

			</div>

		</div>

	<?php
		include(ROOT_PATH . 'views/include/footer.php');
	?>