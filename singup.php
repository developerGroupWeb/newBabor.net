<?php
  include 'headerFlat.php';
?>

<div class="d-none d-sm-block">
	<div class="d-none d-sm-block singin-nav" style="background: #9d1e65;">
		<div class="px-5">
	        <nav class="row navbar navbar-expand-sm font-weight-bold">
	          <div class="collapse navbar-collapse">
	            <ul class="navbar-nav col">
	              <li class="nav-item d-none d-lg-block">
	                <a class="nav-link" href="#" style="color: #111; background: #eee; padding: 5px 20px 5px 20px; border-radius: 10px;">Fr</a>
	              </li>
	              <li class="nav-item d-block d-lg-none">
	                <a class="navbar-brand" href="index.php" style="color: #fff;"><img src="images/Logo45.png"></a>
	              </li>
	            </ul>

	            <ul class="navbar-nav col">
	              <li class="nav-item d-none d-lg-block">
	                <a class="navbar-brand" href="index.php" style="color: #fff;"><img src="images/Logo45.png"></a>
	              </li>
	            </ul>

	            <ul class="navbar-nav ml-auto">
	              <li class="nav-item d-sm-none d-md-block">
	                <a class="nav-link" style="color: #fff;">Déjà membre ?</a>
	              </li>
	              <li class="nav-item d-sm-none d-md-block">
					<a class="nav-link" href="singin.php" style="color: #111; background: #eee; padding: 5px 20px 5px 20px; border-radius: 10px;">connexion</a>
	              </li>
	              <li class="nav-item d-sm-block d-md-none">
	              	<a class="nav-link" href="singin.php" style="color: #111; background: #eee; padding: 5px 20px 5px 20px; border-radius: 10px;">Connexion</a>
	              </li>
	            </ul>
	          </div>
	        </nav>
	    </div>
	</div>

	<div class="col-lg-6 offset-lg-3 col-sm-8 offset-sm-2 singup-content pb-5">
		<div class="row">
			<div class="col-md-9 col-sm-12">
				<div class="row">
					<h3>Crée un nouveau profil</h3>
				</div>
				<div class="row mr-5">
					<p>Rejoins la <strong>communauté des nouveaux amis sur Babor ! Rencontre et chatte.</strong></p>
				</div>
				<div class="row mb-5">
					<form class="col-sm-12" method="post" action="">
						<div class="form-group row mb-4">
						    <div class="col-sm-12">
						      <input type="text" class="row form-control" id="name" placeholder="Prénom">
						    </div>
						</div>
						<div class="form-group row mb-4">
						    <div class="col-sm-4">
						        <select class="row form-control">
							      <option>Jour...</option>
							      <option>01</option>
							      <option>02</option>
							      <option>03</option>
							      <option>04</option>
							      <option>05</option>
							      <option>06</option>
							      <option>07</option>
							      <option>08</option>
							      <option>09</option>
							      <option>10</option>
							      <option>11</option>
							      <option>12</option>
							      <option>13</option>
							      <option>14</option>
							      <option>15</option>
							      <option>16</option>
							      <option>17</option>
							      <option>18</option>
							      <option>19</option>
							      <option>20</option>
							      <option>21</option>
							      <option>22</option>
							      <option>23</option>
							      <option>24</option>
							      <option>25</option>
							      <option>26</option>
							      <option>27</option>
							      <option>28</option>
							      <option>29</option>
							      <option>30</option>
							      <option>31</option>
							    </select>
						    </div>
						    <div class="col-sm-4">
						      <select class="row form-control">
						      	<option>Mois...</option>
						      	<option>janvier</option>
						      	<option>février</option>
						      	<option>mars</option>
						      	<option>avril</option>
						      	<option>mai</option>
						      	<option>juin</option>
						      	<option>juillet</option>
						      	<option>août</option>
						      	<option>septembre</option>
						      	<option>octobre</option>
						      	<option>novembre</option>
						      	<option>décembre</option>
						      </select>
						    </div>
						    <div class="col-sm-4">
						      <input type="text" class="row form-control" id="name" placeholder="Année...">
						    </div>
						</div>
						<div class="form-group row mb-4">
						    <div class="col-sm-12">
						      <input type="search" class="row form-control" id="name" placeholder="Saisir ton emplacement">
						      <small id="emailHelp" class="form-text text-muted ml-3">p. ex. cotonou, Benin</small>
						    </div>
						</div>
						<div class="form-check form-check-inline mb-4 mr-5">
						  	<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
						  	<label class="form-check-label" for="inlineRadio1">Homme</label>
						</div>
						<div class="form-check form-check-inline mb-4">
						  	<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
						  	<label class="form-check-label" for="inlineRadio2">Femme</label>
						</div>
						<div class="form-group row mb-4">
						    <div class="col-sm-12">
						      <input type="email" class="row form-control" id="email" placeholder="E-mail ou numéro de téléphone">
						    </div>
						</div>
						<div class="form-group row">
						    <div class="col-sm-12">
						      <input type="password" class="row form-control" id="password" placeholder="Crée ton mot de passe">
						      <small id="emailHelp" class="form-text text-muted ml-3">Le mot de passe doit comprendre au moins 5 caractères</small>
						    </div>
						</div>
						<div class="form-check my-4" style="margin-left: 100px;">
						  <input class="form-check-input" type="checkbox" value="" id="check">
						  <label class="form-check-label" for="check">
						    Se souvenir de moi
						  </label>
						</div>
						<div class="singin-btn-validate" style="margin-left: 100px;">
							<button type="submit" class="btn col-6 row font-weight-bold" role="button">S'inscrire</button>
						</div>
					</form>
				</div>
				<small style="font-size: 11px;">En continuant, tu confirmes avoir lu et accepté nos <a href="">Conditions Générales d'Utilisation</a>, notre <a href="">Politique de Confidentialité</a> ainsi que notre <a href="">Politique en matière de Cookies</a></small>
			</div>
			<div class="col-md-3 col-sm-12" style="margin-top: 40px;">
				<p class="my-4 text-center">Se connecter avec :</p>
				<div class="row">
					<div class="col-md-12 col">
						<div class="row singin-btn1">
							<a class="btn mb-3 mx-auto bg-dark" href="#" role="button"><i style="margin-right: 8px;" class="fa fa-facebook-official" aria-hidden="true"></i> <small class="font-weight-bold">Facebook</small></a>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 col">
						<div class="row singin-btn2">
							<a class="btn mx-auto bg-warning" href="#" role="button"><i style="margin-left: -10px; margin-right: 10px;" class="fa fa-google" aria-hidden="true"></i> <small class="font-weight-bold">Google</small></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<hr>
		<footer class="row">
			<div class="col-12 bg-white">
				<div class="row">
					<div class="footerContent">
						<a href="">A propos</a>
						<a href="">CGU</a>
						<a href="">Confidentialité</a>
						<a href="">Liens rapides</a>
						<a href="">Aide</a>
					</div>
				</div>

				<div class="row">
					<small class="ml-auto pr-4 pb-4 font-weight-bold">2018 © Babor</small>
				</div>
			</div>
		</footer>
	</div>
</div>

<!--singin page on mobile-->
<div class="container wow fadeInLeft pl-5 d-block d-sm-none">
	<div class="row">
		<div class="col-12">
			<div class="row">
				<div class="mx-auto mt-4 d-inline-flex">
					<img src="images/Logo45.png" style="width: 150px; height: 30px; margin-bottom: 80px;">
				</div>
			</div>
		</div>
	</div>

	<form class="col-12">
		<div class="form-group row mb-4">
		    <div class="col-12">
		      <input type="email" class="row form-control" id="email" placeholder="E-mail ou numéro de téléphone">
		    </div>
		</div>
		<div class="form-group row">
		    <div class="col-12">
		      <input type="password" class="row form-control" id="password" placeholder="Mot de passe">
		    </div>
		</div>
		<div class="form-check my-4">
		  <input class="form-check-input" type="checkbox" value="" id="check">
		  <label class="form-check-label" for="check">
		    Se souvenir de moi
		  </label>
		</div>
		<div class="col-12">
			<div class="row">
				<button class="btn btn-primary w-100 mr-4" role="button">Se connecter</button>
			</div>
		</div>
		<p class="mx-auto text-center p-2"><a href="" style="color: #b6b6b6;">Mot de passe oublié ?</a></p>
	</form>

	<div class="row">
		<div class="mx-auto"><a href="index.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a></div>
	</div>

</div>

</body>
</html>