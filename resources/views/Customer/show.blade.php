<x-layout>
    <x-slot name='content'>
    <h1 class="text-center text-xl p-2 m-2"> customers details </h1>
    <div class="card bg-blue-600 p-2 m-2">
        <ul>
            <li> <img class="inline-block p-2 m-2 h-20 w-20 rounded-full ring-2 ring-black" src="https://tailwindui.com/img/logos/mark.svg?color=black&shade=400" alt=""></li>
            <li class="p-2 m-2">
                <p>name : {{ $customer->name; }} </p>
            </li>
            <li class="p-2 m-2">
                <p>email : {{ $customer->email; }}</p>
            </li>
        </ul>
    </div>

    <div class="inline-flex">
        <button class="bg-blue-600 hover hover:text-white p-2 m-2 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"><a href="/customers/{{ $customer->id }}/edit">Edit</a></button>
        <form action="customers/{{ $customer->id }}" method="post">
            @method("DELETE")
            @csrf
        <button class="bg-blue-600 hover hover:text-white p-2 m-2 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"> Delete </button>
        </form>
    </div>
 </x-slot>
</x-layout>