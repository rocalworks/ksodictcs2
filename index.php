<?php 

$current_page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';

$content_path = 'pages/' . $current_page . '.php';
include('common/master.php');
?>