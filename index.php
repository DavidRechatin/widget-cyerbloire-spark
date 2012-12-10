<?php
include ("config.php");

// onglet (tab) selectionné
if (isset($_GET['t'])) {
	$t = $_GET['t'];
} else {
	$t = 0;
}
// accordéon selectionné
if (isset($_GET['a'])) {
	$a = $_GET['a'];
} else {
	$a = 0;
}
// largeur du widget
if (isset($_GET['l'])) {
	$l = $_GET['l'];
} else {
	$l = $largeur_widget;
}
// $_GET["id"] récupère une vignette spécifigque à afficher
if (isset($_GET["id"])) {
	$ids = explode(',', $_GET["id"]);
	$mode = 'vign';
	//  mode d'affichage du widget en vignette unique
}
?>
<html>
	<head>
		<link type="text/css" href="css/jquery-ui-1.8.11.custom.css" rel="stylesheet" />
		<link type="text/css" href="css/widget.css" rel="stylesheet" />
		<link type="text/css" href="css/jquery.qtip.css" rel="stylesheet"  />
		<script type="text/javascript" src="js/jquery-1.5.1.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.8.11.custom.min.js"></script>
		<script type="text/javascript" src="js/jquery.qtip.min.js"></script>
		<script type="text/javascript" src="js/jLog.min.js"></script>
		<script type="text/javascript" src="js/widget.js"></script>
		<title>Télé-accompagnement CyberLoire</title>
		<script type="text/javascript"><?php echo $js;?></script>
	</head>
	<body>
		<div id="container">
<?php if ($mode=='vign') {
// mode d'affichage en vignette	unique
foreach ($ids as $id) {
echo "
<a spark=\"$id\" class=\"vign\" target=\"_blank\" alt=\"" . $config['vign'][$id]['alt'] . "\">
<img src=\"" . $config['vign'][$id]['img'] . "\" width=\"48\" height=\"48\"/><br />
<span>" . $config['vign'][$id]['label'] . "</span>
</a>
";
}
echo "<strong>Besoin d'aide ?</strong><br />Faites appel à la communauté d'entraide à distance via SparkAngels... <a href=\"http://cyberloire.myurm.biz/xwiki/bin/view/Space_ProjetSparkAngels_Wiki/PrsentationetinstallationdeSparkAngels\" target=\"_blank\">Rejoindre !</a>";
// fin mode d'affichage en vignette	unique
?>
<?php } else {
	// mode d'affichage en widget complet
?>
<button id="btMenu">
	Menu
</button>
<div id="titre">
	<strong>Spark CyberLoire</strong>
	<br />
	le réseau de télé-accompagnement de la CyberLoire !
	<br />
</div>
<div id="menu">
	<a id="btLanceur" class="bt_menu" href="http://dnld0.sparkom.com/sparkangels/sangels/ai28/sparkangels.jnlp?guiid=appjar&appid=ai28" target="_blank">Lancer Spark CyberLoire</a>
	<button id="btActualise" class="bt_menu">
		Actualiser les disponibilités
	</button>
	<button id="btRecup" class="bt_menu">
		Récupérez ce widget
	</button>
	<button id="btInfo" class="bt_menu">
		Plus d"infos...
	</button>
	<div class="clear"></div>
</div>
<div id="tabs">
	<ul>
		<?php
		foreach ($config['onglet'] as $onglet => $content) {
			echo "<li id=\"$onglet\"><a href=\"#content_$onglet\">" . $content['label'] . "</a></li>";
		}
		?>
	</ul>
	<?php

	foreach ($config['onglet'] as $onglet => $content) {
		switch ($onglet) {
			case 'thema' :
				echo "<div id=\"content_$onglet\">\n";
				foreach ($content['vign'] as $id) {
					echo "<a spark=\"$id\" class=\"vign\" target=\"_blank\" alt=\"" . $config['vign'][$id]['alt'] . "\"><img src=\"" . $config['vign'][$id]['img'] . "\" width=\"48\" height=\"48\"/><br /><span>" . $config['vign'][$id]['label'] . "</span> </a>\n";
				};
				echo "<div class=\"clear\"></div>\n";
				echo "</div> <!-- fin content_$onglet -->\n";
				break;

			case 'tech' :
				echo "<div id=\"content_$onglet\">\n";
				foreach ($content['vign'] as $id) {
					echo "<a spark=\"$id\" class=\"vign\" target=\"_blank\" alt=\"" . $config['vign'][$id]['alt'] . "\"><img src=\"" . $config['vign'][$id]['img'] . "\" width=\"48\" height=\"48\"/><br /><span>" . $config['vign'][$id]['label'] . "</span> </a>\n";
				};
				echo "<div class=\"clear\"></div>\n";
				echo "</div> <!-- fin content_$onglet -->\n";
				break;

			case 'indiv' :
				echo "<div id=\"content_$onglet\">\n";
				echo "<div id=\"accordion\">\n";
				foreach ($content['struct'] as $struct => $value) {
					echo "<h3 id=\"" . $struct . "\"><a href=\"#\">" . $value['label'] . "</a></h3>\n";
					echo "<div>\n";
					foreach ($value['vign'] as $id) {
						echo "<a spark=\"$id\" class=\"vign\" target=\"_blank\" alt=\"" . $config['vign'][$id]['alt'] . "\"><img src=\"" . $config['vign'][$id]['img'] . "\" width=\"48\" height=\"48\"/><br /><span>" . $config['vign'][$id]['label'] . "</span> </a>\n";
					};
					echo "<div class=\"clear\"></div>\n";
					echo "</div>\n";
				};
				echo "</div> <!-- fin accordion -->\n";
				echo "</div> <!-- fin content_$onglet -->\n";
				break;
		}
	};
	?>
</div>
<!-- fin tabs -->
</div> <!-- fin container -->
<br />
<a href="http://www.rdac.fr/" target="_blank"><img src="images/logo_rdac_23x24.png" width="23" height="24"/></a>
<a href="http://www.loire.fr/" target="_blank"><img src="images/logo_cg42_24x24.png" width="24" height="24"/></a>
<a href="http://www.zoomacom.org/" target="_blank"><img src="images/logo_zoomacom_19x24.png" width="19 height="24"/></a>
<a href="http://www.spark-angels.com/" target="_blank"><img src="images/logo_sparkangels_104x24.png" width="104" height="24"/></a>
<?php } // mode d'affichage en widget complet?>

<div id="recup"></div>

<div id="dialog">
<p>Chargement en cours...</p>
</div>
</body>
</html> 