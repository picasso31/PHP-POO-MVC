 
    

    <thead>
       
        <th><strong>Date d'achat</strong></th>
       
        
    </thead>
    <br>
    <form action="?controller=commandes&action=date_achat_resultat" method="post">
<select name="date-achat" id="date-achat">
<table id='table'  >    
    <?php  foreach($commandes as $c ): ?>
    <tr  >
        <hr>
        <option value="<?=$c->Date_achat?>"><?=$c->Date_achat?></option>
        
        
        
       
    </tr>
    <?php endforeach; ?>
</table>    
<input type="submit" value="envoyer">
</select>
</form>

           
              