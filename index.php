<?php
if (isset($_POST['button']))
{
	exec("./bash/reload");
}
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>IXEMEL</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.5 -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<!-- <link rel="stylesheet" href="css/font-awesome.min.css"> -->
	<!-- Ionicons -->
	
	<!-- Theme style -->
	<link rel="stylesheet" href="dist/css/AdminLTE.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/ionicons.min.css">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
      -->
      <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">

      <!-- CSS PERSO -->
      <link rel="stylesheet" href="css/style.css">

      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
  <!--
  BODY TAG OPTIONS:
  =================
  Apply one or more of the following classes to get the
  desired effect
  |---------------------------------------------------------|
  | SKINS         | skin-blue                               |
  |               | skin-black                              |
  |               | skin-purple                             |
  |               | skin-yellow                             |
  |               | skin-red                                |
  |               | skin-green                              |
  |---------------------------------------------------------|
  |LAYOUT OPTIONS | fixed                                   |
  |               | layout-boxed                            |
  |               | layout-top-nav                          |
  |               | sidebar-collapse                        |
  |               | sidebar-mini                            |
  |---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">

		<!-- Main Header -->
		<header class="main-header">

			<!-- Logo -->
			<a href="./" class="logo">
				<!-- mini logo for sidebar mini 50x50 pixels -->
				<span class="logo-mini"><b>X</b>ML</span>
				<!-- logo for regular state and mobile devices -->
				<span class="logo-lg"><b>IXEMEL</b></span>
			</a>

			<!-- Header Navbar -->
			<nav class="navbar navbar-static-top" role="navigation">
				<!-- Sidebar toggle button-->
				<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
					<span class="sr-only">Toggle navigation</span>
				</a>
				<!-- Navbar Right Menu -->
				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						<!-- Messages: style can be found in dropdown.less-->
						<li class="dropdown messages-menu">
							<!-- Menu toggle button -->
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="fa fa-envelope-o"></i>
								<span class="label label-success">1 </span>
							</a>
							<ul class="dropdown-menu">
								<li class="header">You have 1 message</li>
								<li>
									<!-- inner menu: contains the messages -->
									<ul class="menu">
										<li><!-- start message -->
											<a href="#">
												<div class="pull-left">
													<!-- User Image -->
													<img src="resources/BG_du_XML.jpg" class="img-circle" alt="User Image">
												</div>
												<!-- Message title and timestamp -->
												<h4>
													Support Team
													<small><i class="fa fa-clock-o"></i> 5 mins</small>
												</h4>
												<!-- The message -->
												<p>Embauche Google: Arthur & Gautier</p>
											</a>
										</li><!-- end message -->
									</ul><!-- /.menu -->
								</li>
								<li class="footer"><a href="#">Voir tous les messages</a></li>
							</ul>
						</li><!-- /.messages-menu -->

						<!-- Notifications Menu -->
						<li class="dropdown notifications-menu">
							<!-- Menu toggle button -->
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="fa fa-bell-o"></i>
								<span class="label label-warning">1</span>
							</a>
							<ul class="dropdown-menu">
								<li class="header">Vous avez 1 notification</li>
								<li>
									<!-- Inner Menu: contains the notifications -->
									<ul class="menu">
										<li><!-- start notification -->
											<a href="#">
												<i class="fa fa-users text-aqua"></i> 5 nouveaux membres vous ont join aujourd'hui
											</a>
										</li><!-- end notification -->
									</ul>
								</li>
								<li class="footer"><a href="#">View all</a></li>
							</ul>
						</li>
						<!-- Tasks Menu -->
						<li class="dropdown tasks-menu">
							<!-- Menu Toggle Button -->
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="fa fa-flag-o"></i>
								<span class="label label-danger">3</span>
							</a>
							<ul class="dropdown-menu">
								<li class="header">Vous avez 3 taches</li>
								<li>
									<!-- Inner menu: contains the tasks -->
									<ul class="menu">
										<li><!-- Task item -->
											<a href="#">
												<!-- Task title and progress text -->
												<h3>
													Finir le code de Bastien Micheau
													<small class="pull-right">80%</small>
												</h3>
												<!-- The progress bar -->
												<div class="progress xs">
													<!-- Change the css width attribute to simulate progress -->
													<div class="progress-bar progress-bar-aqua" style="width: 80%" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
														<span class="sr-only">80% Complete</span>
													</div>
												</div>
											</a>
										</li><!-- end task item -->
										<li><!-- Task item -->
											<a href="#">
												<!-- Task title and progress text -->
												<h3>
													Expliquer Git à Bastien Micheau
													<small class="pull-right">20%</small>
												</h3>
												<!-- The progress bar -->
												<div class="progress xs">
													<!-- Change the css width attribute to simulate progress -->
													<div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
														<span class="sr-only">20% Complete</span>
													</div>
												</div>
											</a>
										</li><!-- end task item -->
										<li><!-- Task item -->
											<a href="#">
												<!-- Task title and progress text -->
												<h3>
													Finir ce site.
													<small class="pull-right">100%</small>
												</h3>
												<!-- The progress bar -->
												<div class="progress xs">
													<!-- Change the css width attribute to simulate progress -->
													<div class="progress-bar progress-bar-aqua" style="width: 100%" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
														<span class="sr-only">100% Complete</span>
													</div>
												</div>
											</a>
										</li><!-- end task item -->
									</ul>
								</li>
								<li class="footer">
									<a href="#">View all tasks</a>
								</li>
							</ul>
						</li>
						<!-- User Account Menu -->
						<li class="dropdown user user-menu">
							<!-- Menu Toggle Button -->
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<!-- The user image in the navbar-->
								<img src="resources/BG_du_XML.jpg" class="user-image" alt="User Image">
								<!-- hidden-xs hides the username on small devices so only the image appears. -->
								<span class="hidden-xs">Arthur & Gautier</span>
							</a>
							<ul class="dropdown-menu">
								<!-- The user image in the menu -->
								<li class="user-header">
									<img src="resources/BG_du_XML.jpg" class="img-circle" alt="User Image">
									<p>
										Arthur & Gautier - XML Developer
										<small>Member since Nov. 2015</small>
									</p>
								</li>
								<!-- Menu Body -->
								<li class="user-body">
									<div class="col-xs-4 text-center">
										<a href="#">Followers</a>
									</div>
									<div class="col-xs-4 text-center">
										<a href="#">Sales</a>
									</div>
									<div class="col-xs-4 text-center">
										<a href="#">Friends</a>
									</div>
								</li>
								<!-- Menu Footer-->
								<li class="user-footer">
									<div class="pull-left">
										<a href="#" class="btn btn-default btn-flat">Profile</a>
									</div>
									<div class="pull-right">
										<a href="#" class="btn btn-default btn-flat">Sign out</a>
									</div>
								</li>
							</ul>
						</li>
						<!-- Control Sidebar Toggle Button -->
						<li>
							<a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
						</li>
					</ul>
				</div>
			</nav>
		</header>
		<!-- Left side column. contains the logo and sidebar -->
		<aside class="main-sidebar">

			<!-- sidebar: style can be found in sidebar.less -->
			<section class="sidebar">

				<!-- Sidebar user panel (optional) -->
				<div class="user-panel">
					<div class="pull-left image">
						<img src="resources/BG_du_XML.jpg" class="img-circle" alt="User Image">
					</div>
					<div class="pull-left info">
						<p>Arthur & Gautier</p>
						<!-- Status -->
						<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
					</div>
				</div>

				<br/>

				<!-- /.search form -->

				<!-- Sidebar Menu -->
				<ul class="sidebar-menu">
					<li class="header">Catégories</li>
					<!-- Optionally, you can add icons to the links -->
					<li class="treeview">
						<a href="#"><i class="fa fa-link"></i> <span>Etudiants</span> <i class="fa fa-angle-left pull-right"></i></a>
						<ul class="treeview-menu">
							<li><a href="#" id="studentsByCursus">Par cursus</a></li>
							<li><a href="#" id="studentsByYear">Par année</a></li>
							<li><a href="#" id="studentsByGroup">Par groupe</a></li>
							<li><a href="#" id="studentsDebtsPreviousYear">Avec dettes des années<br/>précédentes</a></li>
							<li><a href="#" id="studentsNoDebtAtLeastOneUFNoValidate">Avec aucune dette et ayant<br/>au moins une UF non validée</a></li>
							<li><a href="#" id="students2DebtsNoUFNoValidate">Avec aucune UF non validée<br/>et deux dettes</a></li>
							<li><a href="#" id="students1DebtNoUFNoValidate">Avec aucune UF non validée<br/>et une dette</a></li>
							<li><a href="#" id="studentsAtLeast2Debts">Avec au moins 2 dettes</a></li>
						</ul>
					</li>
					<li class="treeview">
						<a href="#"><i class="fa fa-link"></i> <span>Enseignants</span> <i class="fa fa-angle-left pull-right"></i></a>
						<ul class="treeview-menu">
							<li><a href="#" id="teachersByCursus">Par cursus</a></li>
							<li><a href="#" id="teachersByGroup">Par groupe</a></li>
							<li><a href="#" id="teachersBySubject">Par matière</a></li>
							<li><a href="#" id="teachersByYear">Par année</a></li>
						</ul>
					</li>
					<li class="treeview">
						<a href="#"><i class="fa fa-link"></i> <span>Matières</span> <i class="fa fa-angle-left pull-right"></i></a>
						<ul class="treeview-menu">
							<li><a href="#" id="subjectsByCursus">Par cursus</a></li>
							<li><a href="#" id="subjectsByTeacher">Par professeur</a></li>
						</ul>
					</li>
				</ul><!-- /.sidebar-menu -->
			</section>
			<!-- /.sidebar -->
		</aside>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<h1>
					Bienvenue
					<small>dans notre outil d'administration scolaire</small>
				</h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i>ADMIN</a></li>
					<li class="active">Scolarité</li>
				</ol>
			</section>

			<!-- Main content -->
			<section class="content"> 
				<!-- <div class="container" id="main">
					Main ici 
				</div>  -->
				<div class="row">
					<div class="col-lg-3 col-xs-6">
						<!-- small box -->
						<div class="small-box bg-green">
							<div class="inner">
								<h3 id="pourcentageOfStudentsAtLeastOneDebt"><sup style="font-size: 20px">%</sup></h3>
								<p>Ayant au moins une dette</p>
							</div>
							<div class="icon">
								<i class="ion ion-stats-bars"></i>
							</div>
							<a href="#" class="small-box-footer"><i class="fa"></i></a>
						</div>
					</div><!-- ./col -->
					<div class="col-lg-3 col-xs-6">
						<!-- small box -->
						<div class="small-box bg-yellow">
							<div class="inner">
								<h3 id="numberOfStudents"></h3>
								<p>Étudiants</p>
							</div>
							<div class="icon">
								<i class="ion ion-person-add"></i>
							</div>
							<a href="#" class="small-box-footer"><i class="fa "></i></a>
						</div>
					</div><!-- ./col -->
					<div class="col-lg-3 col-xs-6">
						<!-- small box -->
						<div class="small-box bg-red">
							<div class="inner">
								<h3 id="numberOfSubjects"></h3>
								<p>Matières</p>
							</div>
							<div class="icon">
								<i class="ion ion-pie-graph"></i>
							</div>
							<a href="#" class="small-box-footer"><i class="fa"></i></a>
						</div>
					</div><!-- ./col -->
					<div class="col-lg-3 col-xs-6">
						<!-- small box -->
						<div class="small-box bg-yellow">
							<div class="inner">
								<h3 id="numberOfTeachers"></h3>
								<p>Enseignants</p>
							</div>
							<div class="icon">
								<i class="ion ion-person-add"></i>
							</div>
							<a href="#" class="small-box-footer"><i class="fa"></i></a>
						</div>
					</div><!-- ./col -->
				</div>
			</section> <!-- /.content -->
		</div><!-- /.content-wrapper -->

		<!-- Main Footer -->
		<footer class="main-footer">
			<!-- To the right -->
			<div class="pull-right hidden-xs">
				Appelez Arthur & Gautier dès maintenant pour profiter de leur expertise.
			</div>
			<!-- Default to the left -->
			<strong>Copyright &copy; 2015 <a href="#">INSA Toulouse</a>.</strong> All rights reserved.
		</footer>

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Create the tabs -->
			<ul class="nav nav-tabs nav-justified control-sidebar-tabs">
				<li class="active"><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
			</ul>
			<!-- Tab panes -->
			<div class="tab-content">
				<div class="tab-pane active" id="control-sidebar-settings-tab">
					<form method="POST">
						<h3 class="control-sidebar-heading">General Settings</h3>
						<div class="form-group">
							<label class="control-sidebar-subheading">
								Reload database <br/><br/> 
								
							<button name="button" class="btn btn-primary center-block btn-sm" ><span class="glyphicon glyphicon-refresh"></span> Reload</button>
							</label>
							<br/> 
							<p>
								This will reload all the database.
							</p>
						</div><!-- /.form-group -->
					</form>
				</div><!-- /.tab-pane -->
			</div>
		</aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
      immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
  </div><!-- ./wrapper -->

  <!-- REQUIRED JS SCRIPTS -->
  <!-- jQuery 2.1.4 -->
  <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
  <!-- Bootstrap 3.3.5 -->
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/app.min.js"></script>
  <!-- Our JavaScript -->
  <script src="js/site.js"></script>

    <!-- Optionally, you can add Slimscroll and FastClick plugins.
         Both of these plugins are recommended to enhance the
         user experience. Slimscroll is required when using the
         fixed layout. -->
     </body>
     </html>