
<body class="navbar-bottom">
<!-- Main navbar -->
<div class="navbar navbar-inverse bg-indigo">
	<div class="navbar-header">
		<a class="navbar-brand" href="index.html">E-SPPD</a>

		<ul class="nav navbar-nav visible-xs-block">
			<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
			<li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
		</ul>
	</div>

	<div class="navbar-collapse collapse" id="navbar-mobile">
		<ul class="nav navbar-nav">
			<li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>

			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<i class="icon-git-compare"></i>
					<span class="visible-xs-inline-block position-right">Git updates</span>
					<span class="badge bg-warning-400">9</span>
				</a>

				<div class="dropdown-menu dropdown-content">
					<div class="dropdown-content-heading">
						Git updates
						<ul class="icons-list">
							<li><a href="#"><i class="icon-sync"></i></a></li>
						</ul>
					</div>

					<ul class="media-list dropdown-content-body width-350">
						<li class="media">
							<div class="media-left">
								<a href="#" class="btn border-primary text-primary btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-pull-request"></i></a>
							</div>

							<div class="media-body">
								Drop the IE <a href="#">specific hacks</a> for temporal inputs
								<div class="media-annotation">4 minutes ago</div>
							</div>
						</li>

						<li class="media">
							<div class="media-left">
								<a href="#" class="btn border-warning text-warning btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-commit"></i></a>
							</div>

							<div class="media-body">
								Add full font overrides for popovers and tooltips
								<div class="media-annotation">36 minutes ago</div>
							</div>
						</li>

						<li class="media">
							<div class="media-left">
								<a href="#" class="btn border-info text-info btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-branch"></i></a>
							</div>

							<div class="media-body">
								<a href="#">Chris Arney</a> created a new <span class="text-semibold">Design</span> branch
								<div class="media-annotation">2 hours ago</div>
							</div>
						</li>

						<li class="media">
							<div class="media-left">
								<a href="#" class="btn border-success text-success btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-merge"></i></a>
							</div>

							<div class="media-body">
								<a href="#">Eugene Kopyov</a> merged <span class="text-semibold">Master</span> and <span class="text-semibold">Dev</span> branches
								<div class="media-annotation">Dec 18, 18:36</div>
							</div>
						</li>

						<li class="media">
							<div class="media-left">
								<a href="#" class="btn border-primary text-primary btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-pull-request"></i></a>
							</div>

							<div class="media-body">
								Have Carousel ignore keyboard events
								<div class="media-annotation">Dec 12, 05:46</div>
							</div>
						</li>
					</ul>

					<div class="dropdown-content-footer">
						<a href="#" data-popup="tooltip" title="All activity"><i class="icon-menu display-block"></i></a>
					</div>
				</div>
			</li>
		</ul>

		<p class="navbar-text"><span class="label bg-success-400">Online</span></p>

		<ul class="nav navbar-nav navbar-right">
			<li class="dropdown language-switch">
				<a class="dropdown-toggle" data-toggle="dropdown">
					<img src="<?php echo base_url() ?>assets/images/flags/gb.png" class="position-left" alt="">
					English
					<span class="caret"></span>
				</a>

				<ul class="dropdown-menu">
					<li><a class="deutsch"><img src="<?php echo base_url() ?>assets/images/flags/de.png" alt=""> Deutsch</a></li>
					<li><a class="ukrainian"><img src="<?php echo base_url() ?>assets/images/flags/ua.png" alt=""> Українська</a></li>
					<li><a class="english"><img src="<?php echo base_url() ?>assets/images/flags/gb.png" alt=""> English</a></li>
					<li><a class="espana"><img src="<?php echo base_url() ?>assets/images/flags/es.png" alt=""> España</a></li>
					<li><a class="russian"><img src="<?php echo base_url() ?>assets/images/flags/ru.png" alt=""> Русский</a></li>
				</ul>
			</li>

			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<i class="icon-bubbles4"></i>
					<span class="visible-xs-inline-block position-right">Messages</span>
					<span class="badge bg-warning-400">2</span>
				</a>

				<div class="dropdown-menu dropdown-content width-350">
					<div class="dropdown-content-heading">
						Messages
						<ul class="icons-list">
							<li><a href="#"><i class="icon-compose"></i></a></li>
						</ul>
					</div>

					<ul class="media-list dropdown-content-body">
						<li class="media">
							<div class="media-left">
								<img src="<?php echo base_url() ?>assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
								<span class="badge bg-danger-400 media-badge">5</span>
							</div>

							<div class="media-body">
								<a href="#" class="media-heading">
									<span class="text-semibold">James Alexander</span>
									<span class="media-annotation pull-right">04:58</span>
								</a>

								<span class="text-muted">who knows, maybe that would be the best thing for me...</span>
							</div>
						</li>

						<li class="media">
							<div class="media-left">
								<img src="<?php echo base_url() ?>assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
								<span class="badge bg-danger-400 media-badge">4</span>
							</div>

							<div class="media-body">
								<a href="#" class="media-heading">
									<span class="text-semibold">Margo Baker</span>
									<span class="media-annotation pull-right">12:16</span>
								</a>

								<span class="text-muted">That was something he was unable to do because...</span>
							</div>
						</li>

						<li class="media">
							<div class="media-left"><img src="<?php echo base_url() ?>assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
							<div class="media-body">
								<a href="#" class="media-heading">
									<span class="text-semibold">Jeremy Victorino</span>
									<span class="media-annotation pull-right">22:48</span>
								</a>

								<span class="text-muted">But that would be extremely strained and suspicious...</span>
							</div>
						</li>

						<li class="media">
							<div class="media-left"><img src="<?php echo base_url() ?>assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
							<div class="media-body">
								<a href="#" class="media-heading">
									<span class="text-semibold">Beatrix Diaz</span>
									<span class="media-annotation pull-right">Tue</span>
								</a>

								<span class="text-muted">What a strenuous career it is that I've chosen...</span>
							</div>
						</li>

						<li class="media">
							<div class="media-left"><img src="<?php echo base_url() ?>assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
							<div class="media-body">
								<a href="#" class="media-heading">
									<span class="text-semibold">Richard Vango</span>
									<span class="media-annotation pull-right">Mon</span>
								</a>

								<span class="text-muted">Other travelling salesmen live a life of luxury...</span>
							</div>
						</li>
					</ul>

					<div class="dropdown-content-footer">
						<a href="#" data-popup="tooltip" title="All messages"><i class="icon-menu display-block"></i></a>
					</div>
				</div>
			</li>

			<li class="dropdown dropdown-user">
				<a class="dropdown-toggle" data-toggle="dropdown">
					<img src="<?php echo base_url() ?>assets/images/placeholder.jpg" alt="">
					<span><?php echo $this->session->userdata("nama");?></span>

					<i class="caret"></i>
				</a>

				<ul class="dropdown-menu dropdown-menu-right">
					<li><a href="#"><i class="icon-user-plus"></i> My profile</a></li>
					<li><a href="#"><i class="icon-coins"></i> My balance</a></li>
					<li><a href="#"><span class="badge bg-teal-400 pull-right">58</span> <i class="icon-comment-discussion"></i> Messages</a></li>
					<li class="divider"></li>
					<li><a href="#"><i class="icon-cog5"></i> Account settings</a></li>
					<li><a href="<?php echo base_url('index.php/client/logout') ?>"><i class="icon-switch2"></i> Logout</a></li>
				</ul>
			</li>
		</ul>
	</div>
</div>
<!-- /main navbar -->


<!-- Page header -->
<div class="page-header">
	<div class="breadcrumb-line">
		<ul class="breadcrumb">
			<li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
			<li class="active">Dashboard</li>
		</ul>

		<ul class="breadcrumb-elements">
			<li><a href="#"><i class="icon-comment-discussion position-left"></i> Support</a></li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<i class="icon-gear position-left"></i>
					Settings
					<span class="caret"></span>
				</a>

				<ul class="dropdown-menu dropdown-menu-right">
					<li><a href="#"><i class="icon-user-lock"></i> Account security</a></li>
					<li><a href="#"><i class="icon-statistics"></i> Analytics</a></li>
					<li><a href="#"><i class="icon-accessibility"></i> Accessibility</a></li>
					<li class="divider"></li>
					<li><a href="#"><i class="icon-gear"></i> All settings</a></li>
				</ul>
			</li>
		</ul>
	</div>

	<div class="page-header-content">
		<div class="page-title">
			<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Home</span> - Dashboard <small>Hello, <?php echo $this->session->userdata("nama"); ?>!</small></h4>
		</div>

		<div class="heading-elements">
			<div class="heading-btn-group">
				<a href="#" class="btn btn-link btn-float text-size-small has-text"><i class="icon-bars-alt text-indigo-400"></i><span>Statistics</span></a>
				<a href="#" class="btn btn-link btn-float text-size-small has-text"><i class="icon-calculator text-indigo-400"></i><span>Invoices</span></a>
				<a href="#" class="btn btn-link btn-float text-size-small has-text"><i class="icon-calendar5 text-indigo-400"></i><span>Schedule</span></a>
			</div>
		</div>
	</div>
</div>
<!-- /page header -->


<!-- Page container -->
<div class="page-container">

	<!-- Page content -->
	<div class="page-content">

		<!-- Main sidebar -->
		<div class="sidebar sidebar-main sidebar-default">
			<div class="sidebar-content">

				<!-- Main navigation -->
				<div class="sidebar-category sidebar-category-visible">
					<div class="sidebar-user-material">
						<div class="category-content">
							<div class="sidebar-user-material-content">
								<a href="#"><img src="<?php echo base_url() ?>assets/images/placeholder.jpg" class="img-circle img-responsive" alt=""></a>
								<h6><?php echo $this->session->userdata("nama"); ?></h6>
								<span class="text-size-small">Santa Ana, CA</span>
							</div>

							<div class="sidebar-user-material-menu">
								<a href="#user-nav" data-toggle="collapse"><span>My account</span> <i class="caret"></i></a>
							</div>
						</div>

						<div class="navigation-wrapper collapse" id="user-nav">
							<ul class="navigation">
								<li><a href="#"><i class="icon-user-plus"></i> <span>My profile</span></a></li>
								<li><a href="#"><i class="icon-coins"></i> <span>My balance</span></a></li>
								<li><a href="#"><i class="icon-comment-discussion"></i> <span><span class="badge bg-teal-400 pull-right">58</span> Messages</span></a></li>
								<li class="divider"></li>
								<li><a href="#"><i class="icon-cog5"></i> <span>Account settings</span></a></li>
								<li><a href="#"><i class="icon-switch2"></i> <span>Logout</span></a></li>
							</ul>
						</div>
					</div>

					<div class="category-content no-padding">
						<ul class="navigation navigation-main navigation-accordion">

							<!-- Main -->
							<li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
							<li class="active"><a href="index.html"><i class="icon-home4"></i> <span>Dashboard</span></a></li>

							<!-- /page kits -->

						</ul>
					</div>
				</div>
				<!-- /main navigation -->

			</div>
		</div>
		<!-- /main sidebar -->


		<!-- Main content -->
		<div class="content-wrapper">

      <div class="col-md-9">
        adsda
      </div>
		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</div>
<!-- /page container -->
