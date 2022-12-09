<?php

$username = $_POST['login'] ?? null;
$password = $_POST['password'] ?? null;

include 'functions.php';

$name = existsUser($username);


if (null !== $username || null !== $password) {
    
// Если логин и пароль из базы совпадает с паролем из формы
  if (($username === $users[$name]['id']) && ($password === $users[$name]['password'])) {
    // Стартуем сессию:
    session_start();
    // Пишем в сессию информацию о том, что мы авторизовались:
    $_SESSION['auth'] = true;
    // Пишем в сессию логин и id пользователя
    $_SESSION['id'] = $users[$name]['id'];
    $_SESSION['login'] = $name;
  };
};

$auth = $_SESSION['auth'] ?? null;

if($auth) { ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
  </script>
  <script src="countdown.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <style type="text/css" media="all">
  @import url("main.css");
  </style>
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
            <li><a href="#" class="nav-link px-3 link-secondary">Главная</a></li>
            <li><a href="#" class="nav-link px-3 link-light">Процедуры</a></li>
            <li><a href="#" class="nav-link px-3 link-light">Цены</a></li>
            <li><a href="#" class="nav-link px-3 link-light">О нас</a></li>
          </ul>

          <div class="col-md-3 text-end">
            <div class="dropdown-center">
              <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                aria-expanded="false"> <?php echo ($name) ?>,
                Вы авторизованы
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="index.php">Выйти</a></li>
              </ul>
            </div>
          </div>
        </header>
      </div>
      <h1 class="text-center">SPA SALOON</h1>
      <div class="text-center fs-4">
        <p>+7 (000) 000-00-00</p>
      </div>
      <div class="card-group container bg-transparent">
        <div class="card e-container">
          <img src="img\care.jpg" class="e-image" alt="Уход за кожей">
          <div class="e-overlay">
            <div class="e-text">Уход за кожей</div>
          </div>
        </div>
        <div class="card e-container">
          <img src="img/aromatherapy.jpg" class="e-image" alt="Ароматерапия">
          <div class="e-overlay">
            <div class="e-text">Ароматерапия</div>
          </div>
        </div>
        <div class="card e-container">
          <img src="img/massage.jpg" class="e-image" alt="Массаж">
          <div class="e-overlay">
            <div class="e-text">Массаж</div>
          </div>
        </div>
        <div class="card e-container">
          <img src="img/stonetherapy.jpg" class="e-image" alt="Стоунтерапия">
          <div class="e-overlay">
            <div class="e-text">Стоунтерапия</div>
          </div>
        </div>
      </div>
      <div class=" container bg-transparent text-white">
        <div class="row g-0">
          <div class="col-md-2">
            <img src="img/proposal.jpg" class="img-fluid rounded-start" alt="Наше предложение">
          </div>
          <div class="col-md-9">
            <div class="card-body">
              <h4 class="card-title fs-3">Персональное предложение:</h4>
              <p class="card-text fs-5">Уважаемый(ая) <?php echo ($name) ?>! Для Вас действует акция: при покупке двух
                любых процедур третья - бесплатно!</p>
              <p class="card-text fs-5"> До окончания акции осталось <span class="fs-4 bg-danger" id="CDT"></span></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container fixed-bottom bg-dark" style="opacity: 80%;">
    <footer class="d-flex justify-content-between align-items-center py-3 my-4>
    <p class=" col-md-4 mb-0" style="color: white;"> &copy; 2022 SPA Saloon, Inc </p>
      <img src="img/logo.png" class="img-fluid" alt="Logo" />
      <ul class="nav col-md-4 justify-content-end">
        <li><a href="#" class="nav-link px-2 link-secondary">Главная</a></li>
        <li><a href="#" class="nav-link px-2 link-light">Процедуры</a></li>
        <li><a href="#" class="nav-link px-2 link-light">Цены</a></li>
        <li><a href="#" class="nav-link px-2 link-light">О нас</a></li>
      </ul>
    </footer>
  </div>
</body>

</html>

<?php } else { ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
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
            <li><a href="#" class="nav-link px-3 link-light">Главная</a></li>
            <li><a href="#" class="nav-link px-3 link-light">Процедуры</a></li>
            <li><a href="#" class="nav-link px-3 link-light">Цены</a></li>
            <li><a href="#" class="nav-link px-3 link-light">О нас</a></li>
          </ul>

          <div class="col-md-3 text-end">
            <a class="btn btn-primary" href="login.php" role="button">Авторизация</a>
          </div>
        </header>
      </div>
      <h1 class="text-center">SPA SALOON</h1>
      <div class="text-center fs-4">
        <p>+7 (000) 000-00-00</p>
      </div>
      <p class="text-center text-white bg-danger fs-2">Уважаемый посетитель, Вы не авторизованы!</p>
      <p class="text-center text-info bg-dark fs-4">Введён неверный логин или пароль. <br> Для входа на сайт, просмотра
        комплекса услуг салона, акций и скидок,
        пожалуйста, авторизуйтесь.
      </p>
    </div>
  </div>
  <div class="container fixed-bottom bg-dark" style="opacity: 80%;">
    <footer class="d-flex justify-content-between align-items-center py-3 my-4>
    <p class=" col-md-4 mb-0" style="color: white;"> &copy; 2022 SPA Saloon, Inc </p>
      <img src="img/logo.png" class="img-fluid" alt="Logo" />
      <ul class="nav col-md-4 justify-content-end">
        <li><a href="#" class="nav-link px-2 link-light">Главная</a></li>
        <li><a href="#" class="nav-link px-2 link-light">Процедуры</a></li>
        <li><a href="#" class="nav-link px-2 link-light">Цены</a></li>
        <li><a href="#" class="nav-link px-2 link-light">О нас</a></li>
      </ul>
    </footer>
  </div>
</body>

</html>
<?php };?>