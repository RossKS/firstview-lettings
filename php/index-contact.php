<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="firstview-lettings.css">
    <title>Contact Us</title>
  </head>
  <body>
<div class="wrap">
    <header class="main-header">
        <a href="firstview-lettings-home.html"><img src="images/main-logo.jpg" id="main-logo"></a>
            <nav class="main-nav">
                  <li><a  class="dropbtn" href="firstview-lettings-home.html">Home</a></li>
              <nav class="dropdown">
                <ul>
                  <li><a href="#">Landlords</a></li>
                        <div class="dropdown-content">
                          <li><a href="tenancy_application.html">Tenancy Applications</a></li>
                          <li><a href="tenant-introduction-services.html">Tenant Introduction Service</a></li>
                          <li><a href="inventory-preparation-services.html">Tenant Introduction & Inventory Preparation Service</a></li>
                          <li><a href="letting-management.html">Letting Management Service</a></li>
                        </div>
                </ul>
              </nav>
              <nav class="dropdown">
                <ul>
                  <li><a href="#">Tenants</a></li>
                        <div class="dropdown-content">
                          <li><a href="tenancy_application.html">Tenancy Applications</a></li>
                          <li><a href="tenant-enquiry.html">Tenant Enquiries</a></li>
                        </div>
                </ul>
              </nav>
              <nav class="dropdown">
                <ul>
                  <li><a href="#">About Us</a></li>
                        <div class="dropdown-content">
                          <li><a href="tenancy_application.html">Tenancy Applications</a></li>
                          <li><a href="tenant-introduction-services.html">Tenant Introduction Service</a></li>
                          <li><a href="inventory-preparation-services.html">Tenant Introduction & Inventory Preparation Service</a></li>
                          <li><a href="letting-management.html">Letting Management Service</a></li>
                        </div>
                </ul>
              </nav>
              <nav class="dropdown">
                <ul>
                  <li><a href="#">Properties</a></li>
                        <div class="dropdown-content">
                          <li><a href="tenancy_application.html">Tenancy Applications</a></li>
                          <li><a href="tenant-introduction-services.html">Tenant Introduction Service</a></li>
                          <li><a href="inventory-preparation-services.html">Tenant Introduction & Inventory Preparation Service</a></li>
                          <li><a href="letting-management.html">Letting Management Service</a></li>
                        </div>
                </ul>
              </nav>
              <nav class="dropdown">
                <ul>
                  <li><a href="#">Contact Us</a></li>
                        <div class="dropdown-content">
                          <li><a href="contact-us.html">Enquiry Form</a></li>
                          <li><a href="#">Telephone Contact: 07834 342897</a></li>
                          <li><a href="inventory-preparation-services.html">Tenant Introduction & Inventory Preparation Service</a></li>
                          <li><a href="letting-management.html">Company Details:
  Firstview Lettings Ltd.
  Registration No: 5098005

  Registered Office:
  367B Church Rd, Frampton Cotterell, Bristol, BS36 2AQ</a></li>
                        </div>
                </ul>
              </nav>
              </nav>
    </header>
    <main>

            <h2>Contact Firstview Lettings Ltd</h2>
            <p class="normal">Contact us at the details below, or complete the contact form and we'll be in touch shortly.</p>
            <container class="contact-flex">
            <div class="details">
              <h2>Company Details</h2>
              <p>Phone:<br> 07834 342897 </p>
              <p>Email: firstview.let@btinternet.com</p>
              <p>Registration No:<br> 5098005</p>
              <p>Registered Office:<br>
              367B Church Rd, Frampton Cotterell, Bristol, BS36 2AQ</p>
          </div>

            <div class="contact-form">
              <h2>Contact form</h2>
            <form class="contact-form" action="contactform.php" method="post">
              <fieldset>
                <fieldset>
                  <legend>Personal Details</legend>
                  <p>
                    <label for="name">First Name:</label>
                    <input type="text" id="name" name="name"  placeholder="Please enter your name" required>
                  </p>
                </fieldset>
            <fieldset>
              <legend>Contact Details</legend>
                <p>
                  <label for="email">Email Address:</label>
                  <input type="email" id="email" name="mail" required placeholder="Please enter your email address">
                </p>
                <p>
                <label for="phone">Phone Number:</label>
                  <input type="text" id="phone" name="phone" required="yes"></input>
                </p>
                <p>
                <label for="address">Address:</label>
                <textarea name="address" rows="5" cols="60"></textarea><br>
                </p>
            </fieldset>
            <fieldset>
              <legend>Message</legend>
                <p>
                <label for="comments">Comments:</label>
                <textarea name="message" placeholder="enter your message"></textarea>
              </p>
            </fieldset>
              <p>
                <legend>Time to contact</legend>
                  <input type="checkbox" id="morning" name="time">Morning</input>
                  <input type="checkbox" id="afternoon" name="afternoon">Afternoon</input>
              </p>
              <button type="submit" id="submit" name="submit">Send Mail</button>
              <span><a href="privacy-statement.html">Privacy Policy</a></span>
            </fieldset>

            </form>
          </div>


          </div>
  </main>
  </container>
      <footer class="main-footer">
         <span><a href="legal.html" id="legal">Legal Notices</a></span>
         <span id="copy">&copy Firstview Lettings Ltd 2004-2020.</span>
      </footer>
  <span class="webdev"><p>Website Developer Firstview Lettings Ltd</p></span>
  </body>
</html>
