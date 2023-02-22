<?php 
@session_start();
if (!$_SESSION["UserID"]){ 

    Header("Location: form_login.php"); 

}else{ ?>
<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-green elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link bg-green">
      <img src="assets/dist/img/pwo8.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">PWO Product Seller </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <!--div class="image">
          <img src="assets/dist/img/pwo8.png" class="img-circle elevation-3" alt="User Image">
        </div-->
        <div class="info">
          <b>ID : <?php echo $_SESSION["UserID"];?></b>  
          <a href="user_detail_edits.php?IDu=<?php echo $_SESSION["UserID"]; ?>" class="d-block"><b>
            ชื่อผู้ใช้งาน : 
            <font color="blue">
            <?php echo $_SESSION["Firstname"];?></font></b></a><b>
            รหัสพนักงาน :  <?php echo $_SESSION["Idpass"];?>
          </b>

        </div>
      </div>

    
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <!-- nav-compact -->
        <ul class="nav nav-pills nav-sidebar nav-child-indent flex-column" data-widget="treeview" role="menu" data-accordion="false">
  


    
<li class="nav-header">เมนู</li>

          <li class="nav-item" >
            <a href="product.php" class="nav-link <?php if($menu=="product"){echo "active";} ?> ">
              <i class="nav-icon fas fa-solid fa-cart-plus"></i>
              <p> สั่งซื้อสินค้า </p>
            </a>
          </li>


           <li class="nav-item" >
            <a href="order_list.php" class="nav-link <?php if($menu=="order_list"){echo "active";} ?> ">
             <i class="nav-icon fas fa-regular fa-paste"></i>
              <p> รายการสั่งซื้อ </p>
            </a>
          </li>

          



<li ><hr></li>


        <li class="nav-item" >
            <a href="user_page.php" class="nav-link <?php if($menu=="user_page"){echo "active";} ?> ">
              <i class="nav-icon fas fa-solid fa-list"></i>
              <p> รายการสินค้า </p>
            </a>
          </li>
        
        <li class="nav-item" >
            <a href="insert_p.php" class="nav-link <?php if($menu=="insert_p"){echo "active";} ?> ">
              <i class="nav-icon fas fa-solid fa-plus"></i>
              <p> เพิ่ม สินค้า </p>
            </a>
          </li>


        <li class="nav-item" >
            <a href="add_product.php" class="nav-link <?php if($menu=="add_product"){echo "active";} ?> ">
              <i class="nav-icon fas fa-solid fa-pen"></i>
              <p> แก้ไข สินค้า </p>
            </a>
          </li>


<li ><hr></li>

          <li class="nav-item" >
            <a href="customer_list.php" class="nav-link <?php if($menu=="customer_list"){echo "active";} ?> ">
              <i class="nav-icon fas fa-solid fa-list"></i>
              <p> รายชื่อลูกค้า </p>
            </a>
          </li>

          <li class="nav-item" >
            <a href="insert_c.php" class="nav-link <?php if($menu=="insert_c"){echo "active";} ?> ">
              <i class="nav-icon fas fa-solid fa-plus"></i>
              <p> เพิ่ม ลูกค้า </p>
            </a>
          </li>

          <li class="nav-item" >
            <a href="customer_edit.php" class="nav-link <?php if($menu=="customer_edit"){echo "active";} ?> ">
              <i class="nav-icon fas fa-solid fa-pen"></i>
              <p> แก้ไข ลูกค้า </p>
            </a>
          </li>


<li ><hr></li>

             <li class="nav-item" >
            <a href="report_year.php" class="nav-link <?php if($menu=="report_year"){echo "active";} ?> ">
              <i class="nav-icon fas fa-solid fa-folder-open"></i>
              <p> ยอดขาย รายปี </p>
            </a>
          </li>

           <li class="nav-item" >
            <a href="report_month.php" class="nav-link <?php if($menu=="report_month"){echo "active";} ?> ">
              <i class="nav-icon fas fa-solid fa-folder-open"></i>
              <p> ยอดขาย รายเดือน </p>
            </a>
          </li>

          <li class="nav-item" >
            <a href="report_quater.php" class="nav-link <?php if($menu=="report_quater"){echo "active";} ?> ">
              <i class="nav-icon fas fa-solid fa-folder-open"></i>
              <p> ยอดขาย รายไตรมาส </p>
            </a>
          </li>

          <li class="nav-item" >
            <a href="report_SE.php" class="nav-link <?php if($menu=="report_SE"){echo "active";} ?> ">
              <i class="nav-icon fas fa-solid fa-folder-open"></i>
              <p> ยอดขาย ตามช่่วงเวลา </p>
            </a>
          </li>

         
    
      <div class="user-panel mt-2 pb-3 mb-2 d-flex">
  
      </div>
          <li class="nav-item">
            <a href="logout.php" class="nav-link text-danger">
              <i class="nav-icon fas fa-power-off"></i>
              <p>ออกจากระบบ</p>
            </a>
          </li>
  


          
        </ul>
      </nav>
      
      <!-- /.sidebar-menu -->
   

    </div>
    <!-- /.sidebar -->
  </aside>

  <?php }?>