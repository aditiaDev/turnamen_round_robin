    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        
        <li class="nav-item">
          <a href="<?php echo base_url("home")?>" class="nav-link">
            <i class="nav-icon fas fa-home"></i>
            <p>
              Home
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-table"></i>
            <p>
              Data Master
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?php echo base_url("user/")?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Users</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url("event/")?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Event</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url("team/")?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Team</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url("peserta/")?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Peserta</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url("grup/")?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Grup</p>
              </a>
            </li>
          </ul>
        </li>
        
        <li class="nav-header">PERTANDINGAN</li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-calendar-alt"></i>
            <p>
              Jadwal Pertandingan
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?php echo base_url("jadwal/")?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Atur Jadwal Grup</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="?page=jadwal&amp;set=grup" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Jadwal Grup</p>
              </a>
            </li>
            
          </ul>
        </li>

        <li class="nav-item">
          <a href="<?php echo base_url("login/logout")?>" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>
              Sign Out
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>