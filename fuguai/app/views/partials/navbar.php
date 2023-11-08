 <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark ">
     <!-- Navbar Brand-->
     <a class="navbar-brand ps-3" href="">TEMUAN RMPM</a>
     <!-- Sidebar Toggle-->
     <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0 " id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
     <!-- Navbar-->
 </nav>
 <div id="layoutSidenav">
     <div id="layoutSidenav_nav">
         <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
             <div class="sb-sidenav-menu">
                 <div class="nav">

                     <a class="nav-link <?= $data['nav-active'] == 'home' ? 'active' : '' ?>" href="<?= base_url ?>/Home">
                         <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                         Home
                     </a>

                     <a class="nav-link <?= $data['nav-active'] == 'inputfuguai' ? 'active' : '' ?>" href=" <?= base_url ?>/Inputfuguai">
                         <div class="sb-nav-link-icon"><i class="fas fa-upload"></i></div>
                         Input Temuan
                     </a>
                     <a class="nav-link collapsed  <?= $data['nav-active'] == 'fuguai' ? 'active' : '' ?>" href=" #" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                         <div class="sb-nav-link-icon"><i class="fas fa-folder-open"></i></div>
                         Temuan
                         <div class="sb-sidenav-collapse-arrow"><i class="fas fa-arrow-circle-down"></i></div>
                     </a>
                     <div class="collapse <?= $data['nav-active'] == 'fuguai' ? 'show' : '' ?>" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                         <nav class="sb-sidenav-menu-nested nav">
                             <a class="nav-link <?= isset($data['nav-active-child']) && $data['nav-active-child'] == 'inboundrm' ? 'active' : '' ?>" href="<?= base_url ?>/Inboundrm">Inbound RM</a>
                             <a class="nav-link <?= isset($data['nav-active-child']) && $data['nav-active-child'] == 'inboundpm' ? 'active' : '' ?>" href="<?= base_url ?>/Inboundpm">Inbound PM</a>
                             <a class="nav-link <?= isset($data['nav-active-child']) && $data['nav-active-child'] == 'outboundrmpm' ? 'active' : '' ?>" href="<?= base_url ?>/Outboundrmpm">Outbound RMPM</a>
                             <a class="nav-link <?= isset($data['nav-active-child']) && $data['nav-active-child'] == 'inventory' ? 'active' : '' ?>" href="<?= base_url ?>/Inventory">Inventory RMPM</a>
                         </nav>
                     </div>
                     <a class="nav-link <?= $data['nav-active'] == 'allfuguai' ? 'active' : '' ?>" href="<?= base_url ?>/Allfuguai">
                         <div class="sb-nav-link-icon"><i class="fas fa-hard-drive"></i></div>
                         All Temuan
                     </a>
         </nav>
     </div>