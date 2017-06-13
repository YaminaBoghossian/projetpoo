<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <h1> Please fill in </h1>
		<form action="#"method="POST">
			<p>
				<label for="nom"> Name: </label>
				<input type="text" name ="name" id="nom" />
			</p>
			<p>
				<label for="prenom"> Firstname: </label>
				<input type="text" name="firstname" id="prenom" />
			</p>
			<p>
				<label for="age"> Age: </label>
				<input type="number" name="age" id="age" min="0" max="130"/>
			</p>
			<p>
				<label for="gender"> Gender: </label>
				<input type= "radio" name="gender" value="Male">
				 Male
				<input type= "radio" name="gender" value="Female">
				 Female
			
			<p>
				<label for="email"> Email: </label>
				<input type= "email" name="email" id="email" />
			</p>
			
			<p> <label for="region"> region 					</label>
				<select name="region" id="region">
					

						<option value="choisir">Select your region</option>
						<option value="rhonealpesauvergne">Rhone Alpes Auvergne</option>
						<option value="Bouchedurhone">Bouches du Rhone</option>
						<option value="PACA">PACA</option>
						<option value="Guyane"> Guyane</option>
						<option value="Martinique"> Martinique</option>
						<option value="Reunion"> Reunion</option>
				</select>
			</p>
			<br/>
			<p>
				<input type="submit" name="nom" value="Let's go!"/>
			</p>
		</form>
        <?php
        // On va creer une variable representant les infos sur chaque personne 
        // puis on fait un var dump de notre variable contenant les infos
        
        $info = new personne($name, $firstname, $age, $gender, $region, $email);
        
        
        
        if (isset($_POST['name'])){
            //on echappe le contenu du post avec filter _input_array//
           $post = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
           //on include la page personne?php ou se trouve notre classe personne
           //cette etape ne sera plus necessaire lorsxequeonn utilisera les namespace
           include_once './personne.php';
           //on cree une instance de personne en lui fournissan un argument du 
           //constructzereur les valeurs du formulaire 
        _dump($info);
        // put your code here
        ?>
    </body>
</html>
