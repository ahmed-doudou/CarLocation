<?php 
include 'header.php';
include 'inc/db.php';
 ?>

  <style type="text/css">
  	 .form{
            width: 50%;
            margin-left: 267px;
    }
    .fa-briefcase{
        float: right;
    }
    .door{
        float: right;
    }
  </style>
  

    <!--== Preloader Area Start ==-->
   
    <!--== Header Area End ==-->

    <!--== Page Title Area Start ==-->
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>About US</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

    <!--== About Page Content Start ==-->
    <section id="about-area" class="section-padding">
        <div class="container">
            <div class="row">
                      <?php  $query = "SELECT image,Manuelle_Ou_Automatique,Modele, marque, Nombre_de_Portes,Nombre_de_Place,Nom
                         FROM voiture
						 INNER JOIN ville
						 where voiture.idVille=ville.idVille ";
                                    $result = mysqli_query($con,$query);
                                    while ( $row = mysqli_fetch_assoc($result)) {
                                         ?>
        
        
      
  		<div class="col-lg-4 col-md-6 hat sedan">
            <div class="single-popular-car">
                <div class="p-car-thumbnails">
                    <a class="car-hover" href="assets/img/car/<?php echo $row["image"]?>">
                      <img src="assets/img/car/<?php echo $row["image"]?>" alt="JSOFT">
                   </a>
                </div>

                <div class="p-car-content">
                    <h3>
                        <a href="#"><?php echo $row["marque"] ?></a>
                        <span class="price"><i class="fa fa-tag"></i> $55/day</span>
                    </h3>

                    <h5><?php echo $row["Nom"] ?></h5>

                <div class="p-car-feature">
                    <i class="fa fa-users"> <b><?php echo $row["Nombre_de_Place"] ?></b></i>
                    <i class="fa fa-briefcase"> <b><?php echo $row["Nombre_de_Place"] ?></b></i><br>
                    <i class="kmh"><img src="speed.png" style="width:15px;height:15px"> <b>180KM/H</b></i>
                    <i class="door"><img src="car-door.png"  style="width: 15px;height: 15px"> <b><?php echo $row["Nombre_de_Portes"] ?></b></i><br><br>
                    <a href="#"><?php echo $row["Modele"] ?></a>
                    <a href="#"><b><?php echo $row["Manuelle_Ou_Automatique"] ?></b></a>
                    <a href="#">AIR CONDITION</a>
                </div><br>
                <a href="contract.php" class="book-now-btn">BOOK</a>
                
            </div>
        </div>
    </div>
<?php } ?>

            </div>
        </div>
    </section>
    <!--== About Page Content End ==-->
    
    <!--== Our Facility Content Start ==-->
    
    <!--== Our Facility Content End ==-->

    

    

<?php include 'footer.php'; ?>


