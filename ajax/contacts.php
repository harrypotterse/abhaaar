<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"):
    require_once '../FileConnection/Data_connection.php';
    require_once '../Classes/Achieve.php';
    //message	permalink	name	phone	email	company
    //  Array ( [permalink] => 1 [name] => 1 [email] => 1 [phone] => 1 [message] => 1 ) 
    // print_r($_POST);
    $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
    $permalink = filter_var($_POST['permalink'], FILTER_SANITIZE_STRING);
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $phone = filter_var($_POST['phone'], FILTER_SANITIZE_NUMBER_INT);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    $time = time();
    $a = new Achieve();
    $msg_db1 = "SELECT * FROM `question` where message = ?";
    $array1 = array($message);
    $true = TRUE;
    $msgerr = "";
    if (!$a->empty_filed($message)):
        $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك محتوي الرسالة فارغ</div>";
        $true = FALSE;
    endif;
    if (!$a->empty_filed($permalink)):
        $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك الموضوع فارغ</div>";
        $true = FALSE;
    endif;
    if (!$a->empty_filed($name)):
        $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك الاسم فارغ</div>";
        $true = FALSE;
    endif;
    if (!$a->empty_filed($phone)):
        $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك رقم الجوال فارغ</div>";
        $true = FALSE;
    endif;
    if (!$a->empty_filed($email)):
        $msgerr .= "<div class='alert alert-danger'>من فضلك لاتترك البريد الالكتروني فارغ</div>";
        $true = FALSE;
    endif;
    if ($a->row_db($Data_communication, $msg_db1, $array1)):
        $msgerr .= "<div class='alert alert-danger'> محتوي الرسالة موجود مسبقا</div>";
        $true = FALSE;
    endif;
    echo $msgerr;
    if ($true == TRUE):
        try {
            //  //  Array ( [permalink] => 1 [name] => 1 [email] => 1 [phone] => 1 [message] => 1 ) 

            $sql = "INSERT INTO `question` (`id`, `message`, `permalink`, `name`, `phone`, `email`, `View`) VALUES (NULL, ?, ?, ?, ?, ?, '1');";
            $array = array($message, $permalink, $name, $phone, $email);
            $a->sql($Data_communication, $sql, $array);

//        ===================================================
            $messagesend = "
<h1 style=' font-size: 50px; font-family: tahoma; color: #2cd9ee; text-align: left; text-transform: uppercase; letter-spacing: 8px; '>
المركز الذهبي الهندسي
<img src='http://www.gceksa.com/images/logo.png' alt=''>
</h1>
<table style='background: #fafafa;font-family: tahoma;font-size: 12px;line-height: 51px;border: 1px ridge;padding: 0.5%;width: 100%;direction: rtl;text-align: center;/* box-shadow: -1px 4px #626262; */'>
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
     <tr>
<td style=' width: 100px; text-transform: uppercase; padding: 1%; border: 1px solid #ffffff; '>الجوال</td>
<td style=' border: 1px solid #ffffff; '>$phone</td>
    </tr>
    <tr>
        <td style=' width: 100px; text-transform: uppercase; padding: 1%; border: 1px solid #ffffff; '>الرسالة</td>
<td style=' border: 1px solid #ffffff; '>$message</td>
    </tr>
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
            mail($to, $permalink, $messagesend, $headers);
            echo $msgerr .= "<div class='alert alert-success'>تم تقديم طلبك بنجاح</div>";
            //        ===================================================      
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }

    endif;
endif;



