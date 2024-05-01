<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Мэдээлэл</h5>
                        <div id="usersInfo">
                            <table>
                                        <tr>
                                            <th>№</th>
                                            <th>Аймаг</th>
                                            <th>Хэрэглэгчийн тоо</th>
                                        </tr>
                                        @foreach($aimags as $aimag)
                                        <tr>
                                            <td>{{$loop->index+1}}</td>
                                            <td>{{$aimag->aimag_ner}}</td>
                                            <td>{{$aimag->ankets_count}}</td>
                                        </tr>
                                        @endforeach

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
