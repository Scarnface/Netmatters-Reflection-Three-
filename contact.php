<?php
  $servername = "localhost";
  $username = "root";
  $password = "";

  $error_name = "";
  $error_email = "";
  $error_tel = "";
  $error_subject = "";
  $error_message = "";
  $success = "";

  try {
    $pdo = new PDO("mysql:host=$servername;dbname=nmdb", $username, $password);
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }

  // Taking all values from the form data(input)
  if (isset($_POST['submit'])) {
    $name =  filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $telephone = filter_input(INPUT_POST, 'telephone', FILTER_SANITIZE_NUMBER_INT);
    $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
    $subscribe = filter_input(INPUT_POST, 'subscribe', FILTER_SANITIZE_NUMBER_INT);

    if($name =="") {
      $error_name = "<span class='error'>Please enter your name.</span>";
    } elseif($email == "") {
      $error_email=  "<span class='error'>Please enter your email.</span>"; 
    } elseif(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email)) {
      $error_email= "<span class='error'>Please enter a valid email.</span>";
    } elseif($telephone == "") {
      $error_tel =  "<span class='error'>Please enter a phone number.</span>";
    } elseif(is_numeric($telephone) == false) {
      $error_tel =  "<span class='error'>Please enter a numeric value.</span>";
    } elseif($subject == "") {
      $error_tel =  "<span class='error'>Please enter a subject.</span>";
    } elseif($message == "") {
      $error_tel =  "<span class='error'>Please enter a message.</span>";
    } else {
      // Performing insert query execution
      $sql = "INSERT INTO contact (name, email, telephone, subject, message, subscribe) VALUES (?,?,?,?,?,?)";
      $pdo->prepare($sql)->execute([$name, $email, $telephone, $subject, $message, $subscribe]);
      $success =  "<span class='success'>&nbsp;&nbsp;&nbsp;Enquiry Sent!</span>";
    }
  }
?>

<?php include "./libs/inc/head.php" ?>
<?php include "./libs/inc/header.php" ?>

<!-- ================================= 
        OFFICES
================================== -->
<nav class=offices-breadcrumb>
  <div class="container">
    <div class="breadcrumb-wrapper">
      <a id="bc-home" href="#">Home</a>
      <span>&nbsp;&nbsp;/&nbsp;&nbsp;</span>
      <span id="bc-contact">Our Offices</span>
    </div>
  </div>
</nav>
<section class="our-offices">
  <header class="offices-title-wrapper">
    <div class="container">
      <h1>Our Offices</h1>
    </div>
  </header>

  <section class="offices-container">
    <div class="container">
      <div class="office-card-wrapper">
        <article class="office-card">
          <header class="office-image-container">
            <img src="libs/img/cambridge.jpg" alt="Cambridge Office" />
          </header>
          <section class="office-card-info">
            <a class="office-name" href="#">Cambridge Office</a>
            <ul>
                <li>Unit 1.28,</li>
                <li>St John's Innovation Centre, </li>
                <li>Cowley Road, Milton, </li>
                <li>Cambridge, </li>
                <li>CB4 0WS </li>
            </ul>
            <a class="office-tel" href="#">01223 37 57 72</a>
            <button>VIEW MORE</button>
          </section>
          <footer class="map-image-container">
            <img class="map-small" src="libs/img/cambridgemap.jpg" alt="Cambridge Map" />
            <img class="map-wide" src="libs/img/cambridgemap-wide.jpg" alt="Cambridge Map" />
          </footer>
        </article>

        <article class="office-card">
          <header class="office-image-container">
            <img src="libs/img/wymondham.jpg" alt="Wymondham Office" />
          </header>
          <section class="office-card-info">
            <a class="office-name" href="#">Wymondham Office</a>
            <ul>
                <li>Unit 15,</li>
                <li>Penfold Drive,</li>
                <li>Gateway 11 Business Park,</li>
                <li>Wymondham, Norfolk,</li>
                <li>NR18 0WZ</li>
            </ul>
            <a class="office-tel" href="#">01603 70 40 20</a>
            <button>VIEW MORE</button>
          </section>
          <footer class="map-image-container">
            <img class="map-small" src="libs/img/wymondhammap.jpg" alt="Wymondham Map" />
            <img class="map-wide" src="libs/img/wymondhammap-wide.jpg" alt="Wymondham Map" />
          </footer>
        </article>

        <article class="office-card">
          <header class="office-image-container">
            <img src="libs/img/gorleston.jpg" alt="Great Yarmouth Office" />
          </header>
          <section class="office-card-info">
            <a class="office-name" href="#">Great Yarmouth Office</a>
            <ul>
                <li>Suite F23,</li>
                <li>Beacon Innovation Centre,</li>
                <li>Beacon Park, Gorleston,</li>
                <li>Great Yarmouth, Norfolk,</li>
                <li>NR31 7RA</li>
            </ul>
            <a class="office-tel" href="#">01493 60 32 04 </a>
            <button>VIEW MORE</button>
          </section>
          <footer class="map-image-container">
            <img class="map-small" src="libs/img/gorlestonmap.jpg" alt="Great Yarmouth Map" />
            <img class="map-wide" src="libs/img/gorlestonmap-wide.jpg" alt="Great Yarmouth Map" />
          </footer>
        </article>
      </div> 
    </div>
  </section>

  <section class="offices-contact">
    <div class="container">
      <div class="contact-info">
        <ul>
          <li>Email us on:</li>
          <li><a href="mailto:#">sales@netmatters.com</a></li>
          <li>Business hours:</li>
          <li>Monday - Friday 07:00 - 18:00</li>
          <li id="ITSupport">Out of Hours IT Support <i class="fas fa-chevron-down"></i></li>
        </ul>
      </div>

      <div class="contact"> 
        <form class="contact-form" action="contact.php" method="post">
          <div class="input-wrapper-double">
            <div class="input-wrapper-single">
              <label for="contact-name" class="required">Your Name <span>*</span></label><br />
              <input id="contact-name" name="name" type="text" value="" /><?php echo $error_name; ?><br />
            </div>
            <div class="input-wrapper-single">
              <label for="contact-email" class="required">Your Email <span>*</span></label
              ><br />
              <input id="contact-email" name="email" type="text" value="" /><?php echo $error_email; ?>
            </div>
          </div>

          <div class="input-wrapper-double">
            <div class="input-wrapper-single">
              <label for="contact-tel" class="required">Your Telephone Number <span>*</span></label><br />
              <input id="contact-tel" name="telephone" type="text" value="" /><?php echo $error_tel; ?><br />
            </div>
            <div class="input-wrapper-single">
              <label for="contact-subject" class="required">Subject <span>*</span></label><br />
              <input id="contact-subject" name="subject" type="text" value="" /><?php echo $error_subject; ?>
            </div>
          </div>

          <div class="input-wrapper-single" id="wrapper-message">
            <label for="contact-message" class="required">Message <span>*</span></label><br />
            <textarea id="contact-message" name="message" value="" ></textarea><br /><?php echo $error_message; ?>
          </div>

          <label class="checkbox-container">
            <input id="checkbox" type="checkbox" name="subscribe" value="1"/>
            <span class="checkbox-checkmark"></span>
            Please tick this box if you wish to receive marketing information from us. Please see our
            <a href="#" target="_blank">Privacy Policy</a> for more information on how we use your data.
          </label>
          <button type="submit" name="submit" value="Submit">Send Enquiry</button><?php echo $success; ?>

        </form>
      </div>

    </div>
  </section>

</section>

<?php include "./libs/inc/newsletter.php" ?>
<?php include "./libs/inc/footer.php" ?>
<?php include "./libs/inc/menu.php" ?>
<?php include "./libs/inc/cookies.php" ?>