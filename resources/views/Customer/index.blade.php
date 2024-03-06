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
<body class="font-semibold capitalize p-2" style="font-family:Jost;padding:auto">

    <nav class="container relative">
        <div class="items-center justify-around bg-blue-600">
          <div class=" p-2 m-2 rounded">
            <ul class="hidden md:flex space-x-6">
                <li><a class="hover:blue-200" href="/">home</a></li>
                <li><a class="" href="/products">products</a></li>
                <li><a class="" href="/cart">cart</a></li>
                <li><a class="" href="/customers">customers</a></li>
            </ul>
          </div>
        </div>
    </nav>

    <h1 class="text-center text-2xl">customers</h1>

    <div class="card rounded">
        @forelse($customers as $customer)
            <ul class="mb-2">
                <img class="w-full" src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="">
                <li class="text-center mt-2">name : <a href="/customers/{{ $customer->id }}"> {{ $customer->name }}</a></li>
                <li class="text-center mt-2">email : {{ $customer->email }}</li>
            </ul>
        @empty
            <p>No customers to show</p>
        @endforelse
    </div>

    <button class="rounded p-2 bg-blue-400 hover:bg-blue-700"><a href="/customer/create">add new customer  </a></button>
    
</body>
</html>