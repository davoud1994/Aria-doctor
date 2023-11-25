<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body dir="auto">

    <th scope="col">{{ $doctor->Firstname }}</th>
    <br>
    <th scope="col">{{ $doctor->Lastname }}</th>
    <br>
    <th scope="col">{{ $doctor->Number_Doc }}</th>
    <br>
    <th scope="col">{{ $doctor->Address }}</th>
    <br>
    <th scope="col"> {{ $doctor->Cellphone }}</th>
    <br>
    <th scope="col">{{ $doctor->Tellphone }}</th>
    <br>
    <th scope="col">{{ $doctor->IsDelete }}</th>
    <br>
    <th scope="col">{{ $doctor->Status }}</th>
    <br>
    <th scope="col">{{ $doctor->Description }}</th>


</body>

</html>
