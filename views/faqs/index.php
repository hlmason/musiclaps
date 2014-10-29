<?php
	require_once('../../controllers/require/config.php');

	$page_title = 'FAQs';
	
	include(ROOT_PATH . 'views/include/header.php');
?>

	<div id="wrapper">
		<div class="container" id="faqs-page">
			<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
					
				<!-- Keep paragraphs to approximately 45-75 characters per line -->

				<h1>Musiclaps FAQs</h1>

				<h3>1. What is Musiclaps?</h3>
					<p>
						Musiclaps is a new online application that enables people worldwide to collaborate musically.  
						Using our technology, registered users can easily record, upload, and share tracks, allowing registered users of their choosing to collaborate with them.<br><br>

       					Musiclaps has the functionality of social networking applications with such features as adding friends, sending messages, posting comments, favoriting, sharing, and embedding, as well as a unique feature - clapping!
       				</p>

       			<h3>2. What are the system requirements?</h3>
       				<p>
       					More than 2GB of RAM and Microsoft Windows XP (SP3), Windows Vista (SP2), Windows 7, or Mac OS 10.5+.
       				</p>

       			<h3>3. What are the browser requirements?</h3>
					<p>
						We highly recommend <a href="https://www.google.com/intl/en_us/chrome/browser/" target="blank">Google Chrome</a>.  
						Firefox, Safari, and Internet Explorer 10+ are also good.
       				</p>

       			<h3>4. What is the "Live Player"?</h3>
       				<p>
       					The Live Player is Musiclaps’s original online application for recording and playing multiple tracks.
       				</p>

       			<h3>5. What is the "Recording Player"</h3>
       				<p>
       					The Recording Player is Musiclaps’s original application for recording.  
       					It can also be used as an accompaniment when playing alone.
       				</p>

		       <h3>6. Who is the project owner?</h3>
		       		<p>
			       		The project owner is the user who has initiated the recording and/or upload of a cover or original song (under "New Projects").
		       		</p>

		       	<h3>7. How does Musiclaps address song copyright law?</h3>
		       		<p>	
			       		For original songs, the project owner can select a traditional copyright or Creative Commons license.  
			       		<strong>For the purpose of collaboration, the project owner of an original song will want to select a Creative Commons license.</strong>  Please only select a copyright type if your project is using an original song.<br><br>

			       		If a copyright type is not selected, the song will automatically be classified as a cover. 
			       		<strong>Note</strong>: Once saved for a particular project, the copyright type cannot be changed.
			       	</p>

		       	<h3>8. What is a part?</h3>
	       			<p>
		       			On Musiclaps, a part is an instrument or sound-related role.
		       		</p>

		       	<h3>9. What is a track?</h3>
		       		<p>
		       			A track is both a single recorded sound layer and a recording comprised of multiple tracks!  
		       			(On Musiclaps, the term will usually refer to the former.)  
		       			Final recordings are typically comprised of multiple, layered tracks with one part per track.  
       					For example, in a recording with piano, guitar, drums, and vocals, there would typically be at least 4 tracks, one for each part.
		       		</p>

		       	<h3>10. Where do I go to edit my project?</h3>
	       			<ul>
	       				<li>-Click on <span class="bold">My Projects</span> (User Menu)</li>
	       				<li>-Select the appropriate status (<span class="bold">In Progress/Private</span>, <span class="bold">Public</span>, <span class="bold">Group</span>, or <span class="bold">Audition</span>) from the dropdown menu</li>
	       				<li>-Click on the rectangular project tile</li>
	       			</ul>

		       	<h3>11. Where do I go to change my project's status (Private, Public, Group, or Audition)?</h3>
		       		<p> 
			       		Since projects are not automatically listed, you need to follow these steps to change the status:
		       			<ul>
		       				<li>-Click on <span class="bold">My Projects</span> (User Menu)</li>
		       				<li>-Select <span class="bold">In Progress/Private</span> from the dropdown menu</li>
		       				<li>-Click on the rectangular project tile</li>
		       				<li>-Below the Live Player on the right-hand side, select the desired status</li>
		       			</ul>
				        A project's status can be changed at any time.
		       		</p>

			    <h3>12. Can I share "In Progress/Private" projects?</h3>
					<p>Yes.  
						Simply copy and paste the URL to privately share these projects with friends or any individuals you choose.
					</p>

				<h3>13. What are the types of collaborations?</h3>
       				<p>
       					There are three types of collaborations: Open Collab, Requesting Collab and No Collab.  
       					For Open Collab and Requesting Collab, a user can collaborate with another user by adding track(s) using the Live Player.  
       					Up to 14 tracks can be added per project.
       				</p>

       			<h3>14. What is "Open Collab"?</h3>
       				<p>
       					Open Collab allows any registered user to add a track to, replace an existing track on, or otherwise edit another user's project.  
       					Open Collab projects display on the "Collaborations" page (<span class="bold">People</span> --> <span class="bold">Collaborations</span>), which is visible to the public.
       				</p>

       			<h3>15. What is "Requesting Collab"?</h3>
       				<p>
	       				Requesting Collab means that the project owner is requesting a specific part.  
	       				Requesting Collab projects display on the "Collaborations" page (<span class="bold">People</span> --> <span class="bold">Collaborations</span>), which is visible to the public.<br><br>
	       				
	       				Using the Live Player, registered users record and upload the requested part, and the project owner is automatically notified.  
						The project owner is able to listen to each track from a list of participating usernames.  
	       				If there is more than one submission for a single part, the project owner chooses their preference.
	       			</p>

	       		<h3>16. What is "No Collab"?</h3>
       				<p>
       					No Collab projects are the default and for listening only.<br>
       					<strong>Note</strong>: The status of a project can be changed from No Collab to Open Collab or Requesting Collab, but it cannot be changed back to No Collab.
       				</p>

				<h3>17. How do I change my project's image?:</h3>
			        <p>Click on the existing or default Musiclaps image and the "Change Project Image" bar will display below.
			        </p>

			      <h3>18. Can I add lyrics to my project?</h3>
			    	<p>
						Yes.  On the Lyrics page (<span class="bold">My Projects</span> --> <span class="bold">Lyrics</span>), all of your projects are displayed on a pull-down list.  
						Choose the project you want to add lyrics to and fill in the necessary fields and lyrics.  
						You can adjust the lyrics' scrolling speed by specifying a pause start/stop time and speed.
					</p>

				<h3>19. What are "YouTube Links"?</h3>
		       		<p>
			       		The YouTube Links feature enables a user to add a corresponding video to their project.  
       					For example, a cover song can link to the original music video posted on YouTube, or an original song can link to the user's own YouTube video.
		       		</p>

				<h3>20. What are groups?</h3>
		       		<p>
			       		Registered users who would like to collaborate with each other can form a group.  
				        Groups are created on a per project basis, and the project status must be "Group" (please see question #11 for instructions on how to change the status).<br><br> 
				        
				        The project owner chooses the project they would like to collaborate on and enters the group name and usernames of the participating users.  
				        A new group displays and the participating users are notified.  
				        Only participating users are able to listen to and participate in the group project, and only the project owner is allowed to add or edit the project information.<br><br> 
				        
				        Once the collaboration is finished and the project owner changes the status to something other than "Group", the group ends and is removed from the list.
		       		</p>

		       	<h3>21. What is the “Favorites” page?</h3>
		       		<p>	
			       		Projects you have favorited (clicked on the heart icon) are listed on this page.
			       	</p>

			    <h3>22. What instruments can I record with?</h3>
		       		<p>	
			       		Any.  You can easily record any instrument that connects with a cable (e.g. electric guitar, electric bass, keyboard, etc.).  
			       		You can record acoustic instruments (e.g. piano, acoustic guitar, trumpet, drums, vocals, etc.) using a mic.
			       	</p>

			    <h3>23. Can I use my computer‘s built-in mic for recording?</h3>
		       		<p>	
			       		It’s possible but not recommended since it will create feedback.
			       	</p>

			    <h3>24. The app is acting a little weird.  What should I do?</h3>
		       		<p>	
			       		Sometimes the problem can be solved by clearing your cache.  In Google Chrome you would follow these steps:
			       		<ul>
			       			<li>-Select the menu icon at the top right of the browser window and select <span class="bold">Settings</span></li>
			       			<li>-Click on <span class="bold">Show advanced settings</span> at the bottom of the page</li>
			       			<li>-Under "Privacy" click on the <span class="bold">Clear browsing data</span> button
			       			Empty the cache</li>
			       			<li>-Check the box next to <span class="bold">Cached images and files</span> - uncheck the rest of the boxes if you are unsure</li>
			       			<li>-Click the <span class="bold">Clear browsing data</span> button</li>
			       		</ul>
			       	</p>

			    <h3>25. I don't play an instrument.  Can I make an account just for listening?</h3>
		       		<p>	
			       		Yes!  As a registered user you can enjoy new music, add friends, send messages, post comments, and favorite, share, embed, or clap for songs you like!
			       	</p>

				<div class="col-sm-1 col-md-2 col-lg-3"></div>	

			</div>
		</div>

	<?php
		include(ROOT_PATH . 'views/include/footer.php');
	?>