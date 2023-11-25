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
    <title>Document</title>
</head>

<body dir="rtl">
    <table class="table caption-top">
        <div style='margin-top:10px'>لیست اطلاعات پزشکان</div>
        <hr>
        <thead>
            <tr>
                <th scope="col">شناسه</th>
                <th scope="col">نام </th>
                <th scope="col">نام خانوادگی</th>
                <th scope="col">شماره نظام پزشکی</th>
                <th scope="col">ادرس</th>
                <th scope="col">تلفن همراه</th>
                <th scope="col">تلفن ثابت</th>
                <th scope="col">فعالیت</th>
                <th scope="col">موقعیت</th>
                <th scope="col">توضیحات</th>
                <th scope="col">اطلاعات تکمیلی</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($info_Doctor as $Doctor)
                <tr>

                    <th scope="col">{{ $Doctor->id }}</th>
                    <th scope="col">{{ $Doctor->Firstname }}</th>
                    <th scope="col">{{ $Doctor->Lastname }}</th>
                    <th scope="col">{{ $Doctor->Number_Doc }}</th>
                    <th scope="col">{{ $Doctor->Address }}</th>
                    <th scope="col">{{ $Doctor->Cellphone }}</th>
                    <th scope="col">{{ $Doctor->Tellphone }}</th>
                    <th scope="col">{{ $Doctor->IsDelete }}</th>
                    <th scope="col">{{ $Doctor->Status }}</th>
                    <th scope="col">{{ $Doctor->Description }}</th>
                    <th>
                        <a href="{{ route('doctor_info_show', $Doctor->id) }}">
                            <button class='btn btn-primary'>کلیک کنید</button></a>
                    </th>


                </tr>
            @endforeach

        </tbody>
    </table>
</body>

</html>
