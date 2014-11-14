Musiclaps Media, Inc.
Front-End Documentation v.1
=================================

Languages: HTML/PHP, CSS/Sass, Javascript/jQuery

Front-End Frameworks: Bootstrap

Back-End Framework: None currently

=================================

Background: 

The app was originally built by a back-end engineer in an obscure language called TeraScript.  A front-end development contractor was later hired, and the app was recoded from scratch (in HTML/PHP, CSS/Sass, and Javascript/jQuery).  In the future, the server-side language will not be PHP.

=================================

Macro Organization:

The macro organization follows the MVC software architectural pattern with pages in the "views" folder; CSS/Sass and Javascript/jQuery files in the "assets" folder; database-related files in the "models" folder; and configuration, form validation, and form processing files in the "controllers" folder.  The "models" and "controllers" folders are for the most part empty since this GitHub project only contains the front-end portion of the project.

Note that the "walkthrough/" folder contains a separate "assets/" folder.  The "walkthrough/" folder was created by a second front-end development contractor using Adobe Captivate and does not visually or organizationally match the rest of the project with the exception of the "views/include/header.php" and "views/include/footer.php" files.

The "views/include/" folder contains files with snippets of code that have been 'included' (include(ROOT_PATH . 'include/...')) in other files.

=================================

Micro Organization:

As a general rule in this project, CSS/Sass variables contain dashes, Javascript/jQuery variables are in camel case, and PHP variables contain underscores.

The "assets/stylesheets/_customized.bootstrap.min.scss" file is a customized Bootstrap 3.2.0 file which includes grid system, forms, glyphicons, navs, navbar, progress bars, component animations, dropdowns, and modals (http://getbootstrap.com/customize/).

The "assets/javascripts/customized.bootstrap.min.js" file is a customized Bootstrap 3.2.0 file which includes dropdowns, modals, collapse, and transitions (Go to http://getbootstrap.com/customize/ and scroll down).

The "assets/fonts/" folder contains Bootstrap glyphicon files.

The "assets/stylesheets/_config.scss" file contains Sass variables.

The "assets/stylesheets/_utilities.scss" file contains Sass mixins.

Elements/selectors tend to come in the order they appear in the markup; exceptions occur when one or more elements/selectors are grouped together.  In most cases, selectors include element names - despite being unnecessary - to make it easier to identify the context.

Comments have been made liberally and may be outdated.

=================================

Conclusion:

Please update this README as appropriate.  For more information see the issues section (https://github.com/hlmason/musiclaps/issues).
