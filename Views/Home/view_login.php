
<html>

<title>Formulaire de connection</title> 

<body>

    <div class="container">

    <form action="?controller=home&action=login" method="POST">
        
            <div class="form-group">
                <label for="email">Nom :</label>
                <input type="text" class="form-control" value="" placeholder="Entrez votre mail" name="email" required>
            </div>

            <div class="form-group">
                <label for="password">Mot de passe :</label>
                <input type="password" class="form-control" value=""  name="password" required>
            </div>


            <div class="form-group">
               <input type="submit" class="btn btn-primary" value="Connexion">
            </div>
        </form>
    </div>
</body>
</html>