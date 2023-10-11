<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Features</title>
</head>

<body>
    @include ('partial.head')
    <div class="container">
        <h1>ecco le nostre features</h1>
        <ul>
            @foreach ($features as $feature)
                <li>{{$feature}}</li>
            @endforeach
         
        </ul>
    </div>
</body>

</html>