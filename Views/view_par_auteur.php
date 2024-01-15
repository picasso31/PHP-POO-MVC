<div>
    
    <thead >
        <th> <strong>Prenom auteur</strong></th>
        
    </thead> <br>
<table style="borer:3px solid black;" id='table'>
    

    <select style="background-color:yellow" name="" id="">

    <?php  foreach($livres as $l ): ?>
    
        
        <option value=""><?=$l->Prenom_auteur?></option>
        
       
   
    <?php endforeach; ?>
</select>
</table>
</div>            
              