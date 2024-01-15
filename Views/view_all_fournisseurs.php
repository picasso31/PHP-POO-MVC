<div>
    <p> <?= isset($search)?'Recherche par '.$search:'' ?></p>
<table id='table' >
    <thead>
        <th>Code fournisseurs</th>
        <th>Raison sociale</th>
        <th>Rue fournisseur</th>
        
    </thead>
    <tr>
        <?php  foreach($fournisseurs as $f ): ?>
        <td><?=$f->Code_fournisseur?></td>
        <td><?=$f->Raison_sociale?></td>
        <td><?=$f->Rue_fournisseur?></td>
      
       
    </tr>
    <?php endforeach; ?>
</table>
</div>            
              