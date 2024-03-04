<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Products</title>
</head>
<body class="font-bold capitalize p-2 m-2" style="font-family: Jost;">

    <h1 class="text-center text-xl">customers</h1>

    <div class="card rounded bg-grey-600">
    @forelse ($customers as $customer)
        <ul class="mb-2">
            <img class="w-full" src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="">
            <li class="text-center mt-2">name : <a href="/customers/{{ $customer->id }}"> {{ $customer->name }}</a></li>
            <li class="text-center mt-2">email : {{ $customer->email }}</li>
        </ul>
    @empty
       <p>No customers to show</p> 
    @endforelse
    </div>

    <button class="bg-blue-400 rounded p-2 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"><a href="/customer/create">add new customer  </a></button>
    
</body>
</html>