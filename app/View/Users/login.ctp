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
                        echo $this->Form->input('username', array('label' => false, 'onkeypress'=>'validate(event)' , "placeholder" => "ชื่อผู้ใช้"));
                        echo $this->Form->input('password', array('label' => false, 'onkeypress'=>'validate(event)',"maxlength"=>"16    ", "placeholder" => "รหัสผ่าน"));
                        ?>
                        </fieldset> 
                        <?php echo $this->Form->button(__('เข้าสู่ระบบ'), array('type' => 'submit', 'class' => 'btn btn-lg btn-success btn-block')); ?>
                        <?php echo $this->Form->end(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript"> function validate(evt) {
        var theEvent = evt || window.event;
        var key = theEvent.keyCode || theEvent.which;
        key = String.fromCharCode(key);
        var regex = /^[a-z]+[a-z0-9]*$|[0-9]|[\t]|[\b]/i;
        if (!regex.test(key)) {
            theEvent.returnValue = false;
            if (theEvent.preventDefault)
                theEvent.preventDefault();
        }
    }
    $("#UserPassword").keypress(function (e) {
        if (e.which == 13) {
            $("#UserLoginForm").submit();
        }
    });
</script>