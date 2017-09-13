<?php
 // require_once('../private/initialize.php'); @@@ TURNS THIS BACK ON

  // Set default values for all variables the page needs.

  // if this is a POST request, process the form
  // Hint: private/functions.php can help

    // Confirm that POST values are present before accessing them.

    // Perform Validations
    // Hint: Write these in private/validation_functions.php

    // if there were no errors, submit data to database

      // Write SQL INSERT statement
      // $sql = "";

      // For INSERT statments, $result is just true/false
      // $result = db_query($db, $sql);
      // if($result) {
      //   db_close($db);

      //   TODO redirect user to success page

      // } else {
      //   // The SQL INSERT statement failed.
      //   // Just show the error, not the form
      //   echo db_error($db);
      //   db_close($db);
      //   exit;
      // }

?>

<?php $page_title = 'Register'; ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<div id="main-content">
  <h1>Register</h1>
  <p>Register to become a Globitek Partner.</p>

  <?php
    // TODO: display any form errors here
    // Hint: private/functions.php can help
    // @@@@ unction display_errors($errors=array())

  ?>

  <!-- TODO: HTML form goes here -->
    <html>
    <body>
    <form action="register.php" method="post">
        First_Name:
        <br>    <input type="text" name="first_name">   <br>
        Last_Name:
        <br>    <input type="text" name="last_name">    <br>
        Email:
        <br>    <input type="text" name="email">    <br>
        Username:
        <br>    <input type="text" name="username"> <br>
        <br>    <input type="submit">
    </form>
    </body>
    </html>


</div>

<?php include(SHARED_PATH . '/footer.php'); ?>


<?php if(is_post_request()) {
    // DETECT FORM SUBMISSION
    print "yeah";
}