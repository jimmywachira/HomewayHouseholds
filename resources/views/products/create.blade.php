<x-layout>
    <x-slot name='content'>
    <h1 class="text-lg text-center p-2 m-2">add new products</h1>
    <div class="container rounded p-2 m-2">
    <form action="/products" method="POST">
        @include('products.form')
        <div class="">
            <button class="text-black m-2 px-4 bg-blue-600 py-2 hover:text-white focus:outline-none focus:ring focus:ring:blue-300 active:blue-600"" type="submit"> submit </button>
        </div>
    </form>
    <button class="text-black px-4 m-2 bg-blue-600 py-2 hover:text-white focus:outline-none focus:ring focus:ring:blue-300 active:blue-600""> <a href="/products">back</a> </button>
</div>

</x-slot>
</x-layout>