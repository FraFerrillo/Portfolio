<x-layout>
    <div class="container my-5 ">
        <div class="my-5 row">
            <div class="col-md-8">
                <h1 class="text-center">Benvenuti in Presto</h1>
            <div class="col-12 md-col-12 justify-content-center align-items-center d-flex flex-wrap mt-5 space-around">
            @foreach ($ads as $ad)
                <div class="p-2"><x-_ad
                title="{{$ad->title}}"
                body="{{$ad->body}}"
                href="{{route('public.ads.category',[$ad->category->name,$ad->category->id])}}"
                category="{{$ad->category->name}}"
                date="{{$ad->created_at->format('d/m/Y')}}"
                user="{{$ad->user->name}}"
                price="{{$ad->price}}"
                link="{{route('ads.show', compact('ad'))}}"
                />
                </div>
            @endforeach
            </div>    
        </div>
        
    </div>
</x-layout>
