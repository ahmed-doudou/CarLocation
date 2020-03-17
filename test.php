<?php include 'header.php'; ?><!--== Testimonials Area Start ==-->
   <div class="main">

        <div class="container">
            <h2>SIGN UP OFFICE EMPLYEE ACCOUNT</h2>
            <form method="POST" id="signup-form" class="signup-form">
                    <h3>
                        <span class="icon"><i class="ti-user"></i></span>
                        <span class="title_text">Personal</span>
                    </h3>
                    <fieldset>
                        <legend>
                            <span class="step-heading">Personal Informaltion: </span>
                            <span class="step-number">Step 1 / 4</span>
                        </legend>
                        <div class="form-group">
                            <label for="first_name" class="form-label required">First name</label>
                            <input type="text" name="first_name" id="first_name" />
                        </div>

                        <div class="form-group">
                            <label for="last_name" class="form-label required">Last name</label>
                            <input type="text" name="last_name" id="last_name" />
                        </div>

                        <div class="form-row">
                            <div class="form-date">
                                <label for="birth_date" class="form-label">Date of birth</label>
                                <div class="form-date-group">
                                    <div class="form-date-item">
                                        <select id="birth_date" name="birth_date"></select>
                                        <span class="select-icon"><i class="ti-angle-down"></i></span>
                                    </div>
                                    <div class="form-date-item">
                                        <select id="birth_month" name="birth_month"></select>
                                        <span class="select-icon"><i class="ti-angle-down"></i></span>
                                    </div>
                                    <div class="form-date-item">
                                        <select id="birth_year" name="birth_year"></select>
                                        <span class="select-icon"><i class="ti-angle-down"></i></span>
                                    </div>
                                </div>
                            </div>
    
                            <div class="form-select">
                                <label for="gender" class="form-label">Gender</label>
                                <div class="select-list">
                                    <select name="gender" id="gender">
                                        <option value="">Male</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="user_name" class="form-label required">User name</label>
                            <input type="text" name="user_name" id="user_name" />
                        </div>

                        <div class="form-group">
                            <label for="password" class="form-label required">Password</label>
                            <input type="password" name="password" id="password" />
                        </div>
                    </fieldset>

                    <h3>
                        <span class="icon"><i class="ti-email"></i></span>
                        <span class="title_text">Contact</span>
                    </h3>
                    <fieldset>
                        <legend>
                            <span class="step-heading">Contact Informaltion: </span>
                            <span class="step-number">Step 2 / 4</span>
                        </legend>
                        <div class="form-group">
                            <label for="email" class="form-label required">Email</label>
                            <input type="email" name="email" id="email" />
                        </div>

                        <div class="form-group">
                            <label for="phone" class="form-label required">Phone</label>
                            <input type="number" name="phone" id="phone" />
                        </div>

                        <div class="form-group">
                            <label for="address" class="form-label required">Address</label>
                            <input type="text" name="address" id="address" />
                        </div>

                        <div class="form-select">
                            <label for="country" class="form-label">Country</label>
                            <div class="select-list">
                                <select name="country" id="country">
                                    <option value="">Australia</option>
                                    <option value="Australia">Australia</option>
                                    <option value="USA">America</option>
                                </select>
                            </div>
                        </div>
                    </fieldset>

                    <!-- <h3>
                        <span class="icon"><i class="ti-star"></i></span>
                        <span class="title_text">Offical</span>
                    </h3>
                    <fieldset>
                        <legend>
                            <span class="step-heading">Offical Informaltion: </span>
                            <span class="step-number">Step 3 / 4</span>
                        </legend>
                        <div class="form-group">
                            <label for="employee_id" class="form-label required">Employee ID</label>
                            <input type="text" name="employee_id" id="employee_id" />
                        </div>

                        <div class="form-group">
                            <label for="designation" class="form-label required">Designation</label>
                            <input type="text" name="designation" id="designation" />
                        </div>

                        <div class="form-group">
                            <label for="department" class="form-label required">Department</label>
                            <input type="text" name="department" id="department" />
                        </div>

                        <div class="form-group">
                            <label for="work_hours" class="form-label required">Working hours</label>
                            <input type="text" name="work_hours" id="work_hours" />
                        </div>
                    </fieldset> -->

                    <h3>
                        <span class="icon"><i class="ti-credit-card"></i></span>
                        <span class="title_text">Payment</span>
                    </h3>
                    <fieldset>
                        <legend>
                            <span class="step-heading">Payment Informaltion: </span>
                            <span class="step-number">Step 4 / 4</span>
                        </legend>
                        <div class="form-group">
                            <label for="bank_name" class="form-label required">Bank Name</label>
                            <input type="text" name="bank_name" id="bank_name" />
                        </div>

                        <div class="form-group">
                            <label for="holder_name" class="form-label required">Holder Name</label>
                            <input type="text" name="holder_name" id="holder_name" />
                        </div>

                        <div class="form-row">
                            <div class="form-date">
                                <label for="expiry_date" class="form-label">Expiry Date</label>
                                <div class="form-date-group">
                                    <div class="form-date-item">
                                        <select id="expiry_date" name="expiry_date"></select>
                                        <span class="select-icon"><i class="ti-angle-down"></i></span>
                                    </div>
                                    <div class="form-date-item">
                                        <select id="expiry_month" name="expiry_month"></select>
                                        <span class="select-icon"><i class="ti-angle-down"></i></span>
                                    </div>
                                    <div class="form-date-item">
                                        <select id="expiry_year" name="expiry_year"></select>
                                        <span class="select-icon"><i class="ti-angle-down"></i></span>
                                    </div>
                                </div>
                            </div>
    
                            <div class="form-select">
                                <label for="payment_type" class="form-label">Payment type</label>
                                <div class="select-list">
                                    <select name="payment_type" id="payment_type">
                                        <option value="">Master Card</option>
                                        <option value="Master Card">Master Card</option>
                                        <option value="Visa Card">Visa Card</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="card_number" class="form-label required">Card Number</label>
                                <input type="number" name="card_number" id="card_number" />
                            </div>

                            <div class="form-group">
                                <label for="cvc" class="form-label required">CVC</label>
                                <input type="text" name="cvc" id="cvc" />
                            </div>
                        </div>
                    </fieldset>
            </form>
        </div>

    </div>
    <div class="footer">
        
    </div>

    <?php 


include "connection.php";

if(isset($_POST['submit'])){

    $user_name = mysqli_real_escape_string($con,$_POST['user_name']);
    $password = mysqli_real_escape_string($con,$_POST['password']);

    if ($user_name != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from users where user_name='".$user_name."' and password='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['user_name'] = $user_name;
            header('Location: index.php');
        }else{
            echo "Invalid user_name and password";
        }

    }

}



     ?>

     <script>
    $(document).ready(function(){
      var date_input=$('input[name="date"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'mm/dd/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
    })
</script>
  <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="assets/img/partner/partner-logo-4.png" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- <div>
    

</div> -->
 <section id="choose-car" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Choisissez votre voiture</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="row">
                <!-- Choose Area Content Start -->
                <div class="col-lg-12">
                    <div class="choose-content-wrap">
                        <!-- Choose Area Tab Menu -->
                        <!--ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#popular_cars" role="tab" aria-selected="true">popular Cars</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#newest_cars" role="tab" aria-selected="false">newest cars</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#office_map" role="tab" aria-selected="false">Our Office</a>
                            </li>
                        </ul-->
                        <!-- Choose Area Tab Menu -->

                        <!-- Choose Area Tab content -->
                        <div class="tab-content" id="myTabContent">
                            <!-- Popular Cars Tab Start -->
                            <div class="tab-pane fade show active" id="popular_cars" role="tabpanel" aria-labelledby="home-tab">
                                <!-- Popular Cars Content Wrapper Start -->
                                <div class="popular-cars-wrap">
                                    <!-- Filtering Menu -->
                                    <!--div class="popucar-menu text-center">
                                        <-a href="#" data-filter="*" class="active">all</a>
                                        <a href="#" data-filter=".con">Conver</a>
                                        <a href="#" data-filter=".hat">Truck</a>
                                        <a href="#" data-filter=".mpv">MPV</a>
                                        <a href="#" data-filter=".sedan">Sedan</a>
                                        <a href="#" data-filter=".suv">SUV</a>
                                    </div-->

                                    <!-- Filtering Menu -->

                                    <!-- PopularCars Tab Content Start -->
                                    <div class="row popular-car-gird">
                                        <!-- Single Popular Car Start -->
                                        <div class="col-lg-4 col-md-6 con suv mpv">
                                            <div class="single-popular-car">
                                                <div class="p-car-thumbnails">
                                                    <a class="car-hover" href="assets/img/car/car-1.jpg">
                                                      <img src="assets/img/car/car-1.jpg" alt="JSOFT">
                                                   </a>
                                                </div>

                                                <div class="p-car-content">
                                                    <h3>
                                                        <a href="#">Dodge Ram 1500</a>
                                                        <span class="price"><i class="fa fa-tag"></i> $55/day</span>
                                                    </h3>

                                                    <h5>HATCHBACK</h5>

                                                    <div class="p-car-feature">
                                                        <a href="#">2017</a>
                                                        <a href="#">manual</a>
                                                        <a href="#">AIR CONDITION</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Popular Car End -->

                                        <!-- Single Popular Car Start -->
                                        <div class="col-lg-4 col-md-6 hat sedan">
                                            <div class="single-popular-car">
                                                <div class="p-car-thumbnails">
                                                    <a class="car-hover" href="assets/img/car/car-2.jpg">
                                                      <img src="assets/img/car/car-2.jpg" alt="JSOFT">
                                                   </a>
                                                </div>

                                                <div class="p-car-content">
                                                    <h3>
                                                        <a href="#">Dodge Ram 1500</a>
                                                        <span class="price"><i class="fa fa-tag"></i> $55/day</span>
                                                    </h3>

                                                    <h5>HATCHBACK</h5>

                                                    <div class="p-car-feature">
                                                        <a href="#">2017</a>
                                                        <a href="#">manual</a>
                                                        <a href="#">AIR CONDITION</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Popular Car End -->

                                        <!-- Single Popular Car Start -->
                                        <div class="col-lg-4 col-md-6 suv con mpv">
                                            <div class="single-popular-car">
                                                <div class="p-car-thumbnails">
                                                    <a class="car-hover" href="assets/img/car/car-3.jpg">
                                                      <img src="assets/img/car/car-3.jpg" alt="JSOFT">
                                                   </a>
                                                </div>

                                                <div class="p-car-content">
                                                    <h3>
                                                        <a href="#">Dodge Ram 1500</a>
                                                        <span class="price"><i class="fa fa-tag"></i> $55/day</span>
                                                    </h3>

                                                    <h5>HATCHBACK</h5>

                                                    <div class="p-car-feature">
                                                        <a href="#">2017</a>
                                                        <a href="#">manual</a>
                                                        <a href="#">AIR CONDITION</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Popular Car End -->

                                        <!-- Single Popular Car Start -->
                                        <div class="col-lg-4 col-md-6 con hat">
                                            <div class="single-popular-car">
                                                <div class="p-car-thumbnails">
                                                    <a class="car-hover" href="assets/img/car/car-4.jpg">
                                                      <img src="assets/img/car/car-4.jpg" alt="JSOFT">
                                                   </a>
                                                </div>

                                                <div class="p-car-content">
                                                    <h3>
                                                        <a href="#">Dodge Ram 1500</a>
                                                        <span class="price"><i class="fa fa-tag"></i> $55/day</span>
                                                    </h3>

                                                    <h5>HATCHBACK</h5>

                                                    <div class="p-car-feature">
                                                        <a href="#">2017</a>
                                                        <a href="#">manual</a>
                                                        <a href="#">AIR CONDITION</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Popular Car End -->

                                        <!-- Single Popular Car Start -->
                                        <div class="col-lg-4 col-md-6 con sedan mpv">
                                            <div class="single-popular-car">
                                                <div class="p-car-thumbnails">
                                                    <a class="car-hover" href="assets/img/car/car-5.jpg">
                                                      <img src="assets/img/car/car-5.jpg" alt="JSOFT">
                                                   </a>
                                                </div>

                                                <div class="p-car-content">
                                                    <h3>
                                                        <a href="#">Dodge Ram 1500</a>
                                                        <span class="price"><i class="fa fa-tag"></i> $55/day</span>
                                                    </h3>

                                                    <h5>HATCHBACK</h5>

                                                    <div class="p-car-feature">
                                                        <a href="#">2017</a>
                                                        <a href="#">manual</a>
                                                        <a href="#">AIR CONDITION</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Popular Car End -->

                                        <!-- Single Popular Car Start -->
                                        <div class="col-lg-4 col-md-6 hat suv mpv">
                                            <div class="single-popular-car">
                                                <div class="p-car-thumbnails">
                                                    <a class="car-hover" href="assets/img/car/car-6.jpg">
                                                      <img src="assets/img/car/car-6.jpg" alt="JSOFT">
                                                   </a>
                                                </div>

                                                <div class="p-car-content">
                                                    <h3>
                                                        <a href="#">Dodge Ram 1500</a>
                                                        <span class="price"><i class="fa fa-tag"></i> $55/day</span>
                                                    </h3>

                                                    <h5>HATCHBACK</h5>

                                                    <div class="p-car-feature">
                                                        <a href="#">2017</a>
                                                        <a href="#">manual</a>
                                                        <a href="#">AIR CONDITION</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Popular Car End -->
                                    </div>
                                    <!-- PopularCars Tab Content End -->
                                </div>
                                <!-- Popular Cars Content Wrapper End -->
                            </div>
                            <!-- Popular Cars Tab End -->

                            <!-- Newest Cars Tab Start -->
                            <div class="tab-pane fade" id="newest_cars" role="tabpanel" aria-labelledby="profile-tab">
                                <!-- Newest Cars Content Wrapper Start -->
                                <div class="popular-cars-wrap">
                                    <!-- Filtering Menu -->
                                    <div class="newcar-menu text-center">
                                        <a href="#" data-filter="*" class="active">all</a>
                                        <a href="#" data-filter=".toyota">toyota</a>
                                        <a href="#" data-filter=".bmw">bmw</a>
                                        <a href="#" data-filter=".audi">audi</a>
                                        <a href="#" data-filter=".tata">Tata</a>
                                    </div>

                                    <!-- Filtering Menu -->

                                    <!-- NewestCars Tab Content Start -->
                                    <div class="row newest-car-gird">
                                        <!-- Single Newest Car Start -->
                                        <div class="col-lg-4 col-md-6 tata audi">
                                            <div class="single-new-car">
                                                <div class="p-car-thumbnails">
                                                    <a class="car-hover" href="assets/img/car/car-6.jpg">
                                                      <img src="assets/img/car/car-6.jpg" alt="JSOFT">
                                                   </a>
                                                </div>

                                                <div class="p-car-content">
                                                    <h3>
                                                        <a href="#">Toyota RAV4 EV</a>
                                                        <span class="price"><i class="fa fa-tag"></i> $35/day</span>
                                                    </h3>

                                                    <h5>Toyota</h5>

                                                    <div class="p-car-feature">
                                                        <a href="#">2018</a>
                                                        <a href="#">Auto</a>
                                                        <a href="#">Non AIR CONDITION</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Newest Car End -->

                                        <!-- Single Newest Car Start -->
                                        <div class="col-lg-4 col-md-6 bmw tata toyota">
                                            <div class="single-new-car">
                                                <div class="p-car-thumbnails">
                                                    <a class="car-hover" href="assets/img/car/car-5.jpg">
                                                      <img src="assets/img/car/car-5.jpg" alt="JSOFT">
                                                   </a>
                                                </div>

                                                <div class="p-car-content">
                                                    <h3>
                                                        <a href="#">Toyota RAV4 EV</a>
                                                        <span class="price"><i class="fa fa-tag"></i> $35/day</span>
                                                    </h3>

                                                    <h5>Toyota</h5>

                                                    <div class="p-car-feature">
                                                        <a href="#">2018</a>
                                                        <a href="#">Auto</a>
                                                        <a href="#">Non AIR CONDITION</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Newest Car End -->

                                        <!-- Single Newest Car Start -->
                                        <div class="col-lg-4 col-md-6 bmw">
                                            <div class="single-new-car">
                                                <div class="p-car-thumbnails">
                                                    <a class="car-hover" href="assets/img/car/car-4.jpg">
                                                      <img src="assets/img/car/car-4.jpg" alt="JSOFT">
                                                   </a>
                                                </div>

                                                <div class="p-car-content">
                                                    <h3>
                                                        <a href="#">Toyota RAV4 EV</a>
                                                        <span class="price"><i class="fa fa-tag"></i> $35/day</span>
                                                    </h3>

                                                    <h5>Toyota</h5>

                                                    <div class="p-car-feature">
                                                        <a href="#">2018</a>
                                                        <a href="#">Auto</a>
                                                        <a href="#">Non AIR CONDITION</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Newest Car End -->
                                    </div>
                                    <!-- NewestCars Tab Content End -->
                                </div>
                                <!-- Newest Cars Content Wrapper End -->
                            </div>
                            <!-- Newest Cars Tab End -->

                            <!-- Office Map Tab -->
                            <div class="tab-pane fade" id="office_map" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="map-area">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.6538067244583!2d90.37092511435942!3d23.79533919297639!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0cce3251ab1%3A0x7a2aa979862a9643!2sJSoft!5e0!3m2!1sen!2sbd!4v1516771096779"></iframe>
                                </div>
                            </div>
                            <!-- Office Map Tab -->
                        </div>
                        <!-- Choose Area Tab content -->
                    </div>
                </div>
                <!-- Choose Area Content End -->
            </div>
        </div>
    </section>