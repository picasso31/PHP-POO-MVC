<div>
    <p> <?= isset($search)?'Recherche par '.$search:'' ?></p>
<table id='table'>
    <thead>
        <th> Toutes les commandes </th>
        <th> Livre </th>
        <th> fournisseur </th>
        <th>Date_achat</th>
        <th>Prix_achat</th>
        <th>Nbr_exemplaires</th>
        
        
    </thead>
    <?php  foreach($commandes as $c ): ?>
    <tr  >
        <td><?=$c->id_commande?></td>
        <td><?=$c->Id_Livre?></td>
        <td><?=$c->Id_fournisseur?></td>
        <td><?=$c->Date_achat?></td>
        <td><?=$c->Prix_achat?></td>
        <td><?=$c->Nbr_exemplaires?></td>
        
       
    </tr>
    <?php endforeach; ?>
</table>
</div>            
              