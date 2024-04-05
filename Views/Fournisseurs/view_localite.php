 <form action="?controller=fournisseurs&action=par_localite_resultat" method="post">
    
    <thead>
        <br>
        <th><strong>Localité</strong></th>
        <br>
    </thead>
    <br>
    <select name="par-localite" style="background-color:#85C1E9">
    <table id='table'> 
        <?php  foreach($fournisseurs as $f ): ?>        
            <option value="<?=$f->Localite?>"> <?=$f->Localite?> </option> 
        <?php endforeach; ?>

    </table>
    </select> <br>
    <input type="submit" value="recherche">
            
 </form>
 