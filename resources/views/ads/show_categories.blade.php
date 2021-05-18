<x-layout>
    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="text-center">Annunci per categoria: {{$category->name}}</h1>
            </div>
        </div>
            <div class="row">
                @foreach ($ads as $ad)
                <div class="col-md-4 justify-content-center align-items-center d-flex flex-wrap mt-5">
                <x-_ad
                @foreach ($ad->images as $image)
                image="{{Storage::url($image->file)}}"
                @endforeach
                title="{{$ad->title}}"
                body="{{$ad->body}}"
                href="{{route('public.ads.category',[$category->name,$category->id])}}"
                category="{{$category->name}}"
                date="{{$ad->created_at->format('d/m/Y')}}"
                user="{{$ad->user->name}}"
                price="{{$ad->price}}"
                link="{{route('ads.show', compact('ad'))}}"
                />
                </div>
                @endforeach
            </div>
        <div class="row mt-4">
            <div class="col-md-7 offset-md-5">
                {{$ads->links()}}
            </div>
        </div>
    </div>
    <div style="margin-top : 180px"></div>
</x-layout>

