<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php echo link_tag('assets/css/style.css') ?>
<?php echo link_tag('assets/css/bootstrap.min.css') ?>
</head>

<body>
<div class="container">
<div class="row">
<div class="col-sm-8">
<?php foreach($list as $l) { ?>
<table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Password</th>
      </tr>
    </thead>
    <tbody>
      <tr>
      <td><?php echo $l->id; ?> </td>
        <td><?php echo $l->name; ?> </td>
        <td><?Php echo $l->password; ?></td>
      </tr>
    </tbody>
  </table>
<?php } ?>
</div>
<div class="col-sm-4">
<form action="">

<input type="text" placeholder="Enter name">
<textarea name="" id="" cols="30" rows="10"></textarea>
<button type="button" class="btn btn-primary">Send</button>
</form>
</div>


</div>
</div>
</body>
</html>



