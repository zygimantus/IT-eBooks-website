<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" context="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <meta name="description" content="">

    <title>Index Page</title>

    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">

    <script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap-table.min.js') ?>"></script>
</head>
<body>
<table id="table">
</table>
<script type="text/javascript">
var somedata = <?php echo ($somedata); ?>;
$('#table').bootstrapTable({
    columns: [{
        field: 'ID',
        title: 'ID'
    }, {
        field: 'Title',
        title: 'Title'
    }, {
        field: 'Description',
        title: 'Description'
    }, {
        field: 'isbn',
        title: 'ISBN'
    }, {
        field: 'Image',
        title: 'Image'
    }],
    data: somedata.Books
});
</script>
</body>
</html>
