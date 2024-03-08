<x-layout>
    <x-slot name='content'>
    <h1 class="text-lg">Edit customer</h1>

<div class="card rounded bg-blue-400 bg-blue p-2 m-2">
    <form action="/customers/{{ $customer->id }}" method="POST">
        @method('PATCH')
        @include('customer.form')

        <div style="display-inline">
            <button type="submit" class="p-2 m-2 bg-blue-500 rounded hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"> update customer </button>
        </div>
    </form>
</div>
</x-slot>
</x-layout>