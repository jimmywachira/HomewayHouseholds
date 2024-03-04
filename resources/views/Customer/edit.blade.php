<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Products</title>
</head>
<body class="font-bold capitalize p-2 m-2" style="font-family:Ubuntu">

    <h1 class="text-lg">Edit customer</h1>

<div class="card rounded bg-blue-400 bg-blue p-2 m-2">
    <form action="/customers/{{ $customer->id }}" method="POST">
        @method('PATCH')
        @include('customer.form')

        <div style="display-inline">
            <button type="submit" class="p-2 m-2 bg-blue-500 rounded hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"> update customer </button>
        </div>
    </form>
</div>

</body>
</html>