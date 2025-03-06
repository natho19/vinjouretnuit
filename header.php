<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="shortcut icon" href="<?= VJN_IMG_URL . '/favicon.png' ?>" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Libre+Caslon+Display&amp;family=Pinyon+Script&amp;display=swap">
    <?php wp_head() ?>
</head>

<body>
    <!-- Progress scroll totop -->
    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- Navbar -->
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <!-- Logo -->
                <div class="logo-wrapper">
                    <a class="logo" href="#">
                        <img src="<?= VJN_IMG_URL . '/logo.png' ?>" class="logo-img" alt="Logo">
                    </a>
                </div>
                <!-- Button -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                    <i class="ti-menu"></i></span>
                </button>
                <!-- Menu -->
                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#">Accueil</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">A propos</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Nos vins</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>