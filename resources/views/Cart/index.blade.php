<x-layout>
    <x-slot name='content'>
    <h1 class="text-center text-2xl">product cart</h1>

    <div class="card p-2 m-2">
        @forelse($products as $product)
            <ul class="mb-2">
                <img class="w-full" src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="">
                <li class="text-center mt-2">name : <a href="/customers/{{ $product->id }}"> {{ $product->name }}</a></li>
                <li class="text-center mt-2">email : {{ $product->email }}</li>
            </ul>
        @empty
            <p>no cart to show</p>
        @endforelse
    </div>

</x-slot>
</x-layout>