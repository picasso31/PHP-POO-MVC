<form action="?controller=commandes&action=editeur_commandes_resultat" method="post">
        <thead>
            <br>
            <th><strong>Éditeur</strong></th>
            <br>
            <hr>
        </thead>
        <br>
    <select name="commandes-editeur" id="commandes-editeur">
<table>
        <?php  foreach($commandes as $c ): ?>
        <tr>
            <hr>
           <option value="<?=$c->Editeur?>"><?=$c->Editeur?></option> 
            
        <?php endforeach; ?>
    </select>
    <input type="submit" value="recherche">
</table>
</form>    