<div class="row">
	<div class="col-md-4 col-md-offset-4">
	
			<div class="panel-heading">
					<div class="login-panel login-default panel-default">
				 <center><img src="/img/logo_login.png" width=60% hight=60% ></center>
				
			
			<div class="panel-body">
				<?php echo $this->Form->create('User'); ?>
				<div class="users form">

					<fieldset>
						<?php
						echo $this->Form->input('username', array('label' => false, "placeholder" => "ชื่อผู้ใช้"));
						echo $this->Form->input('password', array('label' => false, "placeholder" => "รหัสผ่าน"));
						?>
					</fieldset>
					       <div class="checkbox">
                                    <label>
                                        <input name="จดจำชื่อผู้ใช้" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
					<?php echo $this->Form->button(__('เข้าสู่ระบบ'), array('type' => 'submit', 'class' => 'btn btn-lg btn-success btn-block')); ?>
					<?php echo $this->Form->end(); ?>
				</div>
			</div>
			</div>
		</div>
	</div>
</div>