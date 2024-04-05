<form action="?controller=commandes&action=date_achat" method="post">

<div>
    <p> <?= isset($search)?'Recherche par '.$search:'' ?></p>
<table id='table' style="border:3px solid black" style ="background-color:#85C1E9;"  >
    <thead style ="background-color:#85C1E9;" >
        <th style="border:3px solid black" > &nbsp;Toutes les commandes&nbsp; </th>
        <th style="border:3px solid black">&nbsp; Livre &nbsp; </th>
        <th style="border:3px solid black"> &nbsp;fournisseur&nbsp; </th>
        <th style="border:3px solid black">&nbsp;Date achat&nbsp;</th>
        <th style="border:3px solid black">&nbsp;Prix achat&nbsp;€&nbsp;</th>
        <th style="border:3px solid black">&nbsp;nombre d'exemplaires&nbsp;</th>
        
        
    </thead>
    <?php  foreach($commandes as $c ): ?>
    <tr  >
        <td  style="border:3px solid black" >&nbsp;&nbsp;<?=$c->id_commande?>&nbsp;</td>
        <td  style="border:3px solid black" >&nbsp;&nbsp;<?=$c->Id_Livre?>&nbsp;</td>
        <td  style="border:3px solid black" >&nbsp;&nbsp;<?=$c->Id_fournisseur?>&nbsp;</td>
        <td  style="border:3px solid black" >&nbsp;&nbsp;<?=$c->Date_achat?>&nbsp;</td>
        <td  style="border:3px solid black" >&nbsp;&nbsp;<?=$c->Prix_achat?>&nbsp;€&nbsp;</td>
        <td  style="border:3px solid black" >&nbsp;&nbsp;<?=$c->Nbr_exemplaires?>&nbsp;</td>
        
       
    </tr>
    <?php endforeach; ?>

</table>
<input type="submit" value="Revenir a la page précédante"/>           
</form>