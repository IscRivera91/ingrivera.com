<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a  href="<?php echo RUTA_PROYECTO; ?>" class="brand-link">
      <div class="text-center">
        <span  class="brand-text text-center font-weight-light" <?php echo COLORBASE; ?>><b><?= NOMBRE_PROYECTO ?></b></span>
      </div>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    
          <?php 
            $menus =  new menus();
            echo $menus->crear_menu();
          ?>
    
        </ul>
        
      </nav>    
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>