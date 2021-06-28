<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
    <a href="{{ route('login') }}" class="btn btn-outline-dark my-lg-4" style="margin-left: 960px;">Login</a>
    <a href="{{ route('register') }}" class="btn btn-outline-dark" style="color: black;">Register</a>
        <table class="table table-striped mt-lg-5">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">judul</th>
                    <th scope="col">pengarang</th>
                    <th scope="col">penerbit</th>
                </tr>
            </thead>
            <tbody>
                @php
                $no = 0;
                @endphp
                @foreach ($data as $d)
                @php
                $no++;
                @endphp
                <tr>
                    <th scope="row">{{$no}}</th>
                    <td>{{ $d['judul']}}</td>
                    <td>{{ $d['pengarang']}}</td>
                    <td>{{ $d['penerbit']}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <!-- <table>
    @foreach ($data as $d)
    <tr>
    <th>
    <td>{{ $d['judul']}}</td>
    <td>{{ $d['pengarang']}}</td>
    <td>{{ $d['penerbit']}}</td>
    </th>
    </tr>
    @endforeach
    </table> -->
    </div>
</body>

</html>