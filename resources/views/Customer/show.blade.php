<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Customers</title>
</head>

<body class="font-bold capitalize p-2 m-2" style="font-family:Jost">

    <h1 class="text-center text-xl">customers details</h1>
    <div class="card rounded bg-blue-400 p-2 m-2"> 
        <ul>
            <li class="p-2 m-2">
                <p>name : {{ $customer->name; }}</p>
            </li>
            <li class="p-2 m-2">
                <p>email : {{ $customer->email; }}</p>
            </li>
        </ul>
    </div>

    <div>
        <button class="bg-blue-400 p-2 m-2 rounded hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"><a href="/customers/{{ $customer->id }}/edit">Edit</a></button>
        
        <form action="customers/{{ $customer->id }}" method="post">
            @method("DELETE")
            @csrf
        <button class="bg-blue-400 p-2 m-2 rounded hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"> Delete </button>
        </form>

    </div>
</body>
</html>