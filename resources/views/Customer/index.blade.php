<x-layout>
    <x-slot name='content'>
    <h1 class="text-center p-2 m-2 text-2xl">customers</h1>

    <div class="card p-2 m-2 ">
        @forelse($customers as $customer)
            <ul class="m-2 p-2 border border-black">
                <li>  
                    <img class="inline-block p-2 m-2 h-20 w-20 rounded-full ring-2 ring-blue" src="https://tailwindui.com/img/logos/mark.svg?color=blue&shade=400" alt="">
                </li>
                <li class="bold text-xl text-blue-600">name : <a href="/customers/{{ $customer->id }}"> {{ $customer->name }}</a></li>
                <li class="">email : {{ $customer->email }}</li>
                <li class="">id : {{ $customer->id }}</li>
            </ul>
        @empty
        <div class="p-6 bg-white flex items-center space-x-4 x-auto">
            <div ><p class="text-red-600">No customers to show</p></div>
        </div>
           
        @endforelse
    </div>

    <button class="p-2 m-2 bg-blue-600 hover:text-white"><a href="/customer/create">+ new customer  </a></button>
    
    <div>
        <p class="bg-blue-600 flex p-12 m-2 md:p-14 lg:p16 xl:p-20 text-black text-3xl items-center justify-center">
            Quotes from satisfied customers: Share positive feedback about their experience shopping at Homeway Households
        </p>
    </div>
</x-slot>
</x-layout>