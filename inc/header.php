<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/favicon.ico">

    <title>Hallym University College of International Studies</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Noto+Sans&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php if (strpos($_SERVER['SCRIPT_NAME'], 'index.php') !== false) {
    	echo '<link href="css/carousel.css" rel="stylesheet">';
      } ?>

  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-default navbar-static-top" data-spy="affix" data-offset-top="65">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php"><?php echo $t['navBrandMain']; ?><br /><small><?php echo $t['navBrandSub']; ?></small></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="<?php if ($activePage == "apply") { echo "active"; } ?> hidden-sm"><a href="index.php?p=apply"><?php echo $t['navApply']; ?></a></li>
		<li class="<?php if ($activePage == "about") { echo "active"; } ?> dropdown">
                  <a href="index.php?p=about" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $t['navAbout']; ?> <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
		    <li><a href="index.php?p=about&do=faculty"><?php echo $t['navAboutFaculty']; ?></a></li>
                    <li><a href="index.php?p=about&do=dean"><?php echo $t['navAboutDeans']; ?></a></li>
                    <li><a href="index.php?p=about&do=cisbrief"><?php echo $t['navAboutBrief']; ?></a></li>
		    <li><a href="index.php?p=about&do=admission"><?php echo $t['navAboutAdmission']; ?></a></li>
                    <li><a href="index.php?p=about&do=cisoffice"><?php echo $t['navAboutOffice']; ?></a></li>
                  </ul>
                </li>
		<li class="<?php if ($activePage == "majors") { echo "active"; } ?> dropdown">
                  <a href="index.php?p=majors" class="dropdown-toggle"
			 data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $t['navMajors']; ?> <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
		    <li><a href="index.php?p=majors&do=undergrad"><strong>Undergraduate</strong></a></li>
                    <li><a href="index.php?p=majors&do=itb"><?php echo $t['navMajorsITB']; ?></a></li>
                    <li><a href="index.php?p=majors&do=imc"><?php echo $t['navMajorsIMC']; ?></a></li>
		    <li><a href="index.php?p=majors&do=lifs"><?php echo $t['navMajorsLIFS']; ?></a></li>
                    <li><a href="index.php?p=majors&do=eas"><?php echo $t['navMajorsEAS']; ?></a></li>
		    <li class="divider"></li>
		    <li><a href="index.php?p=majors&do=graduate"><strong>Graduate</strong></a></li>
		    <li><a href="index.php?p=majors&do=mis">Master's in Information Science</a></li>
		    <li><a href="index.php?p=majors&do=phd">PhD Opportunities</a></li>
                  </ul>
                </li>
		<li class="<?php if ($activePage == "sap") { echo "active"; } ?> dropdown">
                  <a href="index.php?p=sap" class="dropdown-toggle hidden-sm hidden-md"
			 data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $t['navSAP']; ?> <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="index.php?p=sap&do=sap"><?php echo $t['navSAPAbout']; ?></a></li>
                    <li><a href="index.php?p=sap&do=partners"><?php echo $t['navSAPPartners']; ?></a></li>
                    <li><a href="index.php?p=sap&do=partners"><?php echo $t['navSAPStudents']; ?></a></li>
                  </ul>
                </li>
		<li class="<?php if ($activePage == "community") { echo "active"; } ?> dropdown">
                  <a href="index.php?p=community" class="dropdown-toggle"
			 data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $t['navCommunity']; ?> <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
		<li class="<?php if ($activePage == "admin") { echo "active"; } ?> dropdown">
                  <a href="index.php?p=admin" class="dropdown-toggle hidden-sm"
			 data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $t['navAdministration']; ?> <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
		<li><div style="padding-top: 10px;" class="btn-toolbar" role="toolbar" aria-label="...">
			<div class="btn-group btn-group-sm" role="group">
			<button type="button" class="btn btn-default"><a href="<?php $_SERVER['REQUEST_URI'] ?>?lang=ko">한국의</a></button>
			<button type="button" class="btn btn-default"><a href="<?php $_SERVER['REQUEST_URI'] ?>?lang=en">English</a></button>
			</div>
		</div></li>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>
    <div id="floatingLogo" data-spy="affix" data-offset-top="500"><img src="images/hallym.png" ></div>
