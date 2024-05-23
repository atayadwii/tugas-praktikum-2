<?php

  $receiving_email_address = 'atayadwii@gmail.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new $php_email_form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->subject = 'Online Appointment Form';

  $contact->add_message( $_POST['name'], 'Name');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['phone'], 'Phone');
  $contact->add_message( $_POST['date'], 'Appointment Date');
  $contact->add_message( $_POST['department'], 'Department');
  $contact->add_message( $_POST['doctor'], 'Doctor');
  $contact->add_message( $_POST['message'], 'Message');

  echo $contact->send(new PDO($dsn, $user, $pass));
?>
