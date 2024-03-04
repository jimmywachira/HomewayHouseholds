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
<body class="font-bold capitalize p-2 m-2" style="font-family:Jost">

    <h1 class="text-lg">add new customers</h1>
    <div class="container rounded bg-grey-200 bg-blue p-2 m-2">
    <form action="/customers" method="POST">
        @include('customer.form')
        <div class="" style="display-inline">
            <button class="p-2 m-2 bg-blue-400 rounded hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500" type="submit"> submit </button>
        </div>
    </form>
    <button class="p-2 m-2 bg-blue-400 rounded hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"> <a href="/customers">back</a> </button>
</div>

</body>
</html>