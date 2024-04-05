<form action="?controller=livres&action=par_titre_resultat" method="POST">
  <!-- <input type="hidden" name="action" value="par_titre"> -->
  <th> <strong>Titre</strong></th>
  <br>
  <table id='table'> 
      
      <thead>

          
      </thead>
      
    <select name="titre" id="titre">
        
      <?php  foreach($livres as $l ): ?>

              <option value="<?=$l->Titre_livre?>"><?=$l->Titre_livre?></option> 
  
      <?php endforeach; ?>
    </select>
    <br>
    <input class="styled" type="submit" value="recherche" />

  </table>
</form>
      
              