<x-layout>
    <x-slot name='content'>
    <h1 class="text-center text-xl">customers details</h1>
    <div class="card rounded bg-blue-400 p-2 m-2"> 
        <ul>
            <li class="p-2 m-2">
                <p>name : {{ $customer->name; }}</p>
            </li>
            <li class="p-2 m-2">
                <p>email : {{ $customer->email; }}</p>
            </li>
        </ul>
    </div>

    <div>
        <button class="bg-blue-400 p-2 m-2 rounded hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"><a href="/customers/{{ $customer->id }}/edit">Edit</a></button>
        
        <form action="customers/{{ $customer->id }}" method="post">
            @method("DELETE")
            @csrf
        <button class="bg-blue-400 p-2 m-2 rounded hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"> Delete </button>
        </form>

    </div>
 </x-slot>
</x-layout>