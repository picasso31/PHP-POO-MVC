<div>
    



    <form action="?controller=livres&action=par_titre_resultat" method="POST">
    <input type="hidden" name="action" value="par_titre">
    <th> <strong>Titre</strong></th>
<br>
<table id='table'> 
    
    <thead>
       
        
        
        <input class="styled" type="button" value="recherche" />
    </thead>
    
      <select name="" id="">
      
    <?php  foreach($livres as $l ): ?>


            <option value=""><?=$l->Titre_livre?></option> 
            

    <?php endforeach; ?>
  </select>
</table>
</form>
</div>            
              