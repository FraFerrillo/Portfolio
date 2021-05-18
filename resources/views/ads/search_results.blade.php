<x-layout>
    <section class="content-section" id="portfolio">
        <div class="container">
            <div class="content-section-heading text-center">
                <h3 class="text-secondary mb-0">Risultati ricerca per {{ $q }}</h3>
            </div>
            <div class="row no-gutters">
                @foreach($ads as $ad)
                @if ($ad->images->count())
                <x-_ad
                    image="{{$ad->images->first()->getUrl(300, 150)}}"
                    title="{{$ad->title}}"
                    body="{{$ad->body}}"
                    href="{{route('public.ads.category',[$ad->category->name,$ad->category->id])}}"
                    category="{{$ad->category->name}}"
                    date="{{$ad->created_at->format('d/m/Y')}}"
                    user="{{$ad->user->name}}"
                    price="{{$ad->price}}"
                    link="{{route('ads.show', compact('ad'))}}"
                />
                @else
                <x-_ad
                image="https://via.placeholder.com/150/300"
                title="{{$ad->title}}"
                body="{{$ad->body}}"
                href="{{route('public.ads.category',[$ad->category->name,$ad->category->id])}}"
                category="{{$ad->category->name}}"
                date="{{$ad->created_at->format('d/m/Y')}}"
                user="{{$ad->user->name}}"
                price="{{$ad->price}}"
                link="{{route('ads.show', compact('ad'))}}"
                />
                @endif
                @endforeach
            </div>
        </div>
    </section>
</x-layout>
