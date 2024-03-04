<x-layout>
  <x-slot >
    <div class="">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
    <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">create product</h2>
  </div>

  <form class="space-y-6" action="/product" method="POST">
    @csrf

    <div>
      <label for="text" class="block text-sm font-medium leading-6 text-gray-900">product name</label>
      <div class="mt-2 text-center m-2">
        <input id="text" name="name" type="text" autocomplete="off" value="{{ old('name') }}" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
      </div>
    </div>

    <div>
      <label for="details" class="block text-sm font-medium leading-6 text-gray-900">product details</label>
      <div class="mt-2 text-center m-2">
        <input id="details" name="details" type="text" autocomplete="off" value="{{ old('details') }}" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
      </div>
    </div>

    <div>
      <div class="flex items-center justify-between">
        <label for="price" class="block text-sm font-medium leading-6 text-gray-900">price</label>
      </div>
      <div class="mt-2">
        <input id="price" name="price" type="number" autocomplete="off" value="{{ old('price') }}" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
      </div>
    </div>

    <div>
      <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
    </div>
  </form>
</div>
</div>

</x-layout>