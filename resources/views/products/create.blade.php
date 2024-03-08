<x-layout>
    <x-slot name='content'>
    <h1 class="text-lg text-center p-2 m-2">add new products</h1>
    <div class="container rounded p-2 m-2">
    <form action="/productss" method="POST">
        @include('products.form')
        <div class="">
            <button class="p-2 m-2 bg-blue-600 rounded hover:text-white" type="submit"> submit </button>
        </div>
    </form>
    <button class="p-2 m-2 bg-blue-600 rounded hover:text-white"> <a href="/products">back</a> </button>
</div>

</x-slot>
</x-layout>