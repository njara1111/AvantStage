<!doctype html>
<html lang="fr">
<head>
<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
	<link rel="stylesheet" href="style.css">
 
</head>
<body>
<div class="col-sm-4">
	<h1 class="text-center">Completer les formulaires suivant</h1>
<form id="form" action="exemple.php" method="POST" class="well form-group" >
		<label for="nom">Nom : </label>
		<input type="text" id="nom" name="nom" class="form-control col-sm-4">
		<p id="content" class="label label-default"></p>
<br/>
		<label>Pseudo:</label><input type="text" class="form-control"  name="pseudo" id="pseudo"><br><br>
		<labe>Email :</label><input type="email" class="form-control"  name="email" id="email"><br><br>
		<label>Password:</label><input type="Password" class="form-control"  name="pass" id="soratr" maxlength: 20>
		<span id="essayer"></span><br><br>
		<button type="submit" class="btn btn-block btn-success">Terminer</button>
</form>
</div>

<div id="message">
  <h3>le mot de pass doit:</h3>
  <p id="length" class="invalid">Minimum <b>10 characters</b></p>
</div>

<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script src="app.js"> </script>
<script src="style.css"> </script>
</body>
</html>


