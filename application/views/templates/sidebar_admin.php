<aside class="main-sidebar" >
  <section class="sidebar">

      <ul class="sidebar-menu" data-widget="tree">

        <li <?= $this->uri->segment(1) == 'home' ? 'class="active"' : '' ?> id="menu-baru">
          <a href="<?php echo base_url('home'); ?>" id="menu-baru-dalam">
            <div id="icon-menu">
              <i class="fas fa-home"></i>
            </div>
            <span>
              <div id="kata-menu">
                Home
              </div>
            </span>
          </a>
        </li>
        <li <?= $this->uri->segment(1) == 'pembina' ? 'class="active"' : '' ?> id="menu-baru">
          <a href="<?php echo base_url('pembina'); ?>" id="menu-baru-dalam">
            <div id="icon-menu">
              <i class="fas fa-user-friends"></i>
            </div>
            <span>
              <div id="kata-menu">
                Data Pembina
              </div>
            </span>
          </a>
        </li>
        <li <?= $this->uri->segment(1) == 'anggota' ? 'class="active"' : '' ?> id="menu-baru">
          <a href="<?php echo base_url('anggota'); ?>" id="menu-baru-dalam">
            <div id="icon-menu">
              <i class="fas fa-users"></i>
            </div>
            <span>
              <div id="kata-menu">
                Data Anggota
              </div>
            </span>
          </a>
        </li>
        <li <?= $this->uri->segment(1) == 'kegiatan' ? 'class="active"' : '' ?> id="menu-baru">
          <a href="<?php echo base_url('kegiatan'); ?>" id="menu-baru-dalam">
            <div id="icon-menu">
              <i class="fas fa-calendar-check"></i>
            </div>
            <span>
              <div id="kata-menu">
                Data Kegiatan
              </div>
            </span>
          </a>
        </li>
        <li <?= $this->uri->segment(1) == 'jadwal' ? 'class="active"' : '' ?> id="menu-baru">
          <a href="<?php echo base_url('jadwal'); ?>" id="menu-baru-dalam">
            <div id="icon-menu">
              <i class="fas fa-calendar-check"></i>
            </div>
            <span>
              <div id="kata-menu">
                Jadwal Pendaftaran
              </div>
            </span>
          </a>
        </li>
        <li <?= $this->uri->segment(1) == 'soal' ? 'class="active"' : '' ?> id="menu-baru">
          <a href="<?php echo base_url('soal'); ?>" id="menu-baru-dalam">
            <div id="icon-menu">
              <i class="fas fa-file-signature"></i>
            </div>
            <span>
              <div id="kata-menu">
                Data Soal
              </div>
            </span>
          </a>
        </li> 
        <li <?= $this->uri->segment(1) == 'pendaftaran' ? 'class="active"' : '' ?> id="menu-baru">
          <a href="<?php echo base_url('pendaftaran'); ?>" id="menu-baru-dalam">
            <div id="icon-menu">
              <i class="fas fa-clipboard-list"></i>
            </div>
            <span>
              <div id="kata-menu">
                Data Pendaftaran
              </div>
            </span>
          </a>
        </li>
        <li <?= $this->uri->segment(1) == 'hasil_tes' ? 'class="active"' : '' ?> id="menu-baru">
          <a href="<?php echo base_url('hasil_tes'); ?>" id="menu-baru-dalam">
            <div id="icon-menu">
              <i class="fas fa-tags"></i>
            </div>
            <span>
              <div id="kata-menu">
                Hasil Tes
              </div>
            </span>
          </a>
        </li>
        <li <?= $this->uri->segment(1) == 'user' ? 'class="active"' : '' ?> id="menu-baru">
          <a href="<?php echo base_url('user'); ?>" id="menu-baru-dalam">
            <div id="icon-menu">
              <i class="fas fa-users-cog"></i>
            </div>
            <span>
              <div id="kata-menu">
                Manajemen User
              </div>
            </span>
          </a>
        </li>    
        <li <?= $this->uri->segment(1) == 'logout' ? 'class="active"' : '' ?> id="menu-baru">
          <a href="<?php echo base_url('logout'); ?>" id="menu-baru-dalam">
            <div id="icon-menu">
              <i class="fas fa-power-off"></i>
            </div>
            <span>
              <div id="kata-menu">
                Logout
              </div>
            </span>
          </a>
        </li>     

      </ul>
    </section>
  </aside>
<div class="content-wrapper">