<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>working</title>
</head>
@vite(['resources/css/app.css'])

<body>
    <h1>workers</h1>

    <ul class="flex justify-center items-center gap-10">
        @foreach ($teas as $tea)

        <div class="border p-5 m-2 bg-amber-950 text-white text-center">
            <p>{{$tea['id']}}</p>
            <h1>{{$tea['name']}}</h1>
            <p>{{$tea['time']}}</p>
        </div>
        @endforeach
    </ul>
</body>

</html>