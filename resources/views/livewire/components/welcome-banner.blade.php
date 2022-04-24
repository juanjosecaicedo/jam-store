<div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8" >
    <section class="banner relative" aria-label="Banner Basic ">
        <div class="splide__track">
            <ul class="splide__list">
                @foreach($sliders as $item)
                    <li class="splide__slide" data-splide-interval="1000">
                        <div class="bg-no-repeat bg-cover object-cover flex items-center" style="background-image: url('{{$item["img"]}}'); min-height: 550px">
                            <div class="ml-8 max-w-sm">
                                <h3 class="text-2xl font-butler font-extrabold sm:text-4xl">{{$item['text']}}</h3>
                                <a href="{{$item['url']}}" class="inline-block px-5 py-3 mt-6 text-sm font-medium text-white bg-black hover:ring-1 hover:ring-black uppercase hover:opacity-90">
                                    Saber más
                                </a>
                            </div>

                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var splide = new Splide('.banner', {
            type: 'loop',
            rewind: true,
            arrows: false
        })
        splide.mount();
    });


</script>
