<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <link href='css/style1.css' rel='stylesheet'>
    <title>Document</title>
</head>

<body dir="rtl">

    <div style='margin-top:10px'>لیست اطلاعات پزشکان</div>
    <hr>
    <div class='row'>

        @foreach ($info_Doctor as $Doctor)
            <div id='content1' class="col-md-3">
                {{ $Doctor->Firstname }}
                {{ $Doctor->Lastname }}
                <img class='doc1' src='{{ $Doctor->image }}'>
                <a href="{{ route('doctor_info_show', $Doctor->id) }}">
                    <button class='btn btn-primary'>کلیک کنید</button></a>

  </div>
        @endforeach

    </div>
</body>

</html>
