<div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <a href="#">
        <img class="p-8 rounded-t-lg" src="/docs/images/products/apple-watch.png" alt="product image" />
    </a>
    <div class="px-5 pb-5">
        <a href="#">
            <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Apple Watch Series 7 GPS, Aluminium Case, Starlight Sport</h5>
        </a>
        <div class="flex items-center mt-2.5 mb-5">
            <div class="flex items-center space-x-1 rtl:space-x-reverse">
                <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                </svg>
                <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                </svg>
                <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                </svg>
                <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                </svg>
                <svg class="w-4 h-4 text-gray-200 dark:text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                </svg>
            </div>
            <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ms-3">5.0</span>
        </div>
        <div class="flex items-center justify-between">
            <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span>
            <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add to cart</a>
        </div>
    </div>
</div>



<div class="card p-2 m-2">
        @foreach($products as $product)
        <div class="">
          <a href="/product/{{ $product->id }}">
            <div class="rounded bg-gray-400">
              <img src="https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-02.jpg" alt="Olive drab green insulated bottle with flared screw lid and flat top." class="h-full w-full object-cover object-center group-hover:opacity-75">
            </div>
          </a>
                    <div class="text-center">
                        <h3 class="mt-2"> {{ $product->name }}</h3>
                        <h3 class="mt-2"> details : {{ $product->details }}</h3>
                        <h3 class="mt-2"> price : {{ $product->price }}</h3>
                        <form class="form-control rounded" action="/cart" method="POST">
                          @csrf
                          <a href="/cart/product/{{ $product->id }}"><button class="bg-blue-400 p-2" type="submit">Buy</button></a>
                      </form>
                      </div> 
        </div>
        </div>
        @endforeach
      </div>
      </div>



Homeway Households: Shop for Quality Pre-Loved Treasures
Hero Section:

Background image: A collage of various household items like furniture, kitchenware, and decorative pieces, arranged in a warm and inviting way.
Headline: "Give your home a second-hand story. Shop pre-loved treasures at Homeway Households."
Subheading: "Find unique furniture, décor, and everyday essentials for every room, all at sustainable prices."
Call to action button: "Shop Now"
Benefits Section:

Cards with icons: Each card highlights a benefit of shopping at Homeway Households.
Sustainable Shopping: Reduce your environmental footprint by giving pre-loved items a new life.
Unique Finds: Discover one-of-a-kind pieces that add character to your home.
Affordable Prices: Furnish your home beautifully without breaking the bank.
Quality Selection: We carefully curate our collection to ensure quality and functionality.
Featured Products Section:

Carousel or grid layout: Showcase a selection of your most popular or unique items.
Each product should include a high-quality image, a brief description, and the price.
Consider using different categories or themes to help visitors navigate.
Testimonials Section:

Quotes from satisfied customers: Share positive feedback about their experience shopping at Homeway Households.
This builds trust and credibility for your shop.
Call to Action:

Clear and prominent call to action: Encourage visitors to explore your shop further.
"Browse our collection now!" or "Start giving your home a second-hand story today!"
Additional elements:

Search bar: Allow visitors to easily search for specific items.
About Us section: Briefly introduce Homeway Households and your mission.
Social media links: Connect with visitors on your social media platforms.
High-quality product photos: Showcase your items in a professional and appealing way.
Clear and concise product descriptions: Highlight the key features and benefits of each item.
By incorporating these elements and tailoring them to your specific brand, you can create a compelling and informative website homepage that attracts customers looking for unique and sustainable homeware.



<main class="p-4 m-4">
    <div class="bg-white">
      <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:mx-0">
          <p class="mt-2 text-lg leading-8 text-blue-600"> blog Post</p>
        </div>
        <div class="">
          <article class="flex max-w-2xl p-4 m-4 flex-col justify-between">
          <?php foreach($posts as $post ):?>
            <div class="group relative">
            <a href="/blog?id=<?=$post['id']?>">
                  <span class="absolute text-center inset-0"></span>
                  <h2 class="p-2 text-center m-3 text-lg font-semibold leading-6 text-blue-700 group-hover:text-black-600"> 
                    <?= htmlspecialchars($post['title']);?>
                  </h2>
            </a>
             
            <a href="#">
               <img class="rounded-t-lg" src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="">
            </a> 
           
              <p class="mt-5 line-clamp-40 leading-6 text-black-600">
              <?= htmlspecialchars($post['body']) ;?>
    <p class="p-1 m-1">
       <a class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center" href="/blog?id=<?= $post['user_id']?>">
                    Read more
      </a>
    </p>
            </p>
    
            </div>
            <div class="relative mt-8 flex items-center gap-x-4">
              <div class="text-sm leading-6">
                <div class="flex items-center gap-x-4 text-xs">
            </div>
            <div class="flex items-center gap-x-4 text-xs">
              <time datetime="2020-03-16" class="text-black-500">
                <?= $date = date('d-m-Y');?> </time>
              <a href="#" class="relative z-10 rounded-full bg-black-50 px-3 py-1.5 font-medium text-black-600 hover:bg-gray-100"> by : chatGpt*</a>
            </div>
    
            <?php endforeach; ?>
          </article>
    </main>

<x-layout>
    <x-slot name='content'>
    <main class="px-16 py-6">
    
          <header>
              <h2 class="text-center font-lg">products cart</h2>
          </header>
    
          <div class="card mt-8">
            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                  <img src="https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-02.jpg" alt="water bottle" class="h-full w-full object-cover object-center group-hover:opacity-75">
              </div>
              <div>
                @foreach($products as $product)
                   <h2><span>descr : {{ $product->details }}</span></h2>
                  <span> <h2>price : {{ $product->price }}</h2></span>
                @endforeach  
              </div>
    
              <h4 class="font-bold mt-12 pb-2 border-b border-gray-300">more products</h4>
              <div class="mt-8"> 
    
              </div>
    
              <div>
                  <div>
                      <h2 class="border-b border-gray-300">load more</h2>
                  </div>
                  <div class="mt-8">
    
                  </div>
              </div>
          </div>
      </main>
    </body>
    </x-slot>
    </x-layout>