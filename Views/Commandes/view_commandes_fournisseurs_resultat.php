<form action="?controller=commandes&action=commandes_fournisseurs" method="post">
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
                <?php  foreach($commandes as $c ): ?>
                <td style="border:3px solid black" >&nbsp;<?=$c->Code_fournisseur?>&nbsp;</td>
                <td style="border:3px solid black" >&nbsp;<?=$c->Raison_sociale?>&nbsp;</td>
                <td style="border:3px solid black" >&nbsp;<?=$c->Rue_fournisseur?>&nbsp;</td>
                <td style="border:3px solid black" >&nbsp;<?=$c->Localite?>&nbsp;</td>
                <td style="border:3px solid black" >&nbsp;<?=$c->Pays?>&nbsp;</td>
                <td style="border:3px solid black" >&nbsp;<?=$c->Email_fournisseur?>&nbsp;</td>
                <td style="border:3px solid black" >&nbsp;<?=$c->Tel_fournisseur?>&nbsp;</td>
                <td style="border:3px solid black" >&nbsp;<?=$c->Fax_fournisseur?>&nbsp;</td>
            
            
            </tr>
            <?php endforeach; ?>
            
        </table>              

<input type="submit" value="revenir a la page précédante "/>

 </form>             



