<?php
$largeur_widget = 200;
$path = "http://www.rdac.fr/widget/spark/"; // chemin d'accès au widget (avec le slash final)
$mode = 'widget'; // mode d'affichage du widget par défaut en widget

// $js : génération du code Javascript contenant les éléments de configuration
$js = "	
	path='$path'; // chemin d'accès au widget (avec le slash final)
	l='$l'; // largeur du widget
	t='$t'; // onglet (tab) selectionné
	a='$a'; // accordéon selectionné
	mode='$mode'; // mode d'affichage
   ";
    
$config = array(
	'onglet' => array ( 
		'thema' => array ( 
			"label" => "Thématique",
			"vign" => array (8060,7654,7660,7661,7662,7657,7658,7659),
		),
		'tech' => array ( 
			"label" => "Technique",
			"vign" => array (7665,7664,7656),
		),
		'indiv' => array ( 
			"label" => "Individu",
			"struct" => array (
				"cg42" => array (
					"label" => "Conseil Général de la Loire",
					"vign" => array (8095),
				),
				"cyber_charlieu" => array (
					"label" => "CyberCentre du Pays de Charlieu",
					"vign" => array (8882,8883),
				),
				"cyb_riv_de_gier" => array (
					"label" => "Cyber Espace (Rive de Gier)",
					"vign" => array (8098),
				),
				"fil_num" => array (
					"label" => "Fil numérique (Roanne)",
					"vign" => array (8082),
				),
				"comptoir" => array (
					"label" => "au Comptoir Numérique (St Etienne)",
					"vign" => array (8881,8094,8059,7653,8058,8054),
				),
			),
		),
	),
	'vign' => array (
		8060 => array ( 
			"label" => "Conciergerie",
			"alt" => "La conciergerie",
			"img" => "images/conciergerie.png"
		),
		7654 => array ( 
			"label" => "Education",
			"alt" => "Le groupe 'Education'",
			"img" => "images/education.png"
		),
		7660 => array ( 
			"label" => "Vie associative",
			"alt" => "Le groupe 'Vie associative'",
			"img" => "images/epn.png"
		),
		7661 => array ( 
			"label" => "Handicap",
			"alt" => "Le groupe 'Handicap'",
			"img" => "images/handicap.png"
		),
		7662 => array ( 
			"label" => "Culture libre",
			"alt" => "Le groupe 'Culture libre'",
			"img" => "images/libre.png"
		),
		7657 => array ( 
			"label" => "Sénior",
			"alt" => "Le groupe 'Sénior'",
			"img" => "images/seniors.png"
		),
		7658 => array ( 
			"label" => "Ecologie",
			"alt" => "Le groupe 'Ecologie'",
			"img" => "images/jeuxvideo.png"
		),
		7659 => array ( 
			"label" => "Emploi",
			"alt" => "Le groupe 'Emploi'",
			"img" => "images/emploi.png"
		),
		7665 => array ( 
			"label" => "Wordpress",
			"alt" => "Le groupe Wordpress",
			"img" => "images/wordpress.png"
		),
		7664 => array ( 
			"label" => "Nearbee",
			"alt" => "Nearbee",
			"img" => "images/nearbee.png"
		),
		7656 => array ( 
			"label" => "SparkAngels",
			"alt" => "SparkAngels",
			"img" => "images/sparkangels.png"
			),
		8095 => array ( 
			"label" => "Mehdi Chébira",
			"alt" => "Mehdi Chébira",
			"img" => "images/mehdi_chebira.png"
		),
		8098 => array ( 
			"label" => "Rémy Quesada",
			"alt" => "Rémy Quesada",
			"img" => "images/remi_quesada.png"
		),
		8082 => array ( 
			"label" => "Stéphanie Pawlowski",
			"alt" => "Stéphanie Pawlowski",
			"img" => "images/Stephanie_Pawlowski.png"
		),
		7653 => array ( 
			"label" => "David Réchatin",
			"alt" => "David Réchatin",
			"img" => "images/david.png"
		),
		8058 => array ( 
			"label" => "Roland Niccoli",
			"alt" => "Roland Niccoli",
			"img" => "images/roland.png"
		),
		8054 => array ( 
			"label" => "Yoann Duriaux",
			"alt" => "Yoann Duriaux",
			"img" => "images/yoann.png"
		),
		8059 => array ( 
			"label" => "Delphine Duriaux",
			"alt" => "Delphine Duriaux",
			"img" => "images/delphine.png"
		),
		8094 => array ( 
			"label" => "Antoine Durigan-Cueille",
			"alt" => "Antoine Durigan-Cueille",
			"img" => "images/antoine.png"
		),	
		8882 => array ( 
			"label" => "Christophe Bonnet",
			"alt" => "Christophe Bonnet",
			"img" => "images/christophe_bonnet.png"
		),	
		8883 => array ( 
			"label" => "Françoise Bouchat",
			"alt" => "Françoise Bouchat",
			"img" => "images/francoise_bouchat.png"
		),		
		8881 => array ( 
			"label" => "Eddie Javelle",
			"alt" => "Eddie Javelle",
			"img" => "images/eddie.png"
		),
	),
);
    
?>