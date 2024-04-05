
    
<table id='table' style="border:3px solid black" >
    <thead style ="background-color:#85C1E9;" >
        <th style="border:3px solid black" >&nbsp;Code fournisseurs&nbsp;</th>
        <th style="border:3px solid black" >&nbsp;Raison sociale&nbsp;</th>
        <th style="border:3px solid black" >&nbsp;Rue fournisseur&nbsp;</th>
        <th style="border:3px solid black" >&nbsp;Localité&nbsp;</th>
        <th style="border:3px solid black" >&nbsp;Pays&nbsp;</th>
        <th style="border:3px solid black" >&nbsp;Email fournisseur&nbsp;</th>
        <th style="border:3px solid black" >&nbsp;Telephone fournisseur&nbsp;</th>
        <th style="border:3px solid black" >&nbsp;Fax fournisseur&nbsp;</th>
        
    </thead>
    <tr>
        <?php  foreach($fournisseurs as $f ): ?>
        <td style="border:3px solid black" >&nbsp;<?=$f->Code_fournisseur?>&nbsp;</td>
        <td style="border:3px solid black" >&nbsp;<?=$f->Raison_sociale?>&nbsp;</td>
        <td style="border:3px solid black" >&nbsp;<?=$f->Rue_fournisseur?>&nbsp;</td>
        <td style="border:3px solid black" >&nbsp;<?=$f->Localite?>&nbsp;</td>
        <td style="border:3px solid black" >&nbsp;<?=$f->Pays?>&nbsp;</td>
        <td style="border:3px solid black" >&nbsp;<?=$f->Email_fournisseur?>&nbsp;</td>
        <td style="border:3px solid black" >&nbsp;<?=$f->Tel_fournisseur?>&nbsp;</td>
        <td style="border:3px solid black" >&nbsp;<?=$f->Fax_fournisseur?>&nbsp;</td>
      
       
    </tr>
    <?php endforeach; ?>
</table>              