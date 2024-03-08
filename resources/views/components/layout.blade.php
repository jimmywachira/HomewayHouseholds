<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>homewayHouseholds</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">
</head>
<body class="w-full bg-white text-transform capitalize font-semibold" style="font-family:quicksand">

  {{ require_once (resource_path("views/components/nav.blade.php"));}}
  {{ $content }}
  {{-- require_once (resource_path("views/components/footer.blade.php")); --}}

</body>
</html>