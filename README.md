Musiclaps Media, Inc.
Front-End Documentation v.1
=================================

Languages: HTML, CSS, Sass, Javascript/jQuery, PHP

Front-End Frameworks: Bootstrap

Back-End Framework: None currently

=================================

Background: 

The app was originally built by a back-end engineer in an obscure language called TeraScript.  A front-end development contractor was later hired, and the app was recoded from scratch (in HTML, CSS, Sass, Javascript/jQuery, and PHP).  In the future, the server-side language may or may not be PHP.

=================================

Macro Organization:

CSS, Sass, Javascript/jQuery:

As in Rails projects, the "assets/" folder contains the CSS ("assets/stylesheets/"), Javascript/jQuery ("assets/javascripts/"), and image ("assets/images/") files.

Note that the "walkthrough/" folder contains a separate "assets/" folder.  The "walkthrough/" folder was created by a second front-end development contractor using Adobe Captivate and does not visually or organizationally match the rest of the project with the exception of the "include/header.php" and "include/footer.php" files.

The "assets/javascripts/" folder contains a subfolder called "profile/"; this folder correlates with the root directory "profile/" folder.

The "assets/images/" folder also contains subfolders.

The "assets/fonts/" folder contains Bootstrap glyphicion files.


HTML, PHP:

There are two versions of those files which have both logged in and logged out statuses; the difference between each status is only in the header.  This will be logged under GitHub issues to be refactored.

Many pages are organized as "index.php" files inside a root directory folder.  This will also be logged under GitHub issues so that proper routing can be implemented.

In places where the front-end needs to be 'connected' to the back-end, "Placeholder" or "Hard-coded placeholder" has been inserted as a comment.  Please delete such comments once the back-end is 'connected'.

=================================

Micro Organization:

The "assets/stylesheets/_customized.bootstrap.min.scss" file is a customized Bootstrap 3.2.0 file which includes grid system, forms, glyphicons, navs, navbar, progress bars, component animations, dropdown, and modals (http://getbootstrap.com/customize/).

The "assets/javascripts/customized.bootstrap.min.js" file is a customized Bootstrap 3.2.0 file which includes dropdowns, modals, collapse, and transitions (Go to http://getbootstrap.com/customize/ and scroll down).

Custom CSS is in the "assets/stylesheets/main.scss" file.  The file is really long and may need to be changed in the future.  The code is organized into the following categories:

Variables
Mixins
Global
Nav
  Nav below top nav / collapsed "User Menu"
Modal
Landing Page
  Musical Notes Map
  Stage
  Image Slider
  Technology, Backstage, Music Education, Contests and Auditions
Live Player Page
New Arrivals, Recommended, Staff Picks, and Collaborations Pages
All Music Page
Players Wanted Page
Profile, New Project, Projects, Collaborations, YouTube, Messages, Groups, and Project Profile Pages
Footer
  Privacy, Terms, and FAQs Pages
Under Construction Page
Media Queries

Please continue to observe the above categories until a new system is implemented.

Elements/selectors tend to come in the order they come in the markup; exceptions occur when one or more are grouped together.  Properties are in alphabetical order, although it is not necessary to observe this.  Comments have been applied liberally and may be outdated.

=================================

Conclusion:

Please update this README as appropriate.  For more information see the GitHub issues section.
