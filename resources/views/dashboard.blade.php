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
            <a class="nav-link" href="#">Tuhai</a>
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
  <form id="edit_user_info" action='edit_user_info' method="POST">
    @csrf
      <div class="row">
          <div class="col-md-6 offset-md-3">
              <div class="card">
                  <div class="card-body">
                      <h5 class="card-title">Мэдээлэл</h5>

                      <div id="userInfo">
                          <p class="cart-text">Id: {{ $user['id'] }}</p>
                          <p class="cart-text">First Name: {{ $user['first_name'] }}</p>
                          <p class="cart-text">Last Name: {{ $user['last_name'] }}</p>
                          <p class="cart-text">Age: {{ $user['age'] }}</p>
                          <p class="cart-text">Phone Number: {{ $user['phone_number'] }}</p>
                          <p class="cart-text">Address: {{ $user['address'] }}</p>
                          <p class="cart-text">Aimag: {{ $user['aimag_ner'] }}</p>
                          <p class="cart-text">Sum: {{ $user['sum_ner'] }}</p>
                      </div>

                      <div id="editInfo" style="display: none;">
                          <input type="text" class="form-control" name="id" value="{{ $user['id'] }}" readonly><br>
                          <input type="text" class="form-control" name="first_name" value="{{ $user['first_name'] }}" placeholder="First Name"><br>
                          <input type="text" class="form-control" name="last_name" value="{{ $user['last_name'] }}" placeholder="Last Name"><br>
                          <input type="number" class="form-control" name="age" value="{{ $user['age'] }}" placeholder="Age"><br>
                          <input type="text" class="form-control" name="phone_number" value="{{ $user['phone_number'] }}" placeholder="Phone Number"><br>
                          <input type="text" class="form-control" name="address" value="{{ $user['address'] }}" placeholder="Address"><br>
                          <input type="text" class="form-control" name="aimag_ner" value="{{ $user['aimag_ner'] }}" placeholder="Aimag" readonly><br>
                          <input type="text" class="form-control" name="sum_ner" value="{{ $user['sum_ner'] }}" placeholder="Sum" readonly><br>
                      </div>

                      <button type="button" id="editButton" class="btn btn-primary">Edit</button>
                      <button type="submit" id="saveButton" style="display: none;" class="btn btn-primary">Save</button>

                  </div>
              </div>
          </div>
      </div>
  </form>
</div>

<script>
    document.getElementById('editButton').addEventListener('click', function() {
        document.getElementById('userInfo').style.display = 'none';
        document.getElementById('editInfo').style.display = 'block';
        document.getElementById('editButton').style.display = 'none';
        document.getElementById('saveButton').style.display = 'block';
    });
</script>

</body>

</html>

