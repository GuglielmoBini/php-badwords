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
    <h1 class='text-center m-5'>BADWORDS FORM</h1>
    <div class='container'>
        <form class='d-flex flex-column align-items-center' action="censored.php" method='GET'>
            <input class='w-50' type="text" name='badword' placeholder='Inserisci parola da censurare'>
            <textarea class='my-4 w-75' name="paragraph" placeholder='Inserisci testo...' cols="30" rows="10"></textarea>
            <button class='btn btn-danger w-25'>Invia</button>
        </form>
    </div>

</body>
</html>