<?php

$errors = [];
$errorMessage = '';

$secret = '6Ld4ugwgAAAAANXk-akjeYFOCT1TOzI6gm8BAoEg';

if (!empty($_POST)) {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $checkindate=$_POST['checkindate'];
    $checkoutdate=$_POST['checkoutdate'];
    $people=$_POST['people'];
    $children=$_POST['children'];
    $males=$_POST['males'];
    $females=$_POST['females'];
    $rooms=$_POST['rooms'];
    $admessage=$_POST['message'];
    $message = "
          <html>
          <head>
          <title>Birthday Reminders for August</title>
          </head>
          <body>
          Room booking with following details from Guest - $name.
          Email - $email
          <table>                    
          <tbody>    
              <tr>
                  <td>Guest Name</td>
                  <td>$name</td>
                  <td>Guest Phone</td>
                  <td>$phone</td>
               
              </tr>
              <tr>
              <td>Check In</td>
              <td>$checkindate</td>
              <td>Check Out</td>
              <td>$checkoutdate</td>
              </tr>    
              <tr>
              <td>Total People</td>
              <td>$people</td>
              <td>Children Below 5</td>
              <td>$children</td>
              </tr>    
              <tr>
              <td>Males</td>
              <td>$males</td>
              <td>Females</td>
              <td>$females</td>
              </tr>     
              <tr>
              <td>Rooms Required</td>
              <td>$roooms</td>
              <td>Message</td>
              <td>$message</td>
              </tr> 
          </tbody>
          </table>  
          </body>
          </html>
          ";
    $recaptchaResponse = $_POST['g-recaptcha-response'];

    $recaptchaUrl = "https://www.google.com/recaptcha/api/siteverify?secret={$secret}&response={$recaptchaResponse}";
    $verify = json_decode(file_get_contents($recaptchaUrl));

    if (!$verify->success) {
      $errors[] = 'Recaptcha failed';
    }

    if (empty($name)) {
        $errors[] = 'Name is empty';
    }

    if (empty($email)) {
        $errors[] = 'Email is empty';
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Email is invalid';
    }

    if (empty($message)) {
        $errors[] = 'Message is empty';
    }


    if (!empty($errors)) {
        $allErrors = join('<br/>', $errors);
        $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
    } else {
        $toEmail = 'hightownweb@gmail.com';
        $emailSubject = 'Test Booking';
        $headers = ['From' => $email, 'Reply-To' => $email, 'Content-type' => 'text/html; charset=iso-8859-1'];

        $bodyParagraphs = ["Name: {$name}", "Email: {$email}", "Message:", $message];
        $body = join(PHP_EOL, $bodyParagraphs);

        if (mail($toEmail, $emailSubject, $body, $headers)) {
            header('Location: thank-you.html');
        } else {
            $errorMessage = "<p style='color: red;'>Oops, something went wrong. Please try again later</p>";
        }
    }
}

?>


