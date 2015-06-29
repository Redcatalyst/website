<?php
    $errName = '';
    $errEmail = '';
    $errMessage = '';
    $errHuman = '';
    $result = '';

    if (isset($_POST["submit"])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $human = intval($_POST['human']);
        $from = 'vdPoel Computing & Design';
        $to = 'rickvanderpoel@gmail.com';
        $subject = 'Bericht via vdpoeldesign website.';

        $body = "From: $name\n E-Mail: $email\n Message:\n $message";

        // Kijk of er een naam is ingevuld
        if (!$_POST['name']) {
            $errName = 'Vul een naam in.';
        }

        // Kijk of een geldig e-mail adres is ingevuld
        if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errEmail = 'Zorg er voor dat u een geldig email adres invoert.';
        }

        // Kijk of er een bericht is ingevuld
        if (!$_POST['message']) {
            $errMessage = 'Vul een bericht in.';
        }
        // Kijk of het geen bot is
        if ($human !== 5) {
            $errHuman = 'U heeft niet het goede antwoord gegeven.';
        }

        // If there are no errors, send the email
        if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
            if (mail ($to, $subject, $body, $from)) {
                $result='<div class="alert alert-success">Bedankt voor uw bericht. We zullen zo spoedig mogelijk reageren op het opgegeven emailadres.</div>';
            } else {
                $result='<div class="alert alert-danger">Er is iets fout gegaan met het versturen van uw bericht. Probeer het later nog eens.</div>';
            }
        }
    } else {
      $_POST['name'] = '';
      $_POST['email'] = '';
      $_POST['message'] = '';
    }
?>
