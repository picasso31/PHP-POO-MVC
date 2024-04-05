
<form action="?controller=livres&action=par_editeur_resultat" method="post">
        <thead>
            <br>
            <th><strong>Éditeur</strong></th>
            <br>
            <hr>
        </thead>
        <br>
    <select name="par-editeur" >
<table>
        <?php  foreach($livres as $l ): ?>
        <tr>
            <hr>
           <option value="<?=$l->Editeur?>"><td><?=$l->Editeur?></td>
            </option> 
            
        <?php endforeach; ?>
    </select>
    <input type="submit" value="recherche">
</table>
</form>    