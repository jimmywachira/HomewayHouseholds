<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- 
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dosis">
        style="font-family:Dosis"
    -->
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Document</title>
</head>
<body class="capitalize font-semibold rounded text-black font-mono" >
    <div>
        <div class="">
            <nav class="">
                <div>
                    <ul class="bg-blue-600 p-2 m-2 text-white font-bold flex justify-around">
                        <li><a class="hover:bg-black-300 text-white rounded-md px-3 py-2 text-sm font-medium" aria-current="page" href="/"> <span>home</span></a></li>
                        <li><a href="/products"><span>products</span></a></li>
                        <li><a href="/about"><span>about</span></a></li>
                        <li>
                            <div class="text-grey">
                                <a href="http://">log in</a>
                                <a class="ml-1" href="http://">sign in</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <h1 class="text-6xl p-4 capitalize text-center border-b"> <a href="http://">HomesWay HouseHolds </a></h1>
            
        </div>
    </div>
    

    <main class="px-16 py-6">

        <header>
            <h2>products</h2>
            <div>
                <form action="" method="GET">
                <input class="bg-primary" type="text" name="search" id="">
                <button type="submit" class="btn-primary"> search </button>
            </form>
            </div>
            
            
        </header>

        <div class="card">
            <h4 class="mt-12">latest product</h4>
            
            <div class="mt-8"> 

            </div>

            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                <img src="https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-02.jpg" alt="water bottle" class="h-full w-full object-cover object-center group-hover:opacity-75">
            </div>
            <div>
                 <h2><span>descr :</span></h2>
                <span> <h2>price :</h2></span>
            </div>

            <h4 class="font-bold mt-12 pb-2 border-b border-gray-300">more products</h4>

            <div class="mt-8"> 

            </div>

            <div>
                <div>
                    <h2 class="border-b border-gray-300">load more</h2>
                </div>
                <div class="mt-8">

                </div>
            </div>
        </div>
    </main>

</body>
</html>