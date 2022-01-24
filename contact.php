<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/40c0b95630.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./index.css">
    <title>Contact</title>
</head>

<body>

      <!-- nav starts here -->
    <?php include ('./components/nav.php') ?>
     <!-- Page Content -->
     <div class="page-heading">
      <div class="container">
        <div class="row">
          <div class="col-md-12 ">
            <h4>Contact Us</h4>
            <h4>feel free to send us a message now!</h4>
          </div>
        </div>
      </div>
    </div>

    <div class="contact-information">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="contact-item">
              <i class="fa fa-phone"></i>
              <h4>Phone</h4>
              <p><a href="tel: +254724291710"> +254724291710</a> 
                <br>
                <a href="tel: +254788315386"> +254788315386</a>
              </p>
              <p> </p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="contact-item">
              <i class="fa fa-envelope"></i>
              <h4>Email</h4>
              <p>info@edmatechsolutions.co.ke</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="contact-item">
              <i class="fa fa-map-marker"></i>
              <h4>Location</h4>
              <address>Interfina House 2nd floor <br> 
                 Tom Mboya steet
                 <br>P.O BOX 46027-00100, GPO Nairobi
            </address>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="callback-form">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Send us message</h2>
            </div>
          </div>
          <div class="col-md-12">
            <div class="contact-form">
              <form id="contact" action="" method="post">
                <div class="row">
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject">
                    </fieldset>
                  </div>
                  <div class="col-lg-12  col-sm-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12  col-sm-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="filled-button">Send Message</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.8127651885743!2d36.82494771430524!3d-1.2863914359880155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f1128432dd489%3A0xddd57de40ef7acd1!2sInterfina%20House!5e0!3m2!1sen!2ske!4v1642494111406!5m2!1sen!2ske" width="100%" height="450" style="border:0;" allowfullscreen="true" loading="lazy"></iframe>
    </div>

 

    <!-- Footer Starts Here -->
    <?php include ('./components/footer.php') ?>
    <!-- footer ends here -->
</body>

</html>