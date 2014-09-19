<?php
	require_once('../include/config.php');

	$pageTitle = 'End of Soundcheck';
	
	include(ROOT_PATH . 'include/header.php');
?>
 
    <div id="wrapper">
        <div class="container">
            <img src="images/colored_notes_border.png" width="800" height="100" alt=""/>
                <div id="contentwrap">
                    <div id="content">
                        <p>Your soundcheck can be saved in your profile and downloaded.</p>
                        <p>Would you like to set up a profile now?</p>
                        <form name="myForm" method="post" action="congratulations.php" onsubmit="return validateForm()">                    
                            <input type="radio" name="answer" value="profile">
                               YES, I might save the soundcheck<br><br>
                            <input type="radio" name="answer" value="soundcheck"> 
                              NO, just the soundcheck for now<br><br>
                            <span id="error_msg">&nbsp; </span>
                            
                            <input type="submit" name="submit"class="form-submit-button"/>
                        </form>
                    </div>
                </div>
           <img src="images/colored_notes_border.png" width="800" height="100" alt=""/> 
        </div>

    <?php
    	include(ROOT_PATH . 'include/footer.php');
    ?>
