<?php
if (isset($_POST['inptNome']) && $_POST['inptNome'] != ''
        && isset($_POST['inptMail']) && $_POST['inptMail'] != ''
        && isset($_POST['txtMsg']) && $_POST['txtMsg'] != ''
        && isset($_POST['inptSoggetto']) && $_POST['inptSoggetto'] != '') {

    $name = filter_var($_POST['inptNome'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['inptMail'], FILTER_SANITIZE_EMAIL);
    $subject = filter_var($_POST['inptSoggetto'], FILTER_SANITIZE_STRING);
    $text = filter_var($_POST['txtMsg'], FILTER_SANITIZE_STRING);

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
