  
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
 
<label style="background-color: #D9EDF6;color: #F39C12;padding:2%;text-align:center;width: 100%;font-size: 180%; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4);">Registration For Alumni</label>

<!--Registration page-->
<div class="" style="background-color: #D9EDF6;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.6);">
    <div class="" style="background-color: #F0DADA;padding: 7%;margin-top: 2%;width: 40%;margin-left:32%;border-radius: 10%;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.6);">

       <form action="" method="post" style="padding: 5%;">
                <div class="form-group">
                  <label for="name" style="font-size: 150%;">USER ID</label>
                  <input type="text" name="userid" placeholder="Enter your id"  class="form-control" id="id">
                </div>

                <div class="form-group">
                  <label for="name" style="font-size: 150%;">USER NAME</label>
                  <input type="text" name="username" placeholder="Enter your name"  class="form-control" id="username">
                </div>
                <div class="form-group">
                  <label for="pwd" style="font-size: 150%;">PASSWORD</label>
                  <input type="password" name="password" placeholder="Enter your password" class="form-control" id="pwd">
                </div>
                 <div class="form-group">
                  <label for="name" style="font-size: 150%;">EMAIL</label>
                  <input type="text" name="username" placeholder="Enter your email"  class="form-control" id="email">
                </div>
                <div class="form-group">
                  <label for="gender" style="font-size: 150%;">GENDER:--</label>
                  <label style="font-size: 150%">
                        <input type="radio"  name="gender" value="male" checked > Male
                        <input type="radio"  name="gender" value="female" > Female
                  </label>
                </div>
                <div class="form-group">
                  <label for="pwd" style="font-size: 150%;">NID NUMBER</label>
                  <input type="text" name="nid" placeholder="Enter your NID" class="form-control" id="nid">
                </div>

                 <div class="form-group">
                  <label for="name" style="font-size: 150%;">DATE OF BIRTH</label>
                  <input type="date" name="date"   class="form-control" id="date">
                </div>
                <div class="form-group">
                  <label for="pwd" style="font-size: 150%;">ADDRESS</label>
                  <input type="text" name="adress" placeholder="Enter your address" class="form-control" id="">
                </div>
                <div class="form-group">
                   <label for="pwd" style="font-size: 150%;">Picture</label>
                   
                    
                            <img id="logo_preview" src="../images/no_image .png"><br><br> </label>                  
                            <label><input type="file" name="personal_image" id="spic" onchange="PreviewImage('personal_image', 'logo_preview')"><br><br>
                     
                </div>
                <button type="submit"  class="btn btn-info" style="width: 100%">Submit</button>
          </form>

    </div>
</div>
<!--Registration page end-->