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
  <div class="container">
    <h1>Index Table</h1>
    <?php
    $attributes = array('class' => 'navbar-form navbar-left', 'role' => 'search');
    echo form_open('IndexTable', $attributes);
    echo form_input(array('name'=>'search'));
    $attributes = array('class' => 'btn btn-primary');
    echo form_submit('search_submit','Submit', $attributes);
     ?>
    <table id="table" data-row-style="rowStyle">
      <thead>
        <tr>
          <th data-field="ID">ID</th>
          <th data-field="Title">Name</th>
          <th data-field="Description">Name</th>
          <th data-field="isbn" data-formatter="isbnFormatter">ISBN</th>
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
          return '<img src=\"' + arguments[0] + '\" width="150">';
      }
      function isbnFormatter() {
          return '<a target="_blank" class="test" href=\"https://openlibrary.org/api/books?bibkeys=ISBN:'
            + arguments[0] + '&callback=mycallback\">Open Library</a><br /><a target="_blank" data-toggle="popover" href=\"http://xisbn.worldcat.org/webservices/xid/isbn/' + arguments[0] + '?method=getEditions&format=json&fl=*\">WorldCat</a>';
      }
      function rowStyle(row, index) {
        var classes = ['active', 'success', 'info', 'warning', 'danger'];
        if (index % 2 === 0 && index / 2 < classes.length) {
            return {
                classes: classes[index / 2]
            };
        }
        return {};
      }
      $(".test").hover(function(){
         var link = $(this).context.href;

              $.ajax({
                  'type': 'GET',
                  'url': link,
                   dataType: 'jsonp',
                  'success': function (data) {
                        // alert(JSON.stringify(data));
                  }});
        }, function(){
          //This function is for unhover.
       });
       $(document).ready(function(){
    $('[data-toggle="popover"]').popover({
      trigger: 'hover',
        title: '<h3 class="custom-title"><span class="glyphicon glyphicon-info-sign"></span> Popover Info</h3>',
        content : "<p>This is a <em>simple example</em> demonstrating how to insert HTML code inside <mark><strong>Bootstrap popover</strong></mark>.</p>",
        html: true
    });
});
    </script>
  </div>
</body>
</html>
