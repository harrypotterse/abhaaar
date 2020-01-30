<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"):
    require_once '../FileConnection/Data_connection.php';
    require_once '../Classes/Achieve.php';
//Array ( [Name] => s [Email] => a@yahoo.com [Service] => s ) 
    $Service= filter_var($_POST['Service'], FILTER_SANITIZE_STRING);
    $name = filter_var($_POST['Name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['Email'], FILTER_SANITIZE_EMAIL);
    $a = new Achieve();
    $true = TRUE;
    $msgerr = "";

    if (!$a->empty_filed($name)):
        $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك الاسم فارغ</div>";
        $true = FALSE;
    endif;
    if (!$a->empty_filed($email)):
        $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك البريد الالكتروني فارغ</div>";
        $true = FALSE;
    endif;
    if (!$a->empty_filed($Service)):
        $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك محتوي الخدمة فارغ</div>";
        $true = FALSE;
    endif;
    echo $msgerr;
    if ($true == TRUE):
        try {
        //  //  Array ( [permalink] => 1 [name] => 1 [email] => 1 [phone] => 1 [message] => 1 ) 

            $sql = "INSERT INTO `ask_your_service` (`id`, `Name`, `Email`, `Service`, `View`) VALUES (NULL, ?, ?, ?, '1');";
            $array = array($name, $email, $Service);
            $a->sql($Data_communication, $sql, $array);

            $messagesend = "
<h1 style=' font-size: 50px; font-family: tahoma; color: #2cd9ee; text-align: left; text-transform: uppercase; letter-spacing: 8px; '>
المركز الذهبي الهندسي
<img src='http://www.gceksa.com/images/logo.png' alt=''>
</h1>
<table style='background: #fafafa;font-family: tahoma;font-size: 12px;line-height: 51px;border: 1px ridge;padding: 0.5%;width: 100%;direction: rtl;text-align: center;/* box-shadow: -1px 4px #626262; */'>
    <tr>
<td style=' width: 100px; text-transform: uppercase; padding: 1%; border: 1px solid #ffffff; '>الخدمة</td>
<td style=' border: 1px solid #ffffff; '>$Service</td>
    </tr>
      <tr>
<td style=' width: 100px; text-transform: uppercase; padding: 1%; border: 1px solid #ffffff; '>الاسم</td>
<td style=' border: 1px solid #ffffff; '>$name</td>
    </tr>
    <tr>
     <tr>
<td style=' width: 100px; text-transform: uppercase; padding: 1%; border: 1px solid #ffffff; '>البريد الالكتروني</td>
<td style=' border: 1px solid #ffffff; '>$email</td>
    </tr>
    <tr>
</table>";
            //  Array ( [name] => ahmds [email] => e.sherifgalal@hotmail.com [subject] => ssssssss [message] => sssssssssssssssssssssssss )
            $to = "engwalaa90.wr@gmail.com";
            $from = $name;
            $headers .= "Content-type: text/html\r\n";
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
            $headers .= "From: successive.testing@gmail.com" . "\r\n" .
                    "Reply-To: successive.testing@gmail.com" . "\r\n" .
                    "X-Mailer: PHP/" . phpversion();
            mail($to, $Service, $messagesend, $headers);
            echo $msgerr .= "<div class='alert alert-success'>Message sent successfully</div>";
            //        ===================================================      
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }

    endif;
endif;



