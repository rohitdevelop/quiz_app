<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css'])
</head>
<body class="bg-black text-white">
        <div class="flex h-screen w-full justify-center items-center">
            {{$slot}}
        </div>
</body>
</html>