<?php

if (isset($_POST['inptNome']) && $_POST['inptNome'] != ''
        && isset($_POST['inptMail']) && $_POST['inptMail'] != ''
        && isset($_POST['txtMsg']) && $_POST['txtMsg'] != ''
        && isset($_POST['inptSoggetto']) && $_POST['inptSoggetto'] != '') {

    $name = $_POST['inptNome'];

    $email = $_POST['inptMail'];

    $subject = $_POST['inptSoggetto'];

    $text = strip_tags($_POST['txtMsg']);

    $to = 'info@mazzucchellis.com';

    $message = 'Hai ricevuto un email da:' . $name . ' ' . $email . ' ' . "\n";

    $message.= 'Testo del messaggio:' . $text;


    if (mail($to, $subject, $message)) {

        echo 'Messaggio inviato con successo!';
    } else {
        echo 'Errore nell\'inviare il messaggio';
    }
} else {

    return false;
}
?>