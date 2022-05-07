<?php
session_start();
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE | E_CORE_ERROR | E_CORE_WARNING | E_COMPILE_ERROR | E_COMPILE_WARNING | E_USER_ERROR | E_USER_WARNING | E_USER_NOTICE | E_RECOVERABLE_ERROR | E_USER_DEPRECATED);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Home Title</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><?php echo(file_get_contents("site_config/WebsiteName.txt")); ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
			    <?php echo(file_get_contents("site_config/headerbuttons.txt")); ?>
			  <?php
				if($_SESSION['email'])
				{
					echo('<li class="nav-item">');
					echo('<a class="nav-link" href="guestbook.php">Message Board</a>');
					echo('</li>');
				}
				if($_SESSION['email'] == file_get_contents("site_config/admin_email.txt"))
				{
					echo('<li class="nav-item">');
					echo('<a class="nav-link" href="manage.php">Admin Panel</a>');
					echo('</li>');
				}
			  ?>
                </ul>
                <span class="navbar-text">
				<?php
					if (!isset($_SESSION['email']) == true) {
					    echo('<a class="btn btn-outline-dark" href="login">Login/signup</a>');
					}
					else {
						echo('<a class="btn btn-outline-dark" href="logout">Logout</a>');
					}
				?>
                </span>
            </div>
        </div>
    </nav>
</body>
</html>