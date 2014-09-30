Musiclaps Media, Inc.
Front-End Documentation v.1
=================================

Languages: HTML/PHP, CSS/Sass, Javascript/jQuery

Front-End Frameworks: Bootstrap

Back-End Framework: None currently

=================================

Background: 

The app was originally built by a back-end engineer in an obscure language called TeraScript.  A front-end development contractor was later hired, and the app was recoded from scratch (in HTML/PHP, CSS/Sass, and Javascript/jQuery).  In the future, the server-side language may or may not be PHP.

=================================

Macro Organization:

HTML/PHP:

The "include" folder contains files with snippets of code that have been 'included' (include(ROOT_PATH . 'include/...')) in other files.


CSS/Sass, Javascript/jQuery:

As in Rails projects, the "assets/" folder contains the CSS/Sass ("assets/stylesheets/"), Javascript/jQuery ("assets/javascripts/"), and image ("assets/images/") files.

Note that the "walkthrough/" folder contains a separate "assets/" folder.  The "walkthrough/" folder was created by a second front-end development contractor using Adobe Captivate and does not visually or organizationally match the rest of the project with the exception of the "include/header.php" and "include/footer.php" files.

The "assets/javascripts/" folder contains a subfolder called "profile/"; this folder correlates with the root directory "profile/" folder.

The "assets/images/" folder also contains subfolders.

The "assets/fonts/" folder contains Bootstrap glyphicon files.

=================================

Micro Organization:

The "assets/stylesheets/_customized.bootstrap.min.scss" file is a customized Bootstrap 3.2.0 file which includes grid system, forms, glyphicons, navs, navbar, progress bars, component animations, dropdowns, and modals (http://getbootstrap.com/customize/).

The "assets/javascripts/customized.bootstrap.min.js" file is a customized Bootstrap 3.2.0 file which includes dropdowns, modals, collapse, and transitions (Go to http://getbootstrap.com/customize/ and scroll down).

Hand-coded CSS (i.e. Bootstrap overrides) is in the "assets/stylesheets/main.scss" file.  The file is long and may need to be reorganized in the future.  The code is currently organized into the following categories:

Variables<br>
Mixins<br>
Global<br>
Nav<br>
  Nav below top nav / collapsed "User Menu"<br>
Modal<br>
Landing Page<br>
  Musical Notes Map<br>
  Stage<br>
  Image Slider<br>
  Technology, Backstage, Music Education, Contests and Auditions<br>
Live Player Page<br>
New Arrivals, Recommended, Staff Picks, and Collaborations Pages<br>
All Music Page<br>
Players Wanted Page<br>
Profile, New Project, Projects, Collaborations, YouTube, Messages, Groups, and Project Profile Pages<br>
Footer<br>
  Privacy, Terms, and FAQs Pages<br>
Under Construction Page<br>
Media Queries

Please continue to observe the above categories until a new system is implemented.

Elements/selectors tend to come in the order they come in the markup; exceptions occur when one or more elements/selectors are grouped together.  

Properties are in alphabetical order, although it is not necessary to observe this.  

Comments have been applied liberally and may be outdated.

=================================

Conclusion:

Please update this README as appropriate.  For more information see the issues section (https://github.com/hlmason/musiclaps/issues).
