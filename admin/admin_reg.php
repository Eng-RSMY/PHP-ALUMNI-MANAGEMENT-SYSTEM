  <?php 
  require "../function/dbconfig.php";
  require_once "../function/adminfunction.php";
  $user = new admin();
 ?>

<div>
      <?php 
            include "admin_top.php";
       ?>
</div>

<script>
    function PreviewImage(upname, prv_id) {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementsByName(upname)[0].files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById(prv_id).src = oFREvent.target.result;
        };
    };
  
</script>


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 
<label style="background-color: #D9EDF6;color: #F39C12;padding:2%;text-align:center;width: 100%;font-size: 180%; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4);">Registration For Admin</label>

<!--Registration page-->
<div class="" style="background-color: #F8EFF2;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.6);">
    <div class="" style="background-color: #F9FAFC;padding: 7%;margin-top: 2%;width: 40%;margin-left:32%;border-radius: 10%;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.6);">

      <div  class="msg">
       <?php 
            if($_SERVER['REQUEST_METHOD'] == "POST"){
              // image code.....
              function guid() {
                 if (function_exists('com_create_guid')) {
                      return com_create_guid();
                    } else {
                      mt_srand((double) microtime() * 10000); //optional for php 4.2.0 and up.
                      $charid = strtoupper(md5(uniqid(rand(), true)));
                      $hyphen = chr(45); // "-"
                      $uuid = chr(123)// "{"
                          . substr($charid, 0, 8) . $hyphen
                          . substr($charid, 8, 4) . $hyphen
                          . substr($charid, 12, 4) . $hyphen
                          . substr($charid, 16, 4) . $hyphen
                          . substr($charid, 20, 12)
                          . chr(125); // "}"
                      return $uuid;
                    }
                }
          
                
                if($_FILES["personal_image"]["name"])
                {
                    $path_parts = pathinfo($_FILES["personal_image"]["name"]);
                          $ext = $path_parts['extension'];
                          $fileName = trim(guid(), '{}') . '.' . $ext;
                }
                else

                move_uploaded_file($_FILES['personal_image']['tmp_name'], "dist/img/$fileName");
              //end image code..........

              $username   = $_POST['username'];
              $password   = $_POST['password'];
              $fileName   = $_POST['personal_image'];

              if (empty($username) or empty($password)) {
                echo "<p style='color:red;text-align:center'>Field Must Not Be Empty</p>";
                
              }else{

                $admin_reg = $user->admin_registration($username,$password,$fileName);
              
              if($admin_reg){
                echo "<h3 style='color:green;margin:0;padding:0;text-align:center'>Registration Successfully</h3>";
              }else{
                echo "<p style='color:red;text-align:center'>Error..your Username is Already exists</p>";
              }
            }
          }
        ?>
        
      </div>

       <form action="" method="post" style="padding: 5%;">
               

                <div class="form-group">
                  <label for="name" style="font-size: 150%;">USER NAME</label>
                  <input type="text" name="username" placeholder="Enter your name"  class="form-control" id="username">
                </div>
                <div class="form-group">
                  <label for="pwd" style="font-size: 150%;">PASSWORD</label>
                  <input type="password" name="password" placeholder="Enter your password" class="form-control" id="pwd"> 
                  </div>                
                <div class="form-group">
                   <label for="pwd" style="font-size: 150%;">Picture</label>
                      <img id="logo_preview" src="../images/no_image .png"><br><br> </label>                  
                      <input type="file" name="personal_image" id="spic" onchange="PreviewImage('personal_image', 'logo_preview')"><br><br>
                     
                </div>
                <button type="submit"  class="btn btn-info" style="width: 100%">Submit</button>
          </form>

    </div>
</div>