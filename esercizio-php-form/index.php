<?php
$nome = (isset($_POST['nome'])) ? $_POST['nome'] : '';
$cognome = (isset($_POST['cognome'])) ? $_POST['cognome'] : '';
$indirizzo = (isset($_POST['indirizzo'])) ? $_POST['indirizzo'] : '';

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>My form</title>
  </head>
  <body>
    <div class="container">
    	<div class="alert alert-primary" role="alert">

    		<?php
    		 foreach ($_POST as $key => $value) {
    		   print $key . ': ' . $value . '<br>';
    		 }
    		?>
    	</div>
		    	<h1>inserisci i tuoi dati</h1>

			    <form action="index.php" method="post">
			  		<div class="form-group">
				    	<label for="name"> Nome:</label>
				    	<input type="text  class="form-control" id="name" name="nome" aria-describedby="emailHelp" placeholder="Il tuo nome ">
				    	<small id="emailHelp" class="form-text text-muted">Iserisci il tuo nome</small>
				    </div>
			  		<div class="form-group">
			    		<label for="name"> Cognome:</label>
			    		<input type="text  class="form-control" id="surname" name="cognome" aria-describedby="emailHelp" placeholder="Il tuo cognome ">
			    		<small id="emailHelp" class="form-text text-muted">Iserisci il tuo cognome</small>
			  		</div>
			  		<div class="form-group">
				    	<label for="name"> Indirizzo:</label>
				    	<input type="text  class="form-control" id="address" name="indirizzo" aria-describedby="emailHelp" placeholder="Il tuo indirizzo ">
				    	<small id="emailHelp" class="form-text text-muted">Iserisci il tuo indirizzo</small>
			    	</div>
			    	<button type="submit" class="btn btn-primary">Iniva</button>
			    </form>
		
  	</div>
  
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html> 
<!-- fare una lista puntata per nome,cognome e indirizzo -->   