<?php
require_once('heading_html.php');
require_once('../model/Services.php');

?>




<div class="wrapper fadeInDown">
<table class="table">
          <tbody>
              <h1><i class="glyphicon glyphicon-plus"></i><b> Liste Vaccinated</b></h1>
              <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Date</th>
      <th scope="col">User</th>
      <th scope="col">Id vaccin</th>
    </tr>
  </thead>
  <tbody>
      <?php  showvacciateds();?>
    
    
  </tbody>
</table>
          </tbody>
       </table>