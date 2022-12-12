<!-- Template obtained from https://freeetemplates.com/bootstrap-5-free-admin-dashboard-template-1/ -->


<!DOCTYPE html>
<html lang="en">
   <?php include('parts/metahead.php') ?>
   <body>
      <?php include('parts/header.php') ?>
      <?php include('parts/sidebar.php') ?>
      
      <main id="main" class="main">
         <?php include($content_path) ?>
      </main>
      
      <?php include('parts/footer.php') ?>
      <?php include('parts/scripts.php') ?>      
   </body>
</html> 