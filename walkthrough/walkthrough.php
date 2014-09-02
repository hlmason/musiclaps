<?php
	require_once('../include/config.php');

	$pageTitle = 'Privacy Policy';
	$page = 'Privacy';
	
	include(ROOT_PATH . 'include/header-walkthrough.php');
?>
<!--<script src="standard.js" type="text/javascript"></script>-->

	<div id="wrapper">
		<div class="container">
			
				<!-- Keep paragraphs to approximately 45-75 characters per line -->

	<!--<link rel="stylesheet" type="text/css" href="captivate.css" />-->

	


      
	<div id="CaptivateContent">&nbsp;
	</div>
	<script type="text/javascript">
		var strURLFull = window.document.location.toString();
		var intTemp = strURLFull.indexOf("?");
		var	strURLParams = "";
		if(intTemp != -1)
		{
			strURLParams = strURLFull.substring(intTemp + 1, strURLFull.length);
		}
	    var so = new SWFObject("walkthrough.swf", "Captivate", "1201", "860", "10", "#CCCCCC");
		so.addParam("quality", "high");
		so.addParam("name", "Captivate");
		so.addParam("id", "Captivate");
		so.addParam("wmode", "window");
		so.addParam("bgcolor","#ffffff");
		so.addParam("seamlesstabbing","false");
		so.addParam("menu", "false");
		so.addParam("AllowScriptAccess","always");
		so.addVariable("variable1", "value1");
		if(strURLParams != "")
		{
			so.addVariable("flashvars",strURLParams);
		}
		so.setAttribute("redirectUrl", "http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash");
		so.write("CaptivateContent");
	</script>
      

	<script type="text/javascript">
		document.getElementById('Captivate').focus();
		document.Captivate.focus();
	</script>
				

<div class="col-sm-1 col-md-2 col-lg-3"></div>	

			</div>
	<?php
		include(ROOT_PATH . 'include/footer.php');
	?>
