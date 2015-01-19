			<div class="navbar-default sidebar" role="navigation">
				<div class="sidebar-nav navbar-collapse">
					<ul class="nav" id="side-menu">
						
						<!--
						<li class="sidebar-search">
							<div class="input-group custom-search-form">
								<input type="text" class="form-control" placeholder="Search..." id="txtSidebarSearch">
								<span class="input-group-btn">
									<button class="btn btn-default" type="button" id="btnSidebarSearch">
										<i class="fa fa-search"></i>
									</button>
								</span>
							</div>
						</li>
						-->
						<li>
							<a href="/AssetInformations/index"><i class="fa fa-dashboard fa-fw"></i><?php echo __('Asset Informations'); ?></a>
						</li>
						<li>
							<a href="/AssetInformations/add"><i class="fa fa-dashboard fa-fw"></i><?php echo __('Asset Add'); ?></a>
						</li>
						<li>
							<a href="/AssetInformations/report"><i class="fa fa-dashboard fa-fw"></i><?php echo __('Asset Report'); ?></a>
						</li>
					</ul>
				</div>
				<!-- /.sidebar-collapse -->
			</div>



<script type="text/javascript">
$("#btnSidebarSearch").click(function() {
	document.frmProductSearch.elements["data[Product][text_search]"].value = $("#txtSidebarSearch").val();
	document.frmProductSearch.action = "/Products/index";
	document.frmProductSearch.submit();
});
</script>