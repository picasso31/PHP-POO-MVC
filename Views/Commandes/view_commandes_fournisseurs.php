<form action="?controller=commandes&action=fournisseur_commandes_resultat" method="post">
        <thead>
            <br>
            <th><strong>Fournisseurs</strong></th>
            <br>
            <hr>
        </thead>
        <br>
    <select name="commandes-four" id="commandes-four">
<table>
        <?php  foreach($commandes as $c ): ?>
        <tr>
            <hr>
           <option value="<?=$c->Code_fournisseur?>"><?=$c->Code_fournisseur?></option> 
           
        <?php endforeach; ?>
    </select>
    <input type="submit" value="Recherche">
</table>
</form>    