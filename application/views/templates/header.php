<!DOCTYPE html>
<html lang="en">

<head>
  <title><?php echo $title ?> - SMKN 2 Kota Bekasi</title>
  <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 11]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
  <!-- Meta -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="Pemilihan Ketua OSIS SMKN 2 Kota Bekasi" name="descriptison">
  <meta content="Pilkasis" name="keywords">

  <link href="<?php echo base_url('assets/front/') ?>img/logoo.png" rel="icon">
  <link href="<?php echo base_url('assets/front/') ?>img/logoo.png" rel="apple-touch-icon">

  <!-- vendor css -->
  <link rel="stylesheet" href="<?php echo base_url('assets/back/') ?>assets/css/style.css">

  <!-- Sweet Alert 2 -->

  <link rel="stylesheet" href="<?php echo base_url('assets/front/') ?>css/sweetalert2.min.css">
  <script src="<?php echo base_url('assets/front/') ?>js/sweetalert2.all.min.js"></script>

  <!-- DataTable -->
  <link href="<?= base_url('assets/front/'); ?>css/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/front/'); ?>css/buttons.bootstrap4.min.css" rel="stylesheet">

</head>

<body class="">
  <!-- [ Pre-loader ] start -->
  <div class="loader-bg">
    <div class="loader-track">
      <div class="loader-fill"></div>
    </div>
  </div>
  <!-- [ Pre-loader ] End -->
  <!-- [ navigation menu ] start -->
  <nav class="pcoded-navbar menu-light ">
    <div class="navbar-wrapper  ">
      <div class="navbar-content scroll-div ">

        <div class="">
          <div class="main-menu-header">
            <img class="img-radius" src="<?php echo base_url('assets/back/') ?>assets/images/<?php echo $user['image'] ?>" alt="User-Profile-Image">
            <div class="user-details">
              <div id="more-details" class="mt-3"><a href="<?php echo base_url('profile') ?>"><?php echo $user['name'] ?></a></div>
            </div>
          </div>

        </div>

        <ul class="nav pcoded-inner-navbar ">

          <!-- query menu -->
          <?php
          $role_id = $this->session->userdata('role_id');

          $queryMenu = "  SELECT `user_menu`.`id`, `menu` 
                    FROM `user_menu` JOIN `user_access_menu` 
                      ON `user_menu`.`id` = `user_access_menu`.`menu_id` 
                  WHERE `user_access_menu`.`role_id` = $role_id
                ORDER BY `user_access_menu`.`menu_id` ASC";

          $menu = $this->db->query($queryMenu)->result_array();
          ?>

          <!-- looping menu -->
          <?php foreach ($menu as $m) : ?>
            <li class="nav-item pcoded-menu-caption mt-2">
              <label>
                <?= $m['menu']; ?>
              </label>
            </li>

            <!-- siapkan submenu sesuai menu -->

            <?php

            $menu_id = $m['id'];
            $querySubmenu = "SELECT * FROM user_sub_menu WHERE menu_id = $menu_id AND is_active = 1 ";

            $subMenu = $this->db->query($querySubmenu)->result_array();

            ?>

            <?php foreach ($subMenu as $sm) : ?>
              <?php if ($sm['is_drop'] != '1') : ?>
                <li class="nav-item">
                  <a href="<?= base_url($sm['url']) ?>" class="nav-link "><span class="pcoded-micon"><i class="<?= $sm['icon']; ?>"></i></span><span class="pcoded-mtext"><?= $sm['title']; ?></span></a>
                </li>
              <?php endif; ?>
            <?php endforeach ?>

            <!-- Menyiapkan sub Menu Drop -->
            <?php if ($sm['is_drop'] == '1') : ?>
              <!-- Query Sub Menu Drop -->
              <?php
              $drop_id = $sm['id'];
              $queryMenu = "  SELECT `user_menu_drop`.`sub_menu_id`, `drop_name`, `link` 
                    FROM `user_menu_drop` JOIN `user_sub_menu` 
                      ON `user_menu_drop`.`sub_menu_id` = `user_sub_menu`.`id` 
                    WHERE `user_menu_drop`.`sub_menu_id` = $drop_id
                  ";

              $drop_menu = $this->db->query($queryMenu)->result_array();
              ?>
              <!-- Looping Sub Menu Drop -->
              <li class="nav-item pcoded-hasmenu">
                <a href="#" class="nav-link "><span class="pcoded-micon"><i class="<?= $sm['icon']; ?>"></i></span><span class="pcoded-mtext"><?= $sm['title']; ?></span></a>
                <ul class="pcoded-submenu">
                  <?php foreach ($drop_menu as $dm) : ?>
                    <li><a href="<?= base_url($dm['link']); ?>"><?= $dm['drop_name']; ?></a></li>
                  <?php endforeach; ?>
                </ul>
              </li>
            <?php endif; ?>
          <?php endforeach ?>
          <li class="nav-item">
            <a href="<?php echo base_url('auth/logout') ?>" class="nav-link tombol-logout " ><span class="pcoded-micon "><i class="feather icon-log-out"></i></span><span class="pcoded-mtext">Logout</span></a>
          </li>

        </ul>



      </div>
    </div>
  </nav>
  <!-- [ navigation menu ] end -->
  <!-- [ Header ] start -->
  <header class="navbar pcoded-header navbar-expand-lg navbar-light header-blue">


    <div class="m-header">
      <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
      <a href="#!" class="b-brand">

      </a>
      <a href="#!" class="mob-toggler">
        <i class="feather icon-more-vertical"></i>
      </a>
    </div>
    <div class="collapse navbar-collapse">

      <ul class="navbar-nav ml-auto">
        <li>
          <div class="dropdown">
            <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="icon feather icon-bell"></i></a>
            <div class="dropdown-menu dropdown-menu-right notification">
              <div class="noti-head">
                <h6 class="d-inline-block m-b-0">Notifications</h6>

              </div>
              <ul class="noti-body">

                <li class="notification">
                  <div class="media">
                    <img class="img-radius" src="<?php echo base_url('assets/front/') ?>img/logoo.png" alt="Generic placeholder image">
                    <div class="media-body">
                      <p>Selamat datang diaplikasi pemilihan ketua OSIS SMKN 2 Kota Bekasi</p>
                      <small class="text-muted">Administrator</small>
                    </div>
                  </div>
                </li>
                <li class="notification">
                  <div class="media">
                    <img class="img-radius" src="<?php echo base_url('assets/front/') ?>img/logoo.png" alt="Generic placeholder image">
                    <div class="media-body">
                      <p>Silahkan gunakan hak pilih kalian sebaik dan sebijak mungkin</p>
                      <small class="text-muted">Administrator</small>
                    </div>
                  </div>
                </li>

              </ul>

              <div class="noti-footer">
                <a href="#!">Close</a>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="dropdown drp-user">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="feather icon-user"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right profile-notification">
              <div class="pro-head">
                <img src="<?php echo base_url('assets/back/') ?>assets/images/<?php echo $user['image'] ?>" class="img-radius" alt="User-Profile-Image">
                <span><?php echo $user['name'] ?></span>
                <a href="<?php echo base_url('auth/logout') ?>" class="dud-logout tombol-logout" title="Logout">
                  <i class="feather icon-log-out"></i>
                </a>
              </div>
              <ul class="pro-body">
                <li><a href="<?php echo base_url('profile') ?>" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li>
                <li><a href="<?php echo base_url('auth/logout') ?>" class="dropdown-item tombol-logout"><i class="feather icon-lock"></i> Log Out</a></li>
              </ul>
            </div>
          </div>
        </li>
      </ul>
    </div>


  </header>
  <!-- [ Header ] end -->