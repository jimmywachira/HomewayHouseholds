<x-layout>
    <x-slot name='content'>
    <h1 class="text-center text-2xl">customers</h1>

    <div class="card p-2 m-2">
        @forelse($customers as $customer)
            <ul class="mb-2">
                <img class="w-full" src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="">
                <li class="text-center mt-2">name : <a href="/customers/{{ $customer->id }}"> {{ $customer->name }}</a></li>
                <li class="text-center mt-2">email : {{ $customer->email }}</li>
            </ul>
        @empty
        <div class="p-6 bg-white rounded-xl flex items-center space-x-4 x-auto">
            <div><p class="text-slate">No customers to show</p></div>
        </div>
           
        @endforelse
    </div>

    <button class="rounded p-2 m-2 bg-blue-600 hover:text-white"><a href="/customer/create">add new customer  </a></button>
    
    <div>
        <p class="bg-blue-600 flex p-12 m-2 md:p-14 lg:p16 xl:p-20 text-black text-3xl items-center justify-center">
            Quotes from satisfied customers: Share positive feedback about their experience shopping at Homeway Households
        </p>
    </div>
</x-slot>
</x-layout>