<?php
$badword = trim($_GET['badword']);
$paragraph = trim($_GET['paragraph']);

$paragraph_length = strlen($paragraph);
$censored_paragraph = str_replace($badword, '***', $paragraph);
$censored_paragraph_length = strlen($censored_paragraph);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- bootstrap -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>
    <title>Badwords PHP</title>
</head>
<body>
    <div class='container text-center d-flex my-5'>
        <div class='border w-50 mx-3'>
            <h2 class='my-3'>Paragrafo Originale</h2>
            <p><?php echo $paragraph ?></p>
            <p>lunghezza: <?php echo $paragraph_length ?></p>
        </div>

        <div class='border w-50 mx-3'>
            <h2 class='my-3'>Paragrafo con censura</h2>
            <p><?php echo $censored_paragraph ?></p>
            <p>lunghezza: <?php echo $censored_paragraph_length ?></p>
        </div>
    </div>
    
</body>
</html>