<?php
	require_once('../include/config.php');

	$page_title = 'Congratulations';
	
	include(ROOT_PATH . 'include/header.php');
?>

	<div id="wrapper">
		<div class="container">
	    <img src="images/colored_notes_border.png" width="800" height="100" alt=""/>
	     	<div id="contentwrap">
	       		<div id="content" style="height:400px;">
	              <p>Congratulations! </p>
	                <p>
	                You completed the walkthrough.</p><p> Please wait while we re-direct you to the
	                  <?php 
					  $answer = $_POST['answer'];
					  if ($answer == "profile") {
						  echo "sign up page.";
						//re-direct to signup page
						 echo "<script language='javascript'>
						 	$('#registerJS').modal('show');
						 </script>";

					  	  } else {
							  echo "soundcheck.";
							  //re-direct to soundcheck
	                          echo 
	                          	"<script language='javascript'>
		                          	setTimeout(function() {
		                          		window.location.replace('../live-player/index.php');
		                          	}, 5000);
								</script>";
						  }
					?>
	                  
	                </p>
	               
	             </div>
	           <img src="images/colored_notes_border.png" width="800" height="100" alt=""/> 
		   </div>
		</div>

	<?php
		include(ROOT_PATH . 'include/footer.php');
	?>