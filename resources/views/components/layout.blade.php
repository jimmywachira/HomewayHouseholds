<!doctype html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <title>homewayHouseholds</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">
</head>
<body class="h-full bg-white text-transform capitalize font-semibold items-center leading-6" style="font-family:quicksand">

  {{ require_once (resource_path("views/components/nav.blade.php")); }}
  {{ $content }}

</body>
</html>