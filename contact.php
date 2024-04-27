<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require_once "vendor/autoload.php";

if(isset($_POST['submit'])) {
    // Enable or disable exceptions via variable
    $debug = false;
    try {
        // Create instance of PHPMailer class
        $mail = new PHPMailer($debug);
        if ($debug) {
             // issue a detailed log
            $mail->SMTPDebug = SMTP::DEBUG_SERVER; 
        }
        // Authentication with SMTP
        $mail-> isSMTP();
        $mail->SMTPAuth = true;
        // Login
        $mail->Host = "smtp.ionos.co.uk";
        $mail->Port = 587;
        $mail->Username = "info@corporatevenuesuk.com";
        $mail->Password = "~Askmp3~c!3N%f!";
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->setFrom('info@corporatevenuesuk.com', 'info');
        $mail->addAddress('info@corporatevenuesuk.com');
        $mail->CharSet = 'UTF-8';
        $mail->Encoding = 'base64';
        $mail->isHTML(true);

        $email = $_POST['email'];
        $name = $_POST['name'];
        $company = $_POST['company'];
        $telephone = $_POST['telephone'];
        $requirements = $_POST['requirements'];

        $mail->Subject = "Form submission";
        $mail->Body = "Email: $email<br>Name: $name<br>Company: $company<br>Telephone: $telephone<br>Requirements: $requirements";
        $mail->AltBody = "Email: $email\nName: $name\nCompany: $company\nTelephone: $telephone\nRequirements: $requirements";
        
        $mail->send();
        header('Location: thankyou.php');
        } 
        catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: ".$e->getMessage();
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Averia+Serif+Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Vollkorn:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">

    <title>Corporate Events UK - Home</title>
</head>

<body>
    <div class="top">
        <p class="company"><a href="about.php">Corporate Venues UK</a><img class="logo" src="images/logo.png" /></p>
    </div>

    <div class="middle fade-in-bg bg2">
        <div class="left-margin fade-in">

            <h1>Start your venue search today</h1>

                <form action="" method="post">
                    <div class="input-wrapper">
                        <input name="name" autocomplete="off" class="input" type="text" id="name" placeholder="Name" />
                        <label class="label" for="name">
                            Name
                        </label>
                    </div>
                    
                    <div class="input-wrapper">
                        <input name="company" autocomplete="off" class="input" type="text" id="company" placeholder="Company" />
                        <label class="label" for="company">
                            Company
                        </label>
                    </div>
                    
                    <div class="input-wrapper">
                        <input name="email" autocomplete="off" class="input" type="text" id="email" placeholder="Email" />
                        <label class="label" for="email">
                            Email
                        </label>
                    </div>

                    <div class="input-wrapper">
                        <input name="telephone" autocomplete="off" class="input" type="text" id="telephone" placeholder="Telephone" />
                        <label class="label" for="telephone">
                            Telephone
                        </label>
                    </div>

                    <div class="input-wrapper">
                        <textarea name="requirements"  autocomplete="off" class="input tall" type="text" id="requirements" placeholder="Requirements" ></textarea>
                        <label class="label" for="requirements">
                            Venue requirements
                        </label>
                    </div>

                    <button class="send-enquiry" type="submit" name="submit" value="1">Submit</button>
                </form>
        </div>
    </div>

    <div class="bottom">
        <img class="client" src="images/accenture.png" alt="Accenture">
        <img class="client" src="images/cisco.png" alt="Cisco">
        <img class="client" src="images/computacentre.png" alt="Computacentre">
        <img class="client" src="images/gsk.png" alt="GSK">
        <img class="client" src="images/ibm.png" alt="IBM">
        <img class="client" src="images/vmware.png" alt="Vmware">
    </div>

    <script>

    </script>

</body>

</html>