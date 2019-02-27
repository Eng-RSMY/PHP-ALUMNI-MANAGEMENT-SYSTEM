    <link rel="stylesheet" href="../plugins/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/footer.css"/>  
    <style>
        .fa:hover {
            opacity: 0.9;
        }
    </style>
   
        <link rel="stylesheet" href="../css/bootstrap4/bootstrap.min.css"/>      
        <link rel="stylesheet" href="~/css/site.min.css" asp-append-version="true" />

       <!--side nav css--> 
    <style>
        #mySidenav a 
                    {
                    position: absolute;left: -80px;transition: 0.3s;padding: 15px;width: 105px;text-decoration:none;font-size: 20px;color: white;border-radius: 0 5px 5px 0;
                    }
        #mySidenav a:hover {
                            left: 0;
                            }
    </style>
    
 <!--side nav css end--> 

    <div class="socal_bar" style="top:200px;position: fixed;" >
        <div id="mySidenav" class="sidenav">

            <a href="#" id="about" style="top: 20px;background-color: #4CAF50;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4);">Facebook</a>
            <a href="#" id="blog" style="top: 80px;background-color: #2196F3;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4);">Google</a>
            <a href="#" id="projects" style="top: 140px;background-color: #f44336;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4);">YouTube</a>
            <a href="#" id="contact" style="top: 200px;background-color: #555;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4);">Linkedin</a>
        </div>
    </div>
            <hr />
           
            <footer style="background-color: #ECEFF1;">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-2" style="margin-left:10%">
                           <div class="" style="margin-top: 20%;">
                                <?php 
                                    include "Footer_card/footer_card1.php";
                                ?>
                            </div>
                        </div>
                        <div class="col-lg-2" style="margin-left:5%">
                            <div class="" style="margin-top: 20%;">
                                <?php 
                                    include "Footer_card/footer_card2.php";
                                ?>
                            </div>
                        </div>
                        
                        <div class="col-lg-2" style="margin-left:5%">
                            <div class="" style="margin-top: 20%;">
                                <?php 
                                    include "Footer_card/footer_card3.php";
                                ?>
                            </div>
                        </div>
                        <div class="col-lg-2" style="margin-left:5%">
                            <div class="" style="margin-top: 20%;">
                                <?php 
                                    include "Footer_card/footer_card4.php";
                                ?>
                            </div>
                        </div>
                        </div>


                    <hr />
                        <p>
                            <center>
                                <a href="#" class="fa fa-facebook" style=" background:#59C1F3;color: #ffffff; padding: 20px;font-size: 30px;width: 70px;text-decoration: none;margin: 5px 2px;border-radius: 50%;box-shadow: 0 8px 8px 0 rgba(0, 0, 0, 0.4);"></a>
                                <a href="#" class="fa fa-twitter" style=" background:#59C1F3;color: #ffffff ; padding: 20px;font-size: 30px;width: 70px;text-decoration: none;margin: 5px 2px;border-radius: 50%;box-shadow: 0 8px 8px 0 rgba(0, 0, 0, 0.4);"></a>
                                <a href="#" class="fa fa-google" style=" background:#59C1F3;color: #ffffff ; padding: 20px;font-size: 30px;width: 70px;text-decoration: none;margin: 5px 2px;border-radius: 50%;box-shadow: 0 8px 8px 0 rgba(0, 0, 0, 0.4);"></a>
                                <a href="#" class="fa fa-linkedin" style=" background:#59C1F3;color: #ffffff ; padding: 20px;font-size: 30px;width: 70px;text-decoration: none;margin: 5px 2px;border-radius: 50%;box-shadow: 0 8px 8px 0 rgba(0, 0, 0, 0.4);"></a>
                                <a href="#" class="fa fa-youtube" style=" background:#59C1F3;color: #ffffff ; padding: 20px;font-size: 30px;width: 70px;text-decoration: none;margin: 5px 2px;border-radius: 50%;box-shadow: 0 8px 8px 0 rgba(0, 0, 0, 0.4);"></a>
                            </center>
                        </p>
                    <hr />
                        
                            <h4 >
                                <center>Copyright &copy; <?php echo date("Y");?> <i class="fa fa-heart" style="color: red;"></i>EasyLearn.com<i class="fa fa-heart" style="color: red;"s></i></center>
                            </h4>
                        
                    </div>
            </footer>
