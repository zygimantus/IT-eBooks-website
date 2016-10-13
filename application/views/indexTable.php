<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" context="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <meta name="description" content="">

    <title>Index Table</title>

    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">

    <script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap-table.min.js') ?>"></script>
</head>
<body>
<table id="table">
  <thead>
    <tr>
      <th data-field="ID">Name</th>
      <th data-field="Title">Name</th>
      <th data-field="Description">Name</th>
      <th data-field="isbn">ISBN</th>
      <th data-field="Image" data-formatter="imageFormatter">Image</th>
    </tr>
  </thead>
</table>
<script type="text/javascript">
  var somedata = <?php echo ($somedata); ?>;
  $('#table').bootstrapTable({
      data: somedata.Books
  });
  function imageFormatter() {
      return '<img src=\"' + arguments[0] + '\">';
  }
</script>
</body>
</html>
