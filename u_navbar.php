  <nav class="main-header  navbar navbar-expand navbar-green navbar-dark">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>

      <li class="nav-item">
        <a class="nav-link <?php if ($menu == "user_page"){echo "active";} ?>"  href="user_page.php"><i class="fas fa-home"></i> Home</a></li>

        <?php if ($_SESSION["Userlevel"] == 1 ) { ?>
  


          <li class="nav-item" >
            <a href="user_list.php" class="nav-link <?php if($menu=="user_list"){echo "active";} ?> ">
              <i class="nav-icon fas fa-solid fa-users"> รายชื่ผู้ใช้งาน</i>
            </a>
          </li>

          <li class="nav-item" >
            <a href="form_register.php" class="nav-link <?php if($menu=="form_register"){echo "active";} ?> ">
              <i class="nav-icon fas fa-solid fa-plus"> เพิ่มผู้ใช้งาน</i>
            </a>
          </li>

           <li class="nav-item" >
            <a href="adm_edit_user.php" class="nav-link <?php if($menu=="adm_edit_user"){echo "active";} ?> ">
              <i class="nav-icon fas fa-solid fa-pen"> แก้ไขผู้ใช้งาน</i>
            </a>
          </li>

          <li class="nav-item" >
            <a href="view_log.php" class="nav-link <?php if($menu=="view_log"){echo "active";} ?> ">
              <i class="nav-icon fas fa-solid fa-folder-open"> Logarithm</i>
            </a>
          </li>

    <?php } ?>  
    
      
    </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
        <a href="logout.php" class="nav-link ">
          <i class="fa fa-power-off"></i> Logout
        </a>
        
      </li>
    </ul>
  </nav>

  <!-- /.navbar -->