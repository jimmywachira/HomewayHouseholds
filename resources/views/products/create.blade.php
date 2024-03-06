<x-layout>
  <x-slot name="content">

      <form class="p-4" action="/products" method="POST">
        @csrf

        <div>
          <label for="text" class="text-gray-900">product name</label>
          <div class="mt-2 text-center m-2">
            <input id="text" name="name" type="text" autocomplete="off" value="{{ old('name') }}" class="p-2 w-full border border-black rounded">
          </div>
        </div>

        <div>
          <label for="details" class="text-gray-900">product details</label>
          <div class="mt-2 text-center m-2">
            <input id="details" name="details" type="text" autocomplete="off" value="" class="p-2 w-full border border-black rounded">
          </div>
        </div>

        <div>
          <div class="items-center justify-between">
            <label for="price" class="text-sm leading-6 text-gray-900">price</label>
          </div>
          <div class="mt-2">
            <input id="price" name="price" type="number" autocomplete="off" value="" class="p-2 w-full border border-black rounded">
          </div>
        </div>

        <div>
          <button type="submit" class="p-2 bg-blue-600 border m-2 justify-center rounded">create product</button>
        </div>
      </form>
    </div>
    </div>
</x-slot>
</x-layout>