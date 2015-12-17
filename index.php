<?php
if (isset($_POST['button']))
{
	exec("./bash/reload");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>IXEMEL</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">	
	<link rel="stylesheet" href="dist/css/AdminLTE.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<header class="main-header">
			<a href="./" class="logo">
				<span class="logo-mini"><b>X</b>ML</span>
				<span class="logo-lg"><b>IXEMEL</b></span>
			</a>
			<nav class="navbar navbar-static-top" role="navigation">
				<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
					<span class="sr-only">Toggle navigation</span>
				</a>
				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						<li class="dropdown messages-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="fa fa-envelope-o"></i>
								<span class="label label-success">1 </span>
							</a>
							<ul class="dropdown-menu">
								<li class="header">You have 1 message</li>
								<li>
									<ul class="menu">
										<li>
											<a href="#">
												<div class="pull-left">
													<img src="resources/BG_du_XML.jpg" class="img-circle" alt="User Image">
												</div>
												<h4>
													Support Team
													<small><i class="fa fa-clock-o"></i> 5 mins</small>
												</h4>
												<p>Embauche Google: Arthur & Gautier</p>
											</a>
										</li><!-- end message -->
									</ul><!-- /.menu -->
								</li>
								<li class="footer"><a href="#">Voir tous les messages</a></li>
							</ul>
						</li><!-- /.messages-menu -->

						<li class="dropdown tasks-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="fa fa-flag-o"></i>
								<span class="label label-danger">3</span>
							</a>
							<ul class="dropdown-menu">
								<li class="header">Vous avez 3 taches</li>
								<li>
									<ul class="menu">
										<li>
											<a href="#">
												<h3>
													Finir le code de Bastien Micheau
													<small class="pull-right">80%</small>
												</h3>
												<div class="progress xs">
													<div class="progress-bar progress-bar-aqua" style="width: 80%" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
														<span class="sr-only">80% Complete</span>
													</div>
												</div>
											</a>
										</li>
										<li>
											<a href="#">
												<h3>
													Expliquer Git à Bastien Micheau
													<small class="pull-right">20%</small>
												</h3>
												<div class="progress xs">
													<div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
														<span class="sr-only">20% Complete</span>
													</div>
												</div>
											</a>
										</li>
										<li>
											<a href="#">
												<h3>
													Finir ce site.
													<small class="pull-right">100%</small>
												</h3>
												<div class="progress xs">
													<div class="progress-bar progress-bar-aqua" style="width: 100%" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
														<span class="sr-only">100% Complete</span>
													</div>
												</div>
											</a>
										</li>
									</ul>
								</li>
								<li class="footer">
									<a href="#">View all tasks</a>
								</li>
							</ul>
						</li>
						<li class="dropdown user user-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<img src="resources/BG_du_XML.jpg" class="user-image" alt="User Image">
								<span class="hidden-xs">Arthur & Gautier</span>
							</a>
							<ul class="dropdown-menu">
								<li class="user-header">
									<img src="resources/BG_du_XML.jpg" class="img-circle" alt="User Image">
									<p>
										Arthur & Gautier - XML Developer
										<small>Member since Nov. 2015</small>
									</p>
								</li>
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
						<li>
							<a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
						</li>
					</ul>
				</div>
			</nav>
		</header>
		<aside class="main-sidebar">
			<section class="sidebar">
				<div class="user-panel">
					<div class="pull-left image">
						<img src="resources/BG_du_XML.jpg" class="img-circle" alt="User Image">
					</div>
					<div class="pull-left info">
						<p>Arthur & Gautier</p>
						<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
					</div>
				</div>
				<br/>
				<ul class="sidebar-menu">
					<li class="header">Catégories</li>
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
		<div class="content-wrapper">
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
			<section class="content">
				<div class="row">
					<div class="col-lg-3 col-xs-6">
						<div class="small-box bg-green">
							<div class="inner">
								<h3><span id="pourcentageOfStudentsAtLeastOneDebt"></span><sup style="font-size: 20px">%</sup></h3>
								<p>des étudiants ont au moins une dette</p>
							</div>
							<div class="icon">
								<i class="ion ion-stats-bars"></i>
							</div>
							<a href="#" class="small-box-footer"><i class="fa"></i></a>
						</div>
					</div><!-- ./col -->
					<div class="col-lg-3 col-xs-6">
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
		</div>
		<footer class="main-footer">
			<div class="pull-right hidden-xs">
				Appelez Arthur & Gautier dès maintenant pour profiter de leur expertise.
			</div>
			<strong>Copyright &copy; 2015 <a href="#">INSA Toulouse</a>.</strong> All rights reserved.
		</footer>
		<aside class="control-sidebar control-sidebar-dark">
			<ul class="nav nav-tabs nav-justified control-sidebar-tabs">
				<li class="active"><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane active" id="control-sidebar-settings-tab">
					<form method="POST">
						<h3 class="control-sidebar-heading">General Settings</h3>
						<div class="form-group">
							<label class="control-sidebar-subheading">Reload database</label/>
							<br/>
							<button name="button" class="btn btn-primary center-block btn-sm" ><span class="glyphicon glyphicon-refresh"></span> Reload</button>
							<br/> 
							<p>
								This will reload all the database.
							</p>
						</div>
					</form>
				</div>
			</div>
		</aside>
      <div class="control-sidebar-bg"></div>
  </div>
  <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="dist/js/app.min.js"></script>
  <script src="js/site.js"></script>
</body>
</html>