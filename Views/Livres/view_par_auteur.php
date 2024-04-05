<form action="?controller=livres&action=par_auteur_resultat" method="POST">
    
    <thead >
        <th> <strong>Prenom auteur</strong></th>
        
    </thead> <br>

    <table style="border:5px solid red;" id='table'>
    
        <select name="prenom-auteur" style="background-color:#85C1E9" >

            <?php  foreach($livres as $l ):  ?>
            
                <hr>
                
                <option value="<?=$l->Prenom_auteur?>" > <?=$l->Prenom_auteur?></option>
                
                
            <?php endforeach; ?>
        </select>
        <input class="styled" type="submit" value="Recherche" />

    </table>
</form>
        
              