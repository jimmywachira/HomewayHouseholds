<x-layout>
<x-slot name='content'>
<body>

    <main class="px-16 py-6">

      <header>
          <h2 class="text-center font-lg">products cart</h2>
      </header>

      <div class="card">
          <div class="mt-8"> 

          </div>

          <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
              <img src="https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-02.jpg" alt="water bottle" class="h-full w-full object-cover object-center group-hover:opacity-75">
          </div>
          <div>
            @foreach($products as $product)
               <h2><span>descr : {{ $product->details }}</span></h2>
              <span> <h2>price : {{ $product->price }}</h2></span>
            @endforeach  
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
</x-slot>
</x-layout>