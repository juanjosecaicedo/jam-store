<livewire:components.welcome-banner/>

<div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8">

    <div class="grid grid-cols-1 gap-10 pb-20 md:pb-24 lg:grid-cols-2 lg:pb-32 mt-10">
        <div class="mx-auto px-10 text-center lg:mx-0 lg:text-left">
            <div class="pb-4 md:pb-10 lg:w-3/4 lg:pt-10 xl:w-2/3">
                <h1 class="font-butler text-3xl text-secondary md:text-4xl lg:text-4.5xl">
                    Trending Elyssi Collections
                </h1>
                <p class="pt-4 font-hk text-lg text-secondary-lighter">
                    Checkout our newest trends this coming season
                </p>
            </div>
        </div>
        <div class="mt-6 sm:mt-10 lg:mt-0">
            <div class="relative h-56 bg-cover bg-left bg-no-repeat px-10 sm:h-80 sm:bg-center"
                 style="background-image: url('{{ asset('static/images/collection-01.jpg') }}')">
                <div class="absolute inset-0 w-2/3 px-6 py-14 md:px-10">
                    <h3 class="font-hk text-xl font-semibold text-secondary sm:text-2xl md:text-3xl">
                        Passion Pearl
                        <br>
                        Collection
                    </h3>
                    <a href="" class="group flex items-center pt-5">
                        <div class="flex h-8 w-8 items-center justify-center rounded-full bg-white">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 class="h-4 w-4 text-xl text-primary transition-colors group-hover:text-v-red"
                                 fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                            </svg>
                        </div>
                        <span
                            class="-mt-1 pl-3 font-hk font-semibold leading-none text-primary transition-colors group-hover:text-v-red sm:pl-5 sm:text-lg">
                        Consiguelo ahora
                    </span>
                    </a>
                </div>
            </div>
        </div>
        <div class="relative h-56 bg-cover bg-left bg-no-repeat sm:h-80 sm:bg-center lg:h-68"
             style="background-image: url('{{ asset('static/images/collection-02.jpg') }}')">
            <div class="absolute inset-0 px-6 py-14 md:w-2/3 md:px-10">
                <h3 class="font-hk text-xl font-semibold text-secondary sm:text-2xl md:text-3xl">
                    Hoodie your way! For Men
                </h3>
                <a href="#" class="group flex items-center pt-5">
                    <div class="flex h-8 w-8 items-center justify-center rounded-full bg-white">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="h-4 w-4 text-xl text-primary transition-colors group-hover:text-v-red"
                             fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                        </svg>
                    </div>
                    <span
                        class="-mt-1 pl-3 font-hk font-semibold leading-none text-primary transition-colors group-hover:text-v-red sm:pl-5 sm:text-lg">
                        Consiguelo ahora
                    </span>
                </a>
            </div>
        </div>
        <div
            class="relative h-56 bg-cover bg-left bg-no-repeat px-10 sm:h-80 sm:bg-center lg:row-span-2 lg:h-auto"
            style="background-image: url('{{ asset('static/images/collection-shoes.jpg') }}')">
            <div class="absolute inset-0 w-2/3 px-6 py-14 sm:py-16 md:px-10">
                <h3 class="font-hk text-xl font-semibold text-secondary sm:text-2xl md:text-3xl">
                    W.W. Shoes
                    <br>
                    by Elyssi
                </h3>
                <a href="#" class="group flex items-center pt-5">
                    <div class="flex h-8 w-8 items-center justify-center rounded-full bg-white">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="h-4 w-4 text-xl text-primary transition-colors group-hover:text-v-red"
                             fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                        </svg>
                    </div>
                    <span
                        class="-mt-1 pl-3 font-hk font-semibold leading-none text-primary transition-colors group-hover:text-v-red sm:pl-5 sm:text-lg">
                        Consiguelo ahora
                    </span>
                </a>
            </div>
        </div>
        <div class="relative h-56 bg-cover bg-left bg-no-repeat sm:h-80 sm:bg-center lg:h-68"
             style="background-image: url('{{ asset('static/images/collection-03.jpg') }}')">
            <div class="absolute inset-0 w-2/3 px-6 py-14 md:px-10">
                <h3 class="font-hk text-xl font-semibold text-secondary sm:text-2xl md:text-3xl">
                    Anabelle Purses by Elyssi
                </h3>
                <a href="#" class="group flex items-center pt-5">
                    <div class="flex h-8 w-8 items-center justify-center rounded-full bg-white">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="h-4 w-4 text-xl text-primary transition-colors group-hover:text-v-red"
                             fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                        </svg>
                    </div>
                    <span
                        class="-mt-1 pl-3 font-hk font-semibold leading-none text-primary transition-colors group-hover:text-v-red sm:pl-5 sm:text-lg">
                        Consiguelo ahora
                    </span>
                </a>
            </div>
        </div>
    </div>

    @if ($this->saleCollection)
        <x-collection-sale/>
    @endif

    @if ($this->randomCollection)
        <section>
            <h2 class="text-3xl font-bold">
                {{ $this->randomCollection->translateAttribute('name') }}
            </h2>

            <div class="grid grid-cols-2 mt-8 lg:grid-cols-4 gap-x-4 gap-y-8">
                @foreach ($this->randomCollection->products as $product)
                    <x-product-card :product="$product"/>
                @endforeach
            </div>
        </section>
    @endif
</div>
