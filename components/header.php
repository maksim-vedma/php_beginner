<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cours PHP</title>
    <link
      rel="stylesheet"
      href="node_modules/bootstrap/dist/css/bootstrap.min.css"
    />
    <script
      src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"
      defer
    ></script>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body data-bs-theme="dark">
    <header>
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Cours PHP</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="/">Accueil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/blog.php">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/contact.php">Contact</a>
              </li>
              <?php if (!isset($_SESSION['user'])): ?>
                <li class="nav-item">
                  <a class="nav-link" href="/login.php">Connexion</a>
                </li>
              <?php else: ?>
                <li class="nav-item">
                  <a class="nav-link" href="/actions/logout.php">Deconnexion</a>
                </li>
              <?php endif ?>
            </ul>

            <form method="get" action="/blog.php" class="d-flex" role="search">
              <input
                class="form-control me-2"
                type="search"
                placeholder="Search"
                aria-label="Search"
                name="search"
              />
              <button class="btn btn-outline-success" type="submit">
                Chercher
              </button>
            </form>

          </div>
        </div>
      </nav>
    </header>
  <main>
