<x-layout>
    <div class="container mb-5">
        <div class="row">
            @foreach ($ads as $ad)
                <div class="col-12 col-md-4 mt-5">
                    <div class="p-2">
                        <div class="text-center">
                            @if(Auth::user())
                                <form action="{{route('revisor.undo', $ad->id)}}" method=POST>
                                @csrf
                                <button type="submit" class="btn btn-lr">Revisiona</button>
                                </form>
                            @endif
                        </div>


                        <div class="card my-2 shadow border-0" style="width: 18rem;">
                            <div id="owl-demo" class="owl-carousel owl-theme">
                                @foreach ($ad->images as $image)
                                <div class="item"><img src="{{$image->getUrl(200, 200)}}" alt="The Last of us"></div>
                                @endforeach
                            </div>
                            <div class="card-body bg-light">
                                <h4 class="card-title text-start"><a href="{{route('ads.show', compact('ad'))}}">{{$ad->title}}</a></h4>
                                <h5 class="card-text text-start">{{$ad->body}}</h5>
                                <h5 class="text-center">{{$ad->price}}€</h5>
                                <strong>Category: <a href="{{route('public.ads.category',[$ad->category->name,$ad->category->id])}}">{{$ad->category->name}}</a></strong><i>{{$ad->created_at->format('d/m/Y')}} - {{$ad->user->name}}</i>
                            </div>
                            </div>
                        </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-7 offset-md-5">
            {{$ads->links()}}
        </div>
    </div>
</x-layout>


