<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>homewayHouseholds</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">
</head>
<body class="w-full bg-white text-transform capitalize font-semibold" style="font-family:quicksand">

  <nav class="relative w-full">
    <div class="items-center p-3 justify-around bg-blue-600 text-black">
      <div class="p-2 m-2">
        <ul class="hidden md:flex space-x-6">
            <li><a class="{{ request()->is('/') ? 'border border-black' : 'border-none'}} hover:text-white px-3 py-2" href="/">Home</a></li>
            <li><a class="{{ request()->is('/products') ? 'border border-black' : 'border-none'}}  hover:text-white px-3 py-2" href="/products">products</a></li>
            <li><a class="{{ request()->is('/cart') ? 'border border-black' : 'border-none'}} hover:text-white px-3 py-2" href="/cart">cart</a></li>
            <li><a class="{{ request()->is('/customers') ? 'border border-black' : 'border-none'}} hover:text-white px-3 py-2" href="/customers">customers</a></li>
        </ul>
       </div>
    </div>
  </nav>
  
  {{ $content }}
  {{ require_once (resource_path("views/components/footer.blade.php")); }}

</body>
</html>