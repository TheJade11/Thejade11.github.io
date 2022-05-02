<!DOCTYPE html>
<html lang="FR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
	<title>AccuLee</title>
	<!----------Bootstrap + CSS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a4ae43ad01.js" crossorigin="anonymous"></script>
	<script src="bundle/backpax.js"></script>
    <link rel="stylesheet" href="css/fixed.css"/>
	<link rel="stylesheet" href="./css/style.css"/>
	
</head>
<body>
<header class="container-fluid">
	
 <!--exemple Jimmy-->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container-fluid">
			<a class="navbar-brand" href="index.php"><img src="./assets/images/logo.png" alt="LOGO" width="110%" height="110%" class="d-inline-block align-text-top"></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item active">
						<a class="nav-link" href="index.php">Accueil</a>
					</li>
					<li class="nav-item dropdown">
						<a class=" nav-link dropdown-toggle" href="Acupuncture.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Acupuncture
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="#">Action</a>
							<a class="dropdown-item" href="#">Another action</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Something else here</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Troubles traités
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Something else here</a>
						</div>
					</li>
					
					<li class="nav-item active">
						<a class="nav-link" href="biographie.php">Biographie<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="tarifs.php" role="button" aria-haspopup="true" aria-expanded="false">
						 Tarifs
						</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="contact.php">Contact<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="#">About<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="#">    <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="#">EN<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="#">FR<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="#">조<span class="sr-only">(current)</span></a>
					</li>
					
					
				</ul>
			</div>
		</div>
	</nav>
	


 <!--<nav class="navbar navbar-expand-lg navbar-light">
	<div class="container lemenu">
        <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="LOGO" width="100%" height="100%" class="d-inline-block align-text-top"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Accueil</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Acupuncture
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
	  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Troubles traités
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="tarifs.php" role="button" aria-haspopup="true" aria-expanded="false">
          Horaires et Tarifs
        </a>
      </li>
	  <li class="nav-item active">
        <a class="nav-link" href="#">Contact<span class="sr-only">(current)</span></a>
      </li>
	  <li class="nav-item active">
        <a class="nav-link" href="#">About<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">    <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">EN<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">FR<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">조<span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>-->

<!--Start Home Section-->
			<!--<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="container-fluid">
					<a class="navbar-brand" href="#"><img src="images/logo.png" alt="LOGO" width="100%" height="100%" class="d-inline-block align-text-top"></a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
						<div class="collapse navbar-collapse" id="navbarNavDropdown">
							<ul class="navbar-nav">
								<li class="nav-item">
									<form class="navbar-left">
										<a class="nav-link" href="#">Accueil</a>
									</form>
								</li>
								<li class="nav-item">
									<form class="navbar-left">
											<a class="nav-link" href="#">Acupuncture</a>
									</form>
								</li>
								<li class="nav-item">
									<form class="navbar-left">
											<a class="nav-link" href="#">Troubles Traités</a>
									</form>
								</li>
								<li class="nav-item">
									<form class="navbar-left">
											<a class="nav-link" href="#">Horaires et Tarifs</a>
									</form>
								</li>
								<li class="nav-item">
									<form class="navbar-left">
											<a class="nav-link" href="#">Contact</a>
									</form>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">About</a>
								</li>
							</ul>
							<ul class="navbar-nav ml-md-auto">
								<li class="nav-item">
									<a class="nav" href="#">FR</a>
								</li>
								<li class="nav-item">
									<a class="nav" href="#">EN</a>
								</li>
								<li class="nav-item">
									<a class="nav" href="#">조</a>
								</li>
							</ul>
						</div>		
				</div>
			</nav>-->
 
 		

<!--End Home Section-->

</header>
    
