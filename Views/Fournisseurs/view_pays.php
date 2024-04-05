 <form action="?controller=fournisseurs&action=pays_resultat" method="post">
    

    <thead>
         <strong>Pays</strong> 
    </thead>
    <select name="par-pays" id="">
        <table id='table'>        
                <?php  foreach($fournisseurs as $f ): ?>

                <option value="<?=$f->Pays?>"><?=$f->Pays?></option>

                <?php endforeach; ?>
        </table>
    </select>
                <input type="submit" value="Recherche">
</form>     
