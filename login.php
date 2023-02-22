<?php
@ob_start();
@session_start();
        if(isset($_REQUEST['Username'])){
				
                  include 'config.php';
				
                  $Username = $_REQUEST['Username'];
                  $Password = $_REQUEST['Password'];

                  $sql="SELECT * FROM user Where Username='".$Username."' and Password='".$Password."' ";

                  $result = mysqli_query($conn,$sql);
				
                  if(mysqli_num_rows($result)==1){

                      $row = mysqli_fetch_array($result);

                  $_SESSION["UserID"]     = $row["IDu"];
                  $_SESSION["User"]       = $row["Firstname"]." ".$row["Lastname"];

                  $_SESSION["Firstname"]  = $row["Firstname"];
                  $_SESSION["Userlevel"]  = $row["Userlevel"];
                  $_SESSION["Idpass"]     = $row["Idpass"];

                  $_SESSION["Office"]     = $row["Office"];
                  $_SESSION["Partwork"]   = $row["Partwork"];
                  $_SESSION["Work"]       = $row["Work"];
                      
                     

                      if ($_SESSION["Userlevel"] == "1" ){  


                        $sql1 = "UPDATE user SET Status = '1' , Date_sta = NOW() WHERE IDu = '".$_SESSION["UserID"]."'";
                        $result = mysqli_query($conn,$sql1);

                        Header("Location: ../productseller.pwo.go.th/user_list.php");    
                        /*แอดมิน*/

                      }
                      if ($_SESSION["Userlevel"] == "2" ){  

                        $sql1 = "UPDATE user SET Status = '1' , Date_sta = NOW() WHERE IDu = '".$_SESSION["UserID"]."'";
                        $result = mysqli_query($conn,$sql1);

                        Header("Location: ../productseller.pwo.go.th/product.php");                    
                        /*ลูกจ้าง*/

                      }
                      if ($_SESSION["Userlevel"] == "3" || "5" || "6" ){  

                        $sql1 = "UPDATE user SET Status = '1' , Date_sta = NOW() WHERE IDu = '".$_SESSION["UserID"]."'";
                        $result = mysqli_query($conn,$sql1);

                        Header("Location: ../productseller.pwo.go.th/product.php"); 
                        /*พนักงาน*/

                      }
                       if ($_SESSION["Userlevel"] == "4" ){  

                       echo "<script>";
                        echo "alert(\" ERROR ( USE-R-LEV-EL-04-00004PAGE )\");"; 
                        echo "alert(\"ถูกระงับการใช้งาน กรุณาติดต่อ สทด. สงพท. \");"; 
                        echo "window.history.back()";
                       echo "</script>";

                      }
                   

                  }else{
                    echo "<script>";
                        echo "alert(\" Username OR Password WRONG  !!!\");"; 
                        echo "window.history.back()";
                    echo "</script>";
                   
                  }
        }else{
             Header("Location: form_login.php"); 
        }
        
      ?>  

