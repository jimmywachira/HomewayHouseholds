<x-layout>
  <x-slot name="nav">
  <x-slot name="content">

 <!-- 
  This example requires some changes to your config:
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->

<!--
  This example requires updating your template:

  ```
  <html class="h-full bg-white">
  <body class="h-full">
  ```
-->
<div class="h-full m-2 p-2">
      <h2 class="p-2 m-2 text-center font-lg">household Products</h2>
      <div class="mb-2">
        <form class="form-control" action="/" method="post">
            <input type="text" placeholder="" name="name" class="block w-full border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            <button type="submit" class="mt-2 p-1 w-full justify-center border md:border-blue-800  hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">
              search
            </button>
        </form>
      </div>

    @foreach($products as $product)
        <!--
      This example requires some changes to your config:
      
      ```
      // tailwind.config.js
      module.exports = {
        // ...
        plugins: [
          // ...
          require('@tailwindcss/aspect-ratio'),
        ],
      }
      ```
    -->

        <div class="grid gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
          <a href="/product/{{ $product->id }}" class="group">
            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
              <img src="https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-02.jpg" alt="Olive drab green insulated bottle with flared screw lid and flat top." class="h-full w-full object-cover object-center group-hover:opacity-75">
            </div>
            <h3 class="mt-4 text-sm text-black-700"> {{ $product->name }}</h3>
            <h3 class="mt-4 text-sm text-black-700"> {{ $product->details }}</h3>
            <p class="mt-1 text-lg font-medium text-black-900">{{ $product->price }}</p>
          </a>
        </div>
      </div>
    </div>
 @endforeach

<button class="btn center text-white rounded bg-blue-700 p-2 m-2"><a href="/product/create">create product</a></button>

</x-slot>
</x-layout>