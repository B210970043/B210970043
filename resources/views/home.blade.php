<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<section class="vh-50" style="background-color: #2779e2;">
  <div class="container h-100">
    <form action='store_data' method="POST">
        @csrf
        <div class="row d-flex justify-content-center align-items-center h-50">
        <div class="col-xl-9">
            <h1 class="text-white mb-4" style="text-align: center">Анкет бүртгэл</h1>
            <div class="card" style="border-radius: 15px;">
            <div class="card-body">
                <div class="row align-items-center pt-4 pb-3">
                    <div class="col-md-3 ps-5">
                        <label for="user_first_name" class="form-label">Хэрэглэгчийн нэр:</label>
                        <input type="text" id="user_first_name" name="user_first_name" class="form-control" required value="{{ old('user_first_name') }}">
                    </div>
                    <div class="col-md-3 pe-5">
                                <label for="user_last_name" class="form-label">Хэрэглэгчийн овог:</label>
                                <input type="text" id="user_last_name" name="user_last_name" class="form-control" required value="{{ old('user_last_name') }}">
                    </div>
                </div>
                
                <hr class="mx-n3">

                <div class="row align-items-center py-3">
                <div class="col-md-3 ps-5">
                    <label for="user_age" class="form-label">Нас:</label>
                    <input type="number" id="user_age" name="user_age" class="form-control" required value="{{ old('user_age') }}">
                </div>
                    <div class="col-md-3 pe-5">
                        <label for="user_phone_number" class="form-label">Утасны дугаар:</label>
                        <input type="text" id="user_phone_number" name="user_phone_number" class="form-control" required value="{{ old('user_phone_number') }}">
                    </div>
                </div>
                <hr class="mx-n3">

                <div class="row align-items-center py-3">
                    <div class="col-md-3 ps-5">
                        <label for="user_address" class="form-label">Хаяг:</label>
                        <textarea id="user_address" name="user_address" class="form-control" required>{{ old('user_address') }}</textarea>
                    </div>
                    <div class="col-md-3 pe-5">
                        <label for="aimag_id" class="form-label">Аймаг нэр:</label>
                        <select id="aimag_id" name="aimag_id" class="form-select" required>
                            <option>Аймаг сонгох</option>
                            @foreach($aimags as $aimag)
                                <option value="{{ $aimag->id }}">{{ $aimag->aimag_ner }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <hr class="mx-n3">

                <div class="row align-items-center py-3">
                <div class="col-md-3 ps-5">
                    <label for="sum_id" class="form-label">Сум:</label>
                    <select id="sum_id" name="sum_id" class="form-select" required>
                        <!-- Options will be dynamically updated -->
                    </select>
                </div>
                </div>

                <hr class="mx-n3">

                <div class="px-5 py-4">
                    <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg">Бүртгүүлэх</button>
                    <a href="{{ route('user_login') }}" class="btn btn-secondary btn-lg">Нэвтрэх</a>
                </div>

            </div>
            </div>
        </div>
        </div>
    </form>
  </div>
</section>
    @if(session('error'))
                <div class="alert alert-danger mt-3">
                    {{ session('error') }}
                </div>
            @endif
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#aimag_id').change(function() {
                    var aimagId = $(this).val();
                    $.ajax({
                        url: '/fetch/' + aimagId,
                        type: 'GET',
                        dataType: 'json',
                        success: function(data) {
                            $('#sum_id').empty();
                            $.each(data, function(index, sum) {
                                $('#sum_id').append('<option value="' + sum.id + '">' + sum.sum_ner + '</option>');
                            });
                        },
                        error: function(xhr, status, error) {
                            console.error('Error fetching sums:', error);
                        }
                    });
                });
            });
        </script>


</body>
</html>
