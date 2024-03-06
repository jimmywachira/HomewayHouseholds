<x-layout>
<x-slot name="content">

<div class="h-full m-2 p-2">
  <div class="mt-4 grid grid-col-3">
    <h2 class="p-2 m-2 text-center font-lg">household Products</h2>
      <button class="text-white rounded bg-blue-500 p-2 m-2"><a href="/product/create">create product</a></button>

      <div class="mb-2">
        <form class="form-control" action="/" method="post">
          @csrf
            <input type="text" placeholder="" name="name" class="block w-full border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            <button type="submit" class="mt-2 p-1 w-full justify-center border md:border-blue-800  hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">
              search
            </button>
        </form>
      </div>

      <div class="card p-2 m-2">
        @foreach($products as $product)
        <div class="">
          <a href="/product/{{ $product->id }}" class="">
            <div class="rounded bg-gray-400">
              <img src="https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-02.jpg" alt="Olive drab green insulated bottle with flared screw lid and flat top." class="h-full w-full object-cover object-center group-hover:opacity-75">
            </div>
          </a>
                    <div class="text-center">
                        <h3 class="mt-2"> name: {{ $product->name }}</h3>
                        <h3 class="mt-2"> details : {{ $product->details }}</h3>
                        <h3 class="mt-2">price : {{ $product->price }}</h3>
                        <form class="form-control rounded" action="/cart" method="POST">
                          @csrf
                          <a href="/cart/product/{{ $product->id }}"><button class="bg-blue-400 p-2" type="submit">Buy</button></a>
                      </form>
                      </div>        
        </div>
        </div>
        @endforeach
      </div>
  </div>
      
</div>

</x-slot>
</x-layout>