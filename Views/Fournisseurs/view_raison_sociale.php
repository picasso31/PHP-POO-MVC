 
 <form action="?controller=fournisseurs&action=raison_sociale_resultat" method="POST">
       
            <thead>
                <th>Raison sociale</th>
            </thead>
    <select name="par-raison-sociale"  >
        <table id='table'>     
                <?php  foreach($fournisseurs as $f ): ?>

                <option value="<?=$f->Raison_sociale?>"><?=$f->Raison_sociale?></option>
            
            <?php endforeach; ?>
            
        </table>
    </select>    
    <input type="submit" value="recherche">        
</form>           