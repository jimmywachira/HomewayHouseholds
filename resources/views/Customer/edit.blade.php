<x-layout>
    <x-slot name='content'>
        <h1 class="text-lg text-center p-2 m-2">Edit customer</h1>

        <div class="card rounded p-2 m-2">
            <form action="/customers/{{ $customer->id }}" method="POST">
                @method('PATCH')
                @include('customer.form')
                <div style="">
                    <button type="submit" class="p-2 m-2 bg-blue-500 rounded hover:bg-blue-500 hover:text-white "> update customer </button>
                </div>
            </form>
        </div>
    </x-slot>
</x-layout>