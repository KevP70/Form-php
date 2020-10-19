<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>

<body>
    
    <form class="container pt-5 bg-danger mt-5 rounded-pill text-light" action="form.php" method="post">
    <h1 class="text-center mb-5">Formulaire</h1>
        <div class="d-flex pb-5 pl-5 ml-5">
            <div class="col-md-4">
                <label for="lastname">Nom</label> <br>
                <input class="rounded" type="text" name="lastname" placeholder="lastname">
            </div>
            <div class="col-md-4">
                <label for="firstname">Prénom</label> <br>
                <input class="rounded" type="text" name="firstname" placeholder="firstname">
            </div>
            <div class="col-md-4">
                <label for="email">Email</label> <br>
                <input class="rounded" type="text" name="email" placeholder="email">
            </div>
        </div>

       
        <div class="col-lg-10 offset-1 pb-5">
            <label for="adress">Adresse</label> <br>
            <input class="w-100 rounded" type="text" name="adress" placeholder="adress">
        </div>

        <div class="d-flex justify-content-around pb-5 pl-5">
            <div class="col-md-3">
                <label for="city">Ville</label> <br>
                <input class="rounded" type="text" name="city" placeholder="city">
            </div>
            <div class="col-md-3">
                <label for="country">Pays</label> <br>
                <input class="rounded" type="text" name="country" placeholder="country">
            </div>
        </div>

        <div class="text-center mt-5 pb-5">
            <input class="btn-lg btn-outline-danger rounded-pill" type="submit" name="submit">
        </div>
    </form>

    

</body>

</html>
