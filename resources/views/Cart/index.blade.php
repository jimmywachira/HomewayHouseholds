<x-layout>
    <x-slot name='content'>
    <h1 class="text-center text-2xl">item cart</h1>
    <div class="card p-2 m-2">
        @forelse($items as $item)
            <ul class="mb-2 border border-black">
                <li class="p-2 m-2">
                    <img class="justify-item-center p-2 m-2 h-20 w-20 rounded-full ring-2 ring-black" src="https://tailwindui.com/img/logos/mark.svg?color=black&shade=400" alt="">
                </li>
                <li class="text-center mt-2">name : <a href="/cart/ {{-- {{ $item->name }} --}} "> glasses </a></li>
                <li class="text-center mt-2">details :{{-- {{ $item->details }} --}} luminac </li>
                <li class="text-center mt-2">price : {{ 500 }}</li>
            </ul>
        @empty
            <p> no cart to show </p>
        @endforelse
    </div>

</x-slot>
</x-layout>