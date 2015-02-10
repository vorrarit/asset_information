<div class="navbar-default sidebar" role="navigation">
	<div class="sidebar-nav navbar-collapse">
		<ul class="nav" id="side-menu">
			<p>
			<center>
				<img src="/img/Hewlett_Packard_logo.png" width="50%" height="auto;">
			</center>
		
			<li class="sidebar-search">
				<div class="input-group custom-search-form">
					<input type="text" class="form-control" placeholder="Search...">
					<span class="input-group-btn">
						<button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
					</span>
				</div>
			  <!-- /input-group --> 
			</li>
                        
			<li> <a href="#"><img src="/img/icon01.png"  width="25" height="24" > จัดการทรัพย์สิน</a>
				<ul class="nav nav-second-level">
					<li><a href="/AssetInformations/index"><?php echo __('ข้อมูลทรัพย์สิน'); ?></a></li>
                                        <?php $currentUser = $this->Session->read('Auth.User');
						if ($currentUser['UserGroup']['m002'] == 'Y') {
						?>
					<li><a href="/AssetInformations/add"><?php echo __('เพิ่มข้อมูลทรัพย์สิน'); ?></a></li>
                                        <?php
						}
						?>
					<li><a href="/AssetInformations/report"><?php echo __('รายงานทรัพย์สิน'); ?></a></li>
				</ul>
			</li>
			<li> <a href="#"><img src="/img/icon02.png" width="25" height="24">นิติกรรมและสัญญา</a>
				<ul class="nav nav-second-level">
				<!--<li> <a href="#">xxxxxxxxxxx</a> </li>
				<li> <a href="#">xxxxxxxxxxx</a> </li>
				<li> <a href="#">xxxxxxxxxxx</a> </li>-->
				</ul>
			</li>
			<li> <a href="#"><img src="/img/icon03.png" width="25" height="23">บัญชีและการเงิน</a>
				<ul class="nav nav-second-level">
				<!--<li> <a href="#">xxxxxxxxxxx</a> </li>
				<li> <a href="#">xxxxxxxxxxx</a> </li>
				<li> <a href="#">xxxxxxxxxxx</a> </li>-->
				</ul>
			</li>
		</ul>
	</div>
</div>

<script type="text/javascript">
$("#btnSidebarSearch").click(function() {
	document.frmProductSearch.elements["data[Product][text_search]"].value = $("#txtSidebarSearch").val();
	document.frmProductSearch.action = "/Products/index";
	document.frmProductSearch.submit();
});
</script>