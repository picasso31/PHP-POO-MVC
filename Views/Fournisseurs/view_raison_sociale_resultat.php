
<form action="?controller=fournisseurs&action=raison_sociale" method="post">
        <table id='table' style="border:3px solid black" >
            <thead style ="background-color:#85C1E9;" >
                <th style="border:3px solid black" >&nbsp;Code fournisseurs&nbsp;</th>
                <th style="border:3px solid black" >&nbsp;Raison sociale&nbsp;</th>
                <th style="border:3px solid black" >&nbsp;Rue fournisseur&nbsp;</th>
                
            </thead>
            
            <br>
            <tr>
                <?php  foreach($fournisseurs as $f ): ?>
                <td style="border:3px solid black" >&nbsp;<?=$f->Code_fournisseur?>&nbsp;</td>
                <td style="border:3px solid black" >&nbsp;<?=$f->Raison_sociale?>&nbsp;</td>
                <td style="border:3px solid black" >&nbsp;<?=$f->Rue_fournisseur?>&nbsp;</td>
            </tr>
            <?php endforeach; ?>
        </table>
            
            <br>
            <input style="background-color:#85C1E9" class="styled" back type="submit" value="Revenir à la page précédente" />
           
            
</form>
<form action="?controller=home&action=home" method="post">
<input style="background-color:#85C1E9" class="styled" back type="submit" value="Accueil" />
</form>