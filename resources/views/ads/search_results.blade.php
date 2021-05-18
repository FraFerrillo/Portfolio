<x-layout>
    <section class="content-section" id="portfolio">
        <div class="container">
            <div class="content-section-heading text-center">
                <h3 class="text-secondary mb-0">Risultati ricerca per {{ $q }}</h3>
            </div>
            <div class="row no-gutters">
                @foreach($ads as $ad)
                <x-_ad
                @foreach ($ad->images as $image)
                image="{{Storage::url($image->file)}}"
                @endforeach
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
