<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php echo link_tag('assets/css/style.css') ?>
<?php echo link_tag('assets/css/bootstrap.min.css') ?>
</head>

<body>
<h1 class="text-center">Welcome to Admin Panel</h1>
<h2 class="text-center">Add Employee</h2>
<?php echo form_open('admin_page_ctrl/submit'); ?>
  <div class="imgcontainer">
    <img src="<?php echo base_url()?>assets/img/img_avatar2.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <?php echo form_input(["type"=>"text","placeholder"=>"Enter Username","name"=>"name"]) ?>
    <?php echo form_error('name'); ?>
    <!-- <input type="text" placeholder="Enter Username" name="uname" required> -->

    <label for="psw"><b>Password</b></label>
    <!-- <input type="password" placeholder="Enter Password" name="pass" required> -->
    <?php echo form_password(["type"=>"password","placeholder"=>"Enter Password","name"=>"password"]) ?>
    <?php echo form_error('password'); ?>

   <?php echo form_submit(['value'=>'Register','class'=>'btn btn-primary']); ?>
    <?php echo form_reset(['name'=>'reset','value'=>'Reset','class'=>'btn btn-primary']); ?>
  </div>
</form>

</body>
</html>



