<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <?php include "functions.php";?>
  <title>SPA Saloon</title>
</head>

<body class="p-0 m-0 border-0">
  <div class="card text-bg-dark">
    <img src="img/main.jpg" class="img-fluid" alt="SPA Massage Image" />
    <div class="card-img-overlay">
      <div class="container">
        <header
          class="d-flex align-items-center justify-content-center justify-content-md-between py-0 mb-4 border-bottom">
          <img src="img/logo.png" class="img-fluid" alt="Logo" />
          <svg class="bi me-2" width="100" height="60" role="img" aria-label="SPA Saloon">
          </svg>

          <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="index.php" class="nav-link px-3 link-light">Главная</a></li>
            <li><a href="#" class="nav-link px-3 link-light">Процедуры</a></li>
            <li><a href="#" class="nav-link px-3 link-light">Цены</a></li>
            <li><a href="#" class="nav-link px-3 link-light">О нас</a></li>
          </ul>

          <div class="col-md-3 text-end">
            <a class="btn btn-outline-primary visually-hidden" href="#" role="button">Авторизация</a>
          </div>
        </header>
      </div>
      <h1 class="text-center">SPA SALOON</h1>
      <div class="text-center fs-4">
        <p>+7 (000) 000-00-00</p>
      </div>
      <div class="d-flex align-items-center justify-content-center">
        <form action="main.php" method="post">
          <div class="mb-3">
            <label class="form-label">Логин</label>
            <input class="form-control" name="login" type="login">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Пароль</label>
            <input class="form-control" type="password" name="password" id="exampleInputPassword1">
          </div>
          <button class="btn btn-primary" type="submit" name="submit">Войти</button>
        </form>
      </div>
    </div>
  </div>
  <div class="container fixed-bottom bg-dark" style="opacity: 80%;">
    <footer class="d-flex justify-content-between align-items-center py-3 my-4>
    <p class=" col-md-4 mb-0" style="color: white;"> &copy; 2022 SPA Saloon, Inc </p>
      <img src="img/logo.png" class="img-fluid" alt="Logo" />
      <ul class="nav col-md-4 justify-content-end">
        <li><a href="index.php" class="nav-link px-2 link-light">Главная</a></li>
        <li><a href="#" class="nav-link px-2 link-light">Процедуры</a></li>
        <li><a href="#" class="nav-link px-2 link-light">Цены</a></li>
        <li><a href="#" class="nav-link px-2 link-light">О нас</a></li>
      </ul>
    </footer>
  </div>
</body>

</html>
