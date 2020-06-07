<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?= include('thunderbird.php'); ?>
    <link rel="stylesheet" href="../firstview-lettings.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Contact Firstview Lettings</title>
  </head>
  <body>
      <div class="wrap">
        <header style="display:flex">
          <div><a href="../firstview-lettings-home.html"><img src="../images/main-logo.jpg" id="main-logo"></a></div>
            <nav class="main-nav">
              <a href="../firstview-lettings-home.html">Home</a>
              <a href="../properties.html">Properties</a>
              <div class="drp">
                <a href="../landlord-services.html">Landlords</a>
                  <div class="ondrop">
                    <li><a href="../tenancy_application.html">Tenancy Applications</a></li>
                    <li><a href="../tenant-introduction-service.html">Tenant Introduction Service</a></li>
                    <li><a href="../inventory-preparation-services.html">Tenant Introduction & Inventory Preparation Service</a></li>
                    <li><a href="../letting-management.html">Letting Management Service</a></li>
                  </div>
              </div>
              <div class="drp">
              <a href="../tenant-services.html">Tenants</a>
                <div class="ondrop">
                  <li><a href="../tenancy_application.html">Tenancy Applications</a></li>
                  <li><a href="../tenant-enquiries.html">Tenant Enquiries</a></li>
                </div>
              </div>
              <a href="../about-firstview-lettings.html">About</a>
              <a href="../php/index-contact.html">Contact</a>
            </nav>
        </header>

          <main>
            <h2 class="contact-title subp-title">How can we help today?</h2>
            <div class="cstandard">
              <container class="contact-flex">
                <div class="contact-form">
                  <h3 class="contact-title">Contact form</h3>
                    <form class="contact-form" action="<?= $_SERVER['PHP_SELF']; ?>" method="post" id="form">
                          <div class="success" value="<?= $success ?> "><?= $success ?></div>
                          <p>
                            <label for="name">Full Name:</label><br>
                            <input type="text" id="name" name="name" placeholder="Please enter your name" value="<?= $name ?>" tabindex="0" >
                            <span class="error"><?= $nameError ?></span>
                          </p>
                          <p>
                            <label for="email">Email Address:</label><br>
                            <input type="email" id="email" name="email" placeholder="Please enter your email address" value="<?= $address ?>" tabindex="1">
                            <span class="error"><br><?= $mailFromError?></span>
                          </p>
                          <p>
                            <label for="phone">Phone Number:</label><br>
                            <input type="tel" id="phone" name="phone" placeholder="00000-000000" maxlength="13" minlength="11" value="<?= $phone ?>" tabindex="2"></input>
                            <span class="error"><?= $phoneError?></span>
                          </p>
                          <p>
                            <label for="address">Postcode:</label><br>
                            <input type="text" name="address" placeholder="Please enter your postcode" value="<?= $address ?>" tabindex="4"></input><br>
                            <span class="error"><?= $addressError?></span>
                          </p>
                          <p>
                            <label for="subject">Subject</label><br>
                            <input type="text" id="subject" name="subject" placeholder="Please enter a subject" value="<?= $messageSubject?>" tabindex="3" ></input>
                            <span class="error"><?= $messageSubjectError?></span>
                          </p>
                          <p>
                            <label for="body">Comments:</label><br>
                            <textarea name="body" placeholder="Please enter your message" value="<?= $messageBody ?>" tabindex="5"></textarea>
                            <span class="error"><?= $messageBodyError ?></span>
                          </p>
                          <p>
                            <input type="radio" id="morning" name="time" value="morning" tabindex="6">Morning</input>
                            <input type="radio" id="afternoon" name="time" value="afternoon">Afternoon</input>
                            <input type="radio" id="anytime" name="time" value="anytime">Anytime</input>
                          </p>
                          <button type="submit" id="submit" name="submit" tabindex="7">Send Message</button>
                          <span><a href="../privacy-statement.html">Privacy Policy</a></span>
                    </form>
                </div>

                <div class="details cstandard">
                  <h2>Company Details</h2>
                  <p>Phone:<br> 07834 342897 </p>
                  <p>Email:<br> firstview.let@btinternet.com</p>
                  <p>Registration No:<br> 5098005</p>
                  <p>Registered Office:<br>
                  367B Church Rd, Frampton Cotterell, Bristol, BS36 2AQ</p>
                </div>
              </container>
            </div>
          </main>
      </div>

  <footer class="main-footer">
    <div>
      <span>Enquiries</span><br>
      <a href="tel:07834 342897">07834 342897</a><br>
      <a href="mailto:firstview.let@btinternet.com">firstview.let@btinternet.com</a>
    </div>
    <div class="resources">
      <span>Resources</span><br>
      <a>The Property Ombudsman</a>
    </div>
    <span id="copy">&copy Firstview Lettings Ltd 2004-2020</span>
    <div>
     <a href="legal.html" id="legal">Legal Notices</a><br>
     <a href="../privacy-statement.html">Privacy Policy</a>
    </div>
    <span class="webdev">Crafted by Firstview Lettings Ltd</span>
  </footer>

  </body>
</html>
