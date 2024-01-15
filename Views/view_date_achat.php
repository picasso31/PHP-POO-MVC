<div>
    
<table id='table'>
    <thead>
       
        <th>Date_achat</th>
       
        
    </thead>
    <?php  foreach($commandes as $c ): ?>
    <tr  >
        
        <td><?=$c->Date_achat?></td>
        
        
       
    </tr>
    <?php endforeach; ?>
</table>
</div>            
              