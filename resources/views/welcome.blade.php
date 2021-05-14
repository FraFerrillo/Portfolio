<x-layout>
    <div class="container my-5 ">
        <div class="my-5 row">
            <div class="col-12">
                @if (session('access.denied.revisor.only'))
                <div class="alert alert-danger">
                    Accesso non consentito -solo per revisori
                </div>
                @endif
                <h1 class="text-center">Benvenuti in Presto</h1>
                <div class="row">
                    @foreach ($ads as $ad)
                    <div class="col-12 col-md-4 justify-content-center align-items-center d-flex flex-wrap mt-5">
                        <div class="p-2">
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
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-layout>
