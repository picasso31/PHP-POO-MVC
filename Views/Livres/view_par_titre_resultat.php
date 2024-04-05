<form action="?controller=livres&action=par_titre" method="post">
    
<table id='table' style="border:3px solid black">
    <thead style ="background-color:gray;">
       <th style="border:3px solid black"> <strong> &nbsp; ISBN&nbsp;</strong></th> 
        <strog><th style="border:3px solid black">  <strong> &nbsp; Titre&nbsp; <strong> </th>
        <strog><th style="border:3px solid black"> <strong> &nbsp;Theme&nbsp; <strong></th>
        <strog><th style="border:3px solid black">  <strong> &nbsp; Nombre de pages&nbsp; <strong></th>
        <strog><th style="border:3px solid black"> <strong>&nbsp; Format&nbsp;<strong></th>
        <strog><th style="border:3px solid black"> <strong>&nbsp;Nom de l'auteur&nbsp; <strong></th>
        <strog><th style="border:3px solid black"> <strong> &nbsp; Prénom&nbsp; <strong></th>
        <strog><th style="border:3px solid black">  <strong>&nbsp;Éditeur&nbsp;<strong></th>
        <strog><th style="border:3px solid black"> <strong>&nbsp; Année d'édition&nbsp; <strong></th>
        <strog><th style="border:3px solid black"><strong> &nbsp;Prix &nbsp; <strong></th>
        <strog><th style="border:3px solid black"> <strong>&nbsp;Langue &nbsp;<strong></th>
        
    </thead>
    <?php  foreach($livres as $l ): ?>
        <!-- &nbsp; balise d'ecpace html -->
    <tr style="border:3px solid black">
        <td style="border:3px solid black">&nbsp;<?=$l->ISBN?>&nbsp;</td>
        <td style="border:3px solid black">&nbsp;<?=$l->Titre_livre?>&nbsp;</td>
        <td style="border:3px solid black">&nbsp;<?=$l->Theme_livre?>&nbsp;</td>
        <td style="border:3px solid black">&nbsp;<?=$l->Nbr_pages_livre?>&nbsp;</td>
        <td style="border:3px solid black">&nbsp;<?=$l->Format_livre?>&nbsp;</td>
        <td style="border:3px solid black">&nbsp;<?=$l->Nom_auteur?>&nbsp;</td>
        <td style="border:3px solid black">&nbsp;<?=$l->Prenom_auteur?>&nbsp;</td>
        <td style="border:3px solid black">&nbsp;<?=$l->Editeur?>&nbsp;</td>
        <td style="border:3px solid black">&nbsp;<?=$l->Annee_edition?>&nbsp;</td>
        <td style="border:3px solid black">&nbsp;<?=$l->Prix_vente?>&nbsp;</td>
        <td style="border:3px solid black">&nbsp;<?=$l->Langue_livre?>&nbsp;</td>
       
    </tr>
    
    <?php endforeach; ?>
    <br>
</table>
<br>
 
<input class="styled" type="submit" value="retour" />
</form>
</div>            
              