// MAILVARIABELEN AANMAKEN
$to = '24444@ma-web.nl';
$subject = $_POST['subject'];
$message = $_POST['message'];
$headers = 'From: ' . $_POST['from'];

// MAIL VERSTUREN
mail($to, $subject, $message, $headers);

// BEVESTIGING VOOR DE GEBRUIKER
echo 'Je mail is verstuurd, Gratzi!';