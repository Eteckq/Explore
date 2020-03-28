<?php $title = 'Inscription'; ?>
<?php ob_start(); ?>

			<div class="row text-center fill">
				<div class="col-sm-12" style="background-color: lightgrey;">
					<div class="row main">
						<div class="col-sm-7">
						</div>
						<div class="col-sm-4" style="background-color: lightblue;">

							<div class="alert alert-danger" id="erreur1" style="margin-top: 15px; display: none"><p>Vous devez remplir tous les champs !</p></div>
							<div class="alert alert-danger" id="erreur2" style="margin-top: 15px; display: none"><p>Votre nom d'utilisateur doit contenir au moins 4 caractères !</p></div>
							<div class="alert alert-danger" id="erreur3" style="margin-top: 15px; display: none"><p>Votre mot de passe doit contenir au moins 6 caractères !</p></div>
							<div class="alert alert-danger" id="erreur4" style="margin-top: 15px; display: none"><p>Les mots de passes ne correspondent pas !</p></div>
							<div class="alert alert-danger" id="erreur5" style="margin-top: 15px; display: none"><p>Le pseudo que vous avez choisi est déjà utilisé, merci d'en choisir un autre !</p></div>

							<h2>Inscription</h2>

							<form class="login-form" action="index.php?action=regist" method="post">
								<p class="login-form-content">Pseudo :</p><input type="text" id="pseudo" class="champ" name="login"><br>
								<p class="login-form-content">Mot de passe :</p><input type="password" id="mdp" class="champ" name="pass"><br>
								<p class="login-form-content">Confirmation :</p><input type="password" id="mdpConfirm" class="champ"><br>
								<input type="submit" id="envoi" value="S'inscrire">
							</form>
						</div>
						<div class="col-sm-1"></div>
					</div>
				</div>
			</div>


<script>

$(document).ready(function(){ //Gestion des erreurs, sur le client, une autre verif est faite côté serveur
    
    var $pseudo = $('#pseudo'),
        $mdp = $('#mdp'),
        $mdpConfirm = $('#mdpConfirm'),
        $envoi = $('#envoi'),
        $erreur1 = $('#erreur1'),
        $erreur2 = $('#erreur2'),
        $erreur3 = $('#erreur3'),
        $erreur4 = $('#erreur4'),
        $erreur5 = $('#erreur5');

	function couleur($champ,$couleur){
		if ($couleur == "vert") {
	        $($champ).css({ // on rend le champ rouge
	            borderColor : 'green',
		    	color : 'green'
	        });
		}
		if($couleur == "rouge"){
	        $($champ).css({ // si tout est bon, on le rend vert
		     	borderColor : 'red',
		     	color : 'red'
		 	});
	    }
	}

	$envoi.click(function(e){ //Lors du clique sur submit
         // on annule la fonction par défaut du bouton d'envoi

	    if($($pseudo).val().length < 4){ // si le pseudo est inférieur a 4
			couleur($pseudo,"rouge");
			$erreur2.slideDown();
			e.preventDefault();
	    }
	    else{
			couleur($pseudo,"vert");
			$erreur2.slideUp();
	    }


	    if($($mdp).val().length < 6){ // si le password est inférieur a 6
			couleur($mdp,"rouge");
			$erreur3.slideDown();
			e.preventDefault();
	    }
	    else{
			couleur($mdp,"vert");
			$erreur3.slideUp();
	    }


	    if($($mdpConfirm).val() != $mdp.val()){ // si la confirmation est différente du mot de passe
			couleur($mdpConfirm,"rouge");
			$erreur4.slideDown();
			e.preventDefault();
	    }
	    else{
			couleur($mdpConfirm,"vert");
			$erreur4.slideUp();
	    }




    });


});

</script>

<?php $content = ob_get_clean(); ?>
<?php require('view/guest/template.php'); ?>