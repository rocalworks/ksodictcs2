
<?php $page = isset($_GET['page']) ? $_GET['page'] : 'dashboard'; // Catch undefined array key ?>

<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item"> 
            <a class="nav-link <?php echo $page == 'dashboard' ? '' : 'collapsed' ?>" href="<?php echo 'index.php'; ?>"> 
                <i class="bi bi-grid"></i> <span>Dashboard</span> 
            </a>
        </li>
        <li class="nav-item"> 
            <a class="nav-link <?php echo $page == 'participants' ? '' : 'collapsed' ?>" href="<?php echo 'index.php?page=participants'; ?>"> 
                <i class="bi bi-person"></i> <span>Participants</span> 
            </a>
        </li>
    </ul>
</aside>