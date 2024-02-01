
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Marry Christmas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite(['resources/css/app.css', 'resources/js/app.js']);
    

</head>
<body class="bodyImg ">
    <x-navbar/>

    {{-- per richiamare la redirect con message nella Pcontroller  --}}
    @if(session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif

    <x-header/>
    <div class="min-vh-100">
        {{$slot}}
    </div>
    <x-footer/>
</body>
</html>
