<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>carloeusebiwebdeveloper.it</title>

    <style>
        body {
            padding: 10px;
        }
    </style>

</head>

<body>

    <h1>Ti ha contattato {{ $data['name'] }}</h1>
    <div><strong>Email: </strong>{{ $data['email'] }}</div>
    <div>Messaggio:</div>
    <p>{{ $data['message'] }}</p>

</body>

</html>
