$.noConflict();

// génère les codes de récupération du widget
function recup_widget() {
	$ = jQuery.noConflict();
	l_code = '100%';
	// largeur par défaut
	h_code = '600';
	// largeur par défaut

	function affiche_code() {
		var chJs = "javascript:var%20b=document.body;if(b&&!document.xmlVersion){void(z=document.createElement('script'));void(z.src='" + path + "js/popup.js.php');void(b.appendChild(z));}else{alert('Cette commande ne peut être executée sur votre navigateur');}";
		var chSignet = "Télé-accomp. CyberLoire";
		var chFrame = "<div align='right'>";
		chFrame += "<a href='#' onclick='var b=document.body;if(b&&!document.xmlVersion){void(z=document.createElement(\"script\"));void(z.src=\"" + path + "js/popup.js.php\");void(b.appendChild(z));}else{alert(\"Cette commande ne peut être executée sur votre navigateur\");};return;'><img src='" + path + "images/fullscreen_24x24.png' align='absmiddle' border=0  width='24' height='24'></a>&nbsp;&nbsp;";
		chFrame += "<a href='#' onclick='var b=document.body;if(b&&!document.xmlVersion){void(z=document.createElement(\"script\"));void(z.src=\"" + path + "js/popup.js.php\");void(b.appendChild(z));}else{alert(\"Cette commande ne peut être executée sur votre navigateur\");};return;'>Plein écran</a>";
		chFrame += "</div>";
		chFrame += "<iframe id='wtcoraia' name='wtcoraia' style='overflow: auto ; width: " + l_code + "; height: " + h_code + "; border-style: none;' src='" + path + "index.php'>Désolé, votre navigateur ne prend pas en charge les IFRAME...</iframe>";
		$("#signet").attr("href", chJs);
		$("#signetText").text(chSignet);
		$("#code_html").text(chFrame);
	}

	// look jquery UI
	$("#larg_auto").change(function() {
		larg_auto = $("#larg_auto").find('input[type=radio][checked]').attr('id');
		if(larg_auto == "larg_auto_1") {
			$("#dim_larg").hide('highlight', 'slow');
			l_code = '100%'
			affiche_code();
		} else {
			$("#dim_larg").show('highlight', 'slow');
			$('#dialog').animate({
				scrollTop : '800px'
			}, 5000);
		}
	})

	$("#dim_larg").hide();
	$("#slider_larg").slider({
		min : 150,
		max : 2000,
		value : 600,
		animate : true
	});
	// curseur de sélection de la largeur du widget
	$("#slider_larg").slider({
		slide : function(event, ui) {
			l_code = ui.value;
			var msg = l_code + " pixels";
			$("#largeur").text(msg);
			l_code += "px";
			affiche_code();
		}
	});
	$("#largeur").text($("#slider_larg").slider("value") + " pixels");

	$("#slider_haut").slider({
		min : 400,
		max : 4000,
		value : 600,
		animate : true
	});
	// curseur de sélection de la hauteur du widget
	$("#slider_haut").slider({
		slide : function(event, ui) {
			h_code = ui.value;
			$("#hauteur").text(h_code + " pixels");
			h_code += "px";
			affiche_code();
		}
	});
	$("#hauteur").text($("#slider_haut").slider("value") + " pixels");
	affiche_code();
};

// mets à jour la class CSS de la vignette spark='id' selon le 'statut'
function maj_css(id, statut) {

	var items = [];
	$.each($('a[spark=' + id + ']'), function() {
		//$.log ($(this));
		$(this).removeAttr('href');
		// supprime les classes ayant déjà pu être définies
		$(this).removeClass('indispo');
		$(this).removeClass('dispo');
		$(this).removeClass('occup');
		$(this).removeClass('erreur');
		$(this).unbind('mouseenter mouseleave');
		// ajoute la classe en fonction du statut
		$(this).addClass(statut);
		$(this).hover(function() {
			$(this).addClass(statut + '_hover');
		}, function() {
			$(this).removeClass(statut + '_hover');
		});
		// définie le libellé de la vignette
		if (mode=='vign') {
			switch (statut) {
				case 'dispo':
					txt = "Groupe disponible";
					break;
				case 'occup':
					txt = "Groupe occupé";
					break;
				case 'indispo':
					txt = "Groupe indisponible";
					break;
				default:
					txt = "Erreur...";
					break;
			}	
			$('span', this).html(txt);			
		}		
		// définie la bulle d'information
		switch (statut) {
			case 'dispo':
				txt = " est disponible pour vous télé-accompagner !";
				//$(this).attr('href','http://www.spark-angels.com/w/'+id);
				$(this).attr('href', 'http://dnld0.sparkom.com/sparkangels/sangels/sparkangels.jnlp?guiid=appjar&appid=ai28&sapi2=aRSS,v2,cW,w' + id);
				break;
			case 'occup':
				txt = " est déjà en session de télé-accompagnement";
				break;
			case 'indispo':
				txt = " n'est pas disponible";
				break;
			default:
				txt = " provoque une erreur !";
				break;
		}
		txt = $(this).attr('alt') + txt;
		$(this).qtip({
			content : {
				text : txt
			},
			position : {
				my : 'top left',
				at : 'bottom center',
				target : $(this)
			},
			show : {
				effect : function(offset) {
					$(this).slideDown(200);
					// "this" refers to the tooltip
				}
			},
			style : {
				classes : 'ui-tooltip-rounded'
			}
		});
	});
}

// lance une requete de disponibité de l'enregistrement 'id' vers l'API de Spark-Angels
function req_spark(id) {
	$ = jQuery.noConflict();
	if(id < 0) {
		statut = 'erreur';
		maj_css(id, statut);
	} else {
		$.getJSON('http://pan.sparkom.com/panserver2/getpresencedynamic?widgetId=' + id + '&callback=?', function(data) {
			/* débugage : affiche les données Json reçues
			 var items = [];
			 $.each(data, function(key, val) {
			 $.log ("key="+key+" - val="+val);
			 });
			 */
			statut = data.imageUrl;
			switch (statut) {
				case 'images/presence/available.png':
					statut = 'dispo';
					break;
				case 'images/presence/busy.png':
					statut = 'occup';
					break;
				case 'images/presence/notLogged.png':
					statut = 'indispo';
					break;
				default:
					statut = 'erreur';
					break;
			}
		}).success(function() {
			maj_css(id, statut);
		});
	}
}

// actualise les diponibiltés
function actualise() {
	$ = jQuery.noConflict();
	$.each($('a[spark]'), function() {
		id = $(this).attr('spark');
		if(id != "" && isFinite(id)) {
			req_spark(id);
		}
	});
}

// selectionne un onglet
function select_tab(tab) {
	$ = jQuery.noConflict();
	liste_tab = $("#tabs li")// récupère la liste des onglets : 'li'
	nb = liste_tab.length;
	i = 0;
	while(liste_tab[i].id != tab) {// recherche une 'li' avec l'id recherchée
		i++;
		if(i == nb)
			break;
		// si le compteur est arrivé à la fin sans rien trouvé > arreté !
	}
	if(i < nb)
		$("#tabs").tabs('select', i);
	// si l'onglet a été trouvé, le sélectionner
}

// selectionne un accordion
function select_accordion(acc) {
	$ = jQuery.noConflict();
	liste_acc = $("#accordion > h3")// récupère la liste des accordéon :'h3'
	nb = liste_acc.length;
	i = 0;
	while(liste_acc[i].id != acc) {// recherche une 'li' avec l'id recherchée
		i++;
		if(i == nb)
			break;
		// si le compteur est arrivé à la fin sans rien trouvé > arreté !
	}
	if(i < nb)
		$("#accordion").accordion({
			active : i
		});
	// si l'accordéon a été trouvé, le sélectionner
}


jQuery(document).ready(function($) {
	$(function() {
		// $.log (this);
		$("#menu").hide();

		// popup #dialog (DIV)
		popup = $("#dialog");
		ht = $(document).height() * 0.8;
		// définit la hauteur de la popup car la valeur 80% ne fonctionne pas...
		popup.dialog({
			autoOpen : false,
			modal : true,
			show : 'scale',
			hide : 'scale',
			height : '380',
			width : '90%'
		});

		// onglets
		$("#tabs").tabs({
			load : function(event, ui) {
			}
		});
		if(t != 0)
			select_tab(t);

		// accordion
		$("#accordion").accordion({
			collapsible : true,
			active : false,
			autoHeight : false
		});
		if(a != 0)
			select_accordion(a);

		// affichage des boutons
		// bouton menu
		$("#btMenu").button({
			icons : {
				primary : "ui-icon-home"
			}
		});
		$("#btMenu").click(function() {
			$("#menu").toggle('slow');
		});
		// bouton du lanceur
		$("#btLanceur").button({
			icons : {
				primary : "ui-icon-power"
			}
		});
		$("#btLanceur").click(function() {
			actualise();
		});
		// bouton d'actualisation
		$("#btActualise").button({
			icons : {
				primary : "ui-icon-refresh"
			}
		});
		$("#btActualise").click(function() {
			actualise();

		});
		// bouton de récupération du widget
		$("#btRecup").button({
			icons : {
				primary : "ui-icon-extlink"
			}
		});
		$("#btRecup").click(function() {
			popup.dialog("open");
			popup.dialog("option", "buttons", {
				"Fermer" : function() {
					popup.dialog("close");
				}
			});
			popup.dialog({
				title : "Plus d'informations..."
			});
			popup.load("recup.php", function() {
				recup_widget();
			});
		});
		// bouton d'informations
		$("#btInfo").button({
			icons : {
				primary : "ui-icon-info"
			}
		});
		$("#btInfo").click(function() {
			popup.dialog("open");
			popup.dialog("option", "buttons", {
				"Fermer" : function() {
					popup.dialog("close");
				}
			});
			popup.dialog({
				title : "Plus d'informations..."
			});
			popup.load("info.php");
		});
		actualise();
	});
});
