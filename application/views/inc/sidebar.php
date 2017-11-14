<!-- Page header -->
<div class="page-header">
	<div class="page-header-content">
		<div class="page-title">
			<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Home</span> - Dashboard <small>Hello,   <?php echo $username; ?></small></h4>
		</div>
		<div class="heading-elements">
			<div class="heading-btn-group">
				<a href="#" class="btn btn-link btn-float has-text"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
				<a href="#" class="btn btn-link btn-float has-text"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>
				<a href="#" class="btn btn-link btn-float has-text"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
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
					<div class="category-title h6">
						<span>Main navigation</span>
						<ul class="icons-list">
							<li><a href="#" data-action="collapse"></a></li>
						</ul>
					</div>

					<div class="category-content no-padding">
						<ul class="navigation navigation-main navigation-accordion">
							
							<!-- Dashboard -->
							<li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
							<li><a href="<?=site_url('Dashboard')?>"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
							
							<li class="active"><a href="#"><i class="icon-search4"></i> <span>Search</span></a>
								<ul>
									<li><a href="#">Basic search results</a></li>
									<li><a href="#">User search results</a></li>
								</ul>
							</li>
							<li class="active"><a href="changelog.html"><i class="icon-list-unordered"></i> <span>Changelog <span class="label bg-blue-400">1.4</span></span></a></li>
							<li class="active"><a href="#"><i class="icon-spell-check"></i> <span>Editors</span></a>
								<ul>
									<li><a href="#">Editor</a></li>
									<li><a href="#">Calculators</a></li>
								</ul>
							</li>
							<li><a href="#"><i class="icon-lifebuoy"></i> <span>Support</span></a></li>
							
							<!--/Dashboard-->
						</ul>
					</div>
				</div>
				<!-- /main navigation -->

			</div>
		</div>