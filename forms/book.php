<?php

$message="";
$insert="";

if(isset($_POST['submit'])){

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
    $message=$_POST['message'];
    


    $mailHtml="
    Room booking with following details from Guest - $name.
    Email - $email
    <table class='table table-dark table-hover'>                    
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
    ";

    include("./smtp/PHPMailerAutoload.php");
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host="smtp.gmail.com";
    $mail->Port=587;
    $mail->SMTPSecure="tls";
    $mail->SMTPAuth=true;
    $mail->Username="lahu.shareabondofcare@gmail.com";
    $mail->Password="Lahu@123$";
    $mail->SetFrom("lahu.shareabondofcare@gmail.com");
    $mail->addAddress($email);
    $mail->IsHTML(true);
    $mail->Subject="DMA Account Credentials";
    $mail->Body=$mailHtml;
    $mail->SMTPOptions=array('ssl'=>array(
        'verify_peer'=>false,
        'verify_peer_name'=>false,
        'allow_self_signed'=>false
    ));
    if($mail->send()){
        echo "Mail sent";
    }else{
        echo "mail mein masle...";
    }

}

?>