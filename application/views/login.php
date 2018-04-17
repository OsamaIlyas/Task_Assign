<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php echo link_tag('assets/css/style.css') ?>
<?php echo link_tag('assets/css/bootstrap.min.css') ?>
</head>

<body>

<h2 class="text-center">Login Form</h2>
<?php echo form_open('login_ctrl/admin_login'); ?>
  <div class="imgcontainer">
    <img src="<?php echo base_url()?>assets/img/img_avatar2.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
     <?php echo form_input(["type"=>"text","placeholder"=>"Enter Username","name"=>"uname",'value'=>set_value('uname')]) ?> 
    <?php echo form_error('uname'); ?> 
    
    <!-- <input type="text" placeholder="Enter Username" name="uname" required> -->

    <label for="psw"><b>Password</b></label>
    <!-- <input type="password" placeholder="Enter Password" name="pass" required> -->
    <?php echo form_password(["type"=>"password","placeholder"=>"Enter Password","name"=>"pass"]) ?>
    <?php echo form_error('pass'); ?>
   <?php
    // echo validation_errors();
    echo 'User name or Password is not coreect' . "<br>";
     ?>

   <?php echo form_submit(['name'=>'submit','value'=>'Login','class'=>'btn btn-primary']); ?>
    <?php echo form_reset(['name'=>'reset','value'=>'Reset','class'=>'btn btn-primary']); ?>
  </div>
</form>

</body>
</html>
