       <!-- Main Sidebar Container -->
       <aside class="main-sidebar sidebar-dark-primary elevation-4">
           <!-- Brand Logo -->
           <a href="#" class="brand-link text-center">
               <span class="brand-text font-weight-bold">PAMS</span>
           </a>

           <!-- Sidebar -->
           <div class="sidebar">
               <!-- Sidebar Menu -->
               <nav class="mt-2">
                   <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                       <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                       <!-- Query menu -->
                       <?php
                        $role_id = $this->session->userdata('role_id');
                        $querymenu = "SELECT user_menu.id , menu
                                        FROM user_menu JOIN user_access_menu
                                        ON user_menu.id = user_access_menu.menu_id
                                        WHERE user_access_menu.role_id = $role_id
                                        ORDER BY user_access_menu.menu_id ASC
                                        ";
                        $menu = $this->db->query($querymenu)->result_array();
                        ?>

                       <!-- Looping menu -->
                       <?php foreach ($menu as $m) :  ?>
                           <div class="nav-header">
                               <?= $m['menu'] ?>
                           </div>

                           <!-- Sub menu -->
                           <?php
                            $menuId = $m['id'];
                            $querySubMenu = "SELECT * FROM user_sub_menu 
                                             WHERE menu_id = $menuId 
                                             AND is_active = 1";
                            $subMenu = $this->db->query($querySubMenu)->result_array();
                            ?>

                           <?php foreach ($subMenu as $sm) : ?>
                               <li class="nav-item">
                                   <a href="<?= base_url($sm['url']); ?>" class="nav-link">
                                       <i class="<?= $sm['icon']; ?>"></i>
                                       <p>
                                           <?= $sm['title']; ?>
                                       </p>
                                   </a>
                               </li>
                           <?php endforeach; ?>

                       <?php endforeach; ?>

                       <li class="nav-item">
                           <a href="#" class="nav-link">
                               <i class="nav-icon fas fa-solid fa-users"></i>
                               <p>
                                   Donatur
                                   <i class="fas fa-angle-left right"></i>
                               </p>
                           </a>
                           <ul class="nav nav-treeview">
                               <li class="nav-item">
                                   <a href="#" class="nav-link">
                                       <i class="fas fa-user-plus nav-icon"></i>
                                       <p>Tambah Donatur</p>
                                   </a>
                               </li>
                           </ul>
                           <ul class="nav nav-treeview">
                               <li class="nav-item">
                                   <a href="#" class="nav-link">
                                       <i class="fas fa-user-plus nav-icon"></i>
                                       <p>Data Donatur</p>
                                   </a>
                               </li>
                           </ul>
                       </li>
                       <li class="nav-item">
                           <a href="#" class="nav-link">
                               <i class="nav-icon fas fa-box"></i>
                               <p>
                                   Donasi
                                   <i class="fas fa-angle-left right"></i>
                               </p>
                           </a>
                           <ul class="nav nav-treeview">
                               <li class="nav-item">
                                   <a href="#" class="nav-link">
                                       <i class="fas fa-money-bill-wave nav-icon"></i>
                                       <p>Donasi Tunai</p>
                                   </a>
                               </li>
                           </ul>
                           <ul class="nav nav-treeview">
                               <li class="nav-item">
                                   <a href="#" class="nav-link">
                                       <i class="nav-icon fas fa-box"></i>
                                       <p>Doasi Barang</p>
                                   </a>
                               </li>
                           </ul>
                       </li>
                       <li class="nav-item">
                           <a href="../widgets.html" class="nav-link">
                               <i class="nav-icon fas fa-file-invoice"></i>
                               <p>
                                   Laporan
                               </p>
                           </a>
                       </li>
                       <li class="nav-header">Pengaturan</li>
                       <li class="nav-item">
                           <a href="<?= base_url('user'); ?>" class="nav-link">
                               <i class="nav-icon fas fa-user"></i>
                               <p>
                                   Profil
                               </p>
                           </a>
                       </li>
                       <li class="nav-item">
                           <a href="<?= base_url('auth/logout'); ?>" class="nav-link active">
                               <i class="nav-icon fas fa-sign-out-alt"></i>
                               <p class="text">Keluar</p>
                           </a>
                       </li>
                   </ul>
               </nav>
               <!-- /.sidebar-menu -->
           </div>
           <!-- /.sidebar -->
       </aside>