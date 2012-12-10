<?php include("config.php"); ?>
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
<script type="text/javascript">
<?php echo $js; ?>
</script>

</head>
<body>
<div id="container">
<?php if ($mode=='vign') { 
// mode d'affichage en vignette	unique
?>	
<a spark="7662" class="vign" target="_blank" alt="Le groupe 'Culture libre'">
	<img src="images/libre.png" width="48" height="48"/><br />
	<span>Culture libre</span>
</a>
<strong>Besoin d'aide ?</strong><br />Faites appel à la communauté d'entraide à distance via SparkAngels...
<?php } else { 
// mode d'affichage en widget complet	
?>

	<div id="tabs">
<button id="btMenu">Menu</button>
<div id="titre"><strong>Spark CyberLoire</strong><br />le réseau de télé-accompagnement de la CyberLoire !<br /></div>
<div id="menu">
	<a id="btLanceur" href="http://dnld0.sparkom.com/sparkangels/sangels/ai28/sparkangels.jnlp?guiid=appjar&appid=ai28" target="_blank">Lancer Spark CyberLoire</a>
	<button id="btRecup">Récupérez ce widget</button>
	<button id="btActualise">Actualiser les disponibilités</button>
	<button id="btInfo">Plus d"infos...</button><br>
</div>
		<ul>
		<li id="thema"><a href="#content_thema">Thématique</a></li>
		<li id="tech"><a href="#content_tech">Technique</a></li>
		<li id="indiv"><a href="#content_indiv">Individus</a></li>
		</ul>
		<div id="content_thema">
			<a spark="8060" class="vign" target="_blank" alt="La conciergerie">
				<img src="images/conciergerie.png" width="48" height="48"/><br />
				<span>Conciergerie</span>
			</a>
			<a spark="7654" class="vign" target="_blank" alt="Le groupe 'Education'">
				<img src="images/education.png" width="48" height="48"/><br />
				<span>Education</span>
			</a>
			<a spark="7660" class="vign" target="_blank" alt="Le groupe 'Vie associative'">
				<img src="images/epn.png" width="48" height="48"/><br />
				<span>Vie associative</span>
			</a>
			<a spark="7661" class="vign" target="_blank" alt="Le groupe 'Handicap'">
				<img src="images/handicap.png" width="48" height="48"/><br />
				<span>Handicap</span>
			</a>
			<a spark="7662" class="vign" target="_blank" alt="Le groupe 'Culture libre'">
				<img src="images/libre.png" width="48" height="48"/><br />
				<span>Culture libre</span>
			</a>
			<a spark="7657" class="vign" target="_blank" alt="Le groupe 'Sénior'">
				<img src="images/seniors.png" width="48" height="48"/><br />
				<span>Sénior</span>
			</a>
			<a spark="7658" class="vign" target="_blank" alt="Le groupe 'Ecologie'">
				<img src="images/jeuxvideo.png" width="48" height="48"/><br />
				<span>Ecologie</span>
			</a>
			<a spark="7659" class="vign" target="_blank" alt="Le groupe 'Emploi'">
				<img src="images/emploi.png" width="48" height="48"/><br />
				<span>Emploi</span>
			</a>
			<div class="clear">
			</div>
		</div>
		<div id="content_tech">
			<a spark="7665" class="vign" target="_blank" alt="Le groupe 'Wordpress'">
				<img src="images/wordpress.png" width="48" height="48"/><br />
				<span>Wordpress</span>
			</a>
			<a spark="7664" class="vign" target="_blank" alt="Le groupe 'Nearbee'">
				<img src="images/nearbee.png" width="48" height="48"/><br />
				<span>Nearbee</span>
			</a>
			<a spark="7656" class="vign" target="_blank" alt="Le groupe 'SparkAngels'">
				<img src="images/sparkangels.png" width="48" height="48"/><br />
				<span>SparkAngels</span>
			</a>
			<div class="clear">
			</div>
		</div>
		<div id="content_indiv">
			<div id="accordion">
				<h3 id="cg42"><a href="#">Conseil Général de la Loire</a></h3>
				<div>
					<a spark="8095" class="vign" target="_blank" alt="Mehdi Chébira">
						<img src="images/mehdi_chebira.png" width="48" height="48"/><br />
						<span>Mehdi Chébira</span>
					</a>
					<div class="clear">
					</div>
				</div>
				<h3 id="cyber_charlieu"><a href="#">CyberCentre du Pays de Charlieu</a></h3>
				<div>
					<a spark="8882" class="vign" target="_blank" alt="Christophe Bonnet">
						<img src="images/christophe_bonnet.png" width="48" height="48"/><br />
						<span>Christophe Bonnet</span>
					</a>
					<a spark="8883" class="vign" target="_blank" alt="Françoise Bouchat">
						<img src="images/francoise_bouchat.png" width="48" height="48"/><br />
						<span>Françoise Bouchat</span>
					</a>
					<div class="clear">
					</div>
				</div>
				<h3 id="fil_num"><a href="#">Cyber Espace (Rive de Gier)</a></h3>
				<div>
					<a spark="8098" class="vign" target="_blank" alt="Rémy Quesada">
						<img src="images/remi_quesada.png" width="48" height="48"/><br />
						<span>Rémy Quesada</span>
					</a>
					<div class="clear">
					</div>
				</div>
				<h3 id="fil_num"><a href="#">Fil numérique (Roanne)</a></h3>
				<div>
					<a spark="8082" class="vign" target="_blank" alt="Stéphanie Pawlowski">
						<img src="images/Stephanie_Pawlowski.png" width="48" height="48"/><br />
						<span>Stéphanie Pawlowski</span>
					</a>
					<div class="clear">
					</div>
				</div>
				<h3 id="zoom"><a href="#">au Comptoir Numérique (Saint-Etienne)</a></h3>
				<div>
					<a spark="8884" class="vign" target="_blank" alt="David Réchatin">
						<img src="images/david.png" width="48" height="48"/><br />
						<span>David Réchatin</span>
					</a>
					<a spark="8058" class="vign" target="_blank" alt="Roland Niccoli">
						<img src="images/roland.png" width="48" height="48"/><br />
						<span>Roland Niccoli</span>
					</a>
					<a spark="8054" class="vign" target="_blank" alt="Yoann Duriaux">
						<img src="images/yoann.png" width="48" height="48"/><br />
						<span>Yoann Duriaux</span>
					</a>
					<a spark="8059" class="vign" target="_blank" alt="Delphine Duriaux">
						<img src="images/delphine.png" width="48" height="48"/><br />
						<span>Delphine Duriaux</span>
					</a>
					<a spark="8094" class="vign" target="_blank" alt="Antoine Durigan-Cueille">
						<img src="images/antoine.png" width="48" height="48"/><br />
						<span>Antoine Durigan-Cueille</span>
					</a>
					<a spark="8881" class="vign" target="_blank" alt="Eddie Javelle">
						<img src="images/eddie.png" width="48" height="48"/><br />
						<span>Eddie Javelle</span>
					</a>
					<div class="clear">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<br />
<a href="http://www.rdac.fr/" target="_blank"><img src="images/logo_rdac_23x24.png" width="23" height="24"/></a>
<a href="http://www.loire.fr/" target="_blank"><img src="images/logo_cg42_24x24.png" width="24" height="24"/></a>
<a href="http://www.zoomacom.org/" target="_blank"><img src="images/logo_zoomacom_19x24.png" width="19 height="24"/></a>
<a href="http://www.spark-angels.com/" target="_blank"><img src="images/logo_sparkangels_104x24.png" width="104" height="24"/></a>
<?php } ?>

<div id="recup"></div>

<div id="dialog">
	<p>Chargement en cours...</p>
</div>
</body>
</html>
