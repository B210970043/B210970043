<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
<header>
    
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-body">
    <div class="container-fluid">
      <button
        data-mdb-collapse-init
        class="navbar-toggler"
        type="button"
        data-mdb-target="#navbarExample01"
        aria-controls="navbarExample01"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarExample01">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item active">
            <a class="nav-link" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/user-login">Sign out</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar -->

  <!-- Jumbotron -->
  <div class="p-5 text-center bg-body-tertiary">
    <h1 class="mb-3">Сайн уу {{ $user['first_name']}}</h1>
    <a data-mdb-ripple-init class="btn btn-primary" href="" role="button">Call to action</a>
  </div>
  <!-- Jumbotron -->

</header>
<div class="container mt-5">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Мэдээлэл</h5>

          <p class="card-text">First Name: {{ $user['first_name'] }}</p>
          <p class="card-text">Last Name: {{ $user['last_name'] }}</p>
          <p class="card-text">Age: {{ $user['age'] }}</p>
          <p class="card-text">Phone Number: {{ $user['phone_number'] }}</p>
          <p class="card-text">Address: {{ $user['address'] }}</p>
          <p class="card-text">Aimag: {{ $user['aimag_ner'] }}</p>
          <p class="card-text">Sum: {{ $user['sum_ner'] }}</p>
          <button>Мэдээллээ засах</button>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>

