<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">

</head>
    <body>
        <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <form action="user_login" method="POST" >
                    @csrf
                    <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                        <p class="lead fw-normal mb-0 me-3">Sign in with</p>
                        <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-floating mx-1">
                        <i class="fab fa-facebook-f"></i>
                        </button>

                        <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-floating mx-1">
                        <i class="fab fa-twitter"></i>
                        </button>

                        <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-floating mx-1">
                        <i class="fab fa-linkedin-in"></i>
                        </button>
                    </div>

                    <!-- Email input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <input type="text" id="user_first_name" name="user_first_name" class="form-control form-control-lg"
                        placeholder="Enter username" />
                        <label class="form-label" for="user_first_name">Хэрэглэгчийн нэр:</label>
                    </div>

                    <!-- Password input -->
                    <div data-mdb-input-init class="form-outline mb-3">
                        <input type="text" id="user_phone_number" name="user_phone_number" class="form-control form-control-lg"
                        placeholder="Enter phone number" />
                        <label class="form-label" for="user_phone_number">Хэрэглэгчийн утас:</label>
                    </div>

                    <div class="d-flex justify-content-between align-items-center">
                        <div class="form-check mb-0">
                        <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                        <label class="form-check-label" for="form2Example3">
                            Remember me
                        </label>
                        </div>
                        <a href="/" class="text-body">Forgot password?</a>
                    </div>

                    <div class="text-center text-lg-start mt-4 pt-2">
                        <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg"
                        style="padding-left: 2.5rem; padding-right: 2.5rem;">Нэвтрэх</button>
                        <p class="small fw-bold mt-2 pt-1 mb-0">Анкет-д бүртгүүлсэн үү? 
                            <a href="/"class="link-danger">Анкет-д бүртгүүлэх</a></p>
                    </div>
                </form>
            </div>
            </div>
        </div>
        <div
            class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
            <div>
            <a href="#!" class="text-white me-4">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#!" class="text-white me-4">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="#!" class="text-white me-4">
                <i class="fab fa-google"></i>
            </a>
            <a href="#!" class="text-white">
                <i class="fab fa-linkedin-in"></i>
            </a>
            </div>
        </div>
        </section>

    @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    </body>
</html>