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

							<!-- Main -->
							<li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
							<li><a href="<?=site_url('Dashboard')?>"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
							<li>
								<a href="#"><i class="icon-stack2"></i> <span>Master</span></a>

								<ul>
									<li class="active"><a href="<?=site_url('Master')?>"><i class="icon-users"></i>Account Master</a>
										<ul>
											<li><a href="<?=site_url('Master')?>"><i class="icon-users"></i>Account Master</a></li>
											
											<li><a href="<?=site_url('Master/Groups')?>"><i class="icon-users4"></i>Groups</a></li>
											<li><a href="<?=site_url('Master/subGroup')?>"><i class="icon-collaboration"></i>Sub Groups</a></li>
											<li><a href="<?=site_url('Master/openingBalance')?>"><i class="icon-cash3"></i>Opening balance</a></li>
											
											<li><a href="<?=site_url('Master/accSetting')?>"><i class="icon-cog4"></i>Account Setting</a></li>
											
										</ul>
									</li>
									<li><a href="<?=site_url('partyMaster')?>"><i class="icon-users2"></i>Party Master</a>
										<ul>
											<li><a href="<?=site_url('partyMaster/index')?>">Party Master</a></li>
											<li><a href="<?=site_url('partyMaster/regionMaster')?>">Region Master</a></li>
											<li><a href="<?=site_url('partyMaster/areaCode')?>">Area Code</a></li>
											<li><a href="<?=site_url('partyMaster/openPoint')?>">Opening Pointing</a></li>
											<li><a href="<?=site_url('partyMaster/tipupPointing')?>">Tipup Opening Pointing</a></li>
										</ul>
									</li>
									<li><a href="#"><i class="icon-exit"></i>Exit</a></li>

								</ul>
							</li>




						</ul>
					</div>
				</div><!-- /main navigation -->

			</div><!-- / sidebar contant end -->
		</div><!-- /main sidebar end -->

