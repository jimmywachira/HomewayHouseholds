<x-layout>
    <x-slot name='content'>
    <h1 class="text-center text-2xl">product cart</h1>

    <div class="grid p-2 md:grid-cols-2 gap-2 m-2 shadow-xl rounded">
            @foreach($products as $product)
                <div class="text-center ring-1 ring-slate-900">
                    <div class="">
                    <img class="w-100 h-100" src="https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-02.jpg" alt="Olive drab green insulated bottle with flared screw lid and flat top." class="h-full w-full object-cover object-center group-hover:opacity-75">
                    <ul>
                        <li class="mt-2"> {{ $product->name }}</li>
                        <li class="mt-2"> {{ $product->details }}</li>
                        <span class="inline-grid grid-cols-2">
                        <span><li class="text-black px-4 py-2"> ksh{{ $product->price }}</li></span>
                        <span>
                            <li class="mb-2">
                            <form class="form-control rounded" action="/cart" method="POST">
                            @csrf
                            <a href="/cart/product/{{ $product->id }}"><button class="text-black rounded-r px-4 bg-blue-600 py-2 hover:text-white focus:outline-none focus:ring focus:ring:blue-300 active:blue-600" type="submit">Buy</button></a>
                            </form>
                            </li>
                        </span></span>
                    </ul>
                    </div>
                   
                </div>
            @endforeach 
    </div>
    <div class="justify-center">
        <button class="px-4  py-2 m-2 bg-blue-600 rounded hover:text-white"> <a href="/product/create">create product</a> </button>
    </div>
</x-slot>
</x-layout>