<div>
   
<table id='table'>
    <thead>
        <th>Raison sociale</th>
    </thead>
    <tr>
        <?php  foreach($fournisseurs as $f ): ?>

        <td><?=$f->Raison_sociale?></td>
    </tr>
    <?php endforeach; ?>
</table>
</div>            
              