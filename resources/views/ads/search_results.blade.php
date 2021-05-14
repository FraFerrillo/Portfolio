<x-layout>
    <section class="content-section" id="portfolio">
        <div class="container">
            <div class="content-section-heading text-center">
                <h3 class="text-secondary mb-0">Risultati ricerca per {{ $q }}</h3>
            </div>
            <div class="row no-gutters">
                @foreach($ads as $ad)
                {{-- <div class="col-lg-6">
                    <a class="portfolio-item" href="{{route('ads.show', compact('ad'))}}"></a>
                    <span class="caption">
                        <span class="caption-content">
                            <h2>{{ $ad->title }}</h2>
                            <p class="mb-0"> {{ $ad->body}} </p>

                        </span>
                    </span>
                </div> --}}
                <x-_ad
                title="{{$ad->title}}"
                body="{{$ad->body}}"
                href="{{route('public.ads.category',[$ad->category->name,$ad->category->id])}}"
                category="{{$ad->category->name}}"
                date="{{$ad->created_at->format('d/m/Y')}}"
                user="{{$ad->user->name}}"
                price="{{$ad->price}}"
                link="{{route('ads.show', compact('ad'))}}"
               />
                @endforeach


            </div>
        </div>


    </section>
</x-layout>
