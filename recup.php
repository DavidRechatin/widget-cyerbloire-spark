<?php
// charge la configuration
include("config.php");

?>	
<hr>
== EN COURS DE DEVELOPPEMENT == <br /><br />
== NE PAS UTILISER !! ==
<hr><br /><br />
<div id="recup_code">
<strong>• Lien web</strong><br /><br />
Voici le lien permettant d'afficher le widget seul en plein écran comme ceci : <a href="<?php echo $path; ?>" target="_blank"><?php echo $path; ?></a>
<blockquote><input type="text" size="60" onclick="this.select();" value="<?php echo $path;?>"></blockquote>
<strong>• En 1 clic !</strong><br /><br />
Si vous utilisez les navigateurs Mozilla FireFox ou Google Chrome, déplacez le pavé ci-dessous dans votre barre personnelle, et utilisez le nouveau signet créé pour afficher instantanément le widget.<br><br> 
<blockquote><a id="signet" href=""><img src="images/fichier_10x13.png" width="10" height="13" /><span id="signetText"></span></a><br /></blockquote>
<strong>• Code HTML</strong><br /><br />Pour intégrer ce widget de liens à votre blog, faites un 'copier' de ce code puis 'coller' le dans votre page HTML :
<blockquote>
<textarea id="code_html" wrap="hard" readonly="readonly" cols="60 rows="2" onclick="this.select();"></textarea><br /><br />
<strong>Personnaliser le widget...</strong><br /><br />
Souhaitez-vous que le widget s'adapte à toute la largeur disponible automatiquement ?<br />
(Certaines fonctionnalités du widget (description, aperçu des modules...) seront automatiquement désactivées si la largeur effective du widget est trop étroite. Celles-ci resteront disponibles avec le bouton 'Plein écran'...)
<div id="larg_auto">
		<input type="radio" id="larg_auto_1" name="radio" checked="checked" /><label for="larg_auto_1">Oui</label>
		<input type="radio" id="larg_auto_0" name="radio" /><label for="larg_auto_0">Non</label>
</div><br />
<div id="dim_larg">
Choisissez la largeur souhaitée avec ce curseur : <span id="largeur"></span><br /><br />
<div id="slider_larg"></div><br />
</div>
Choisissez la hauteur souhaitée avec ce curseur : <span id="hauteur"></span><br /><br />
<div id="slider_haut"></div>
</blockquote>



</div>