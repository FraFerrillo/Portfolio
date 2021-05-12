<x-layout>
    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="text-center">Benvenuti in Presto</h1>
            </div>
        </div>
        @foreach ($ads as $ad)
        <x-_ad
         title="{{$ad->title}}"
         body="{{$ad->body}}"
         href="{{route('public.ads.category',[$ad->category->name,$ad->category->id])}}"
         category="{{$ad->category->name}}"
         date="{{$ad->created_at->format('d/m/Y')}}"
         user="{{$ad->user->name}}"
        />
        @endforeach

    </div>
</x-layout>
