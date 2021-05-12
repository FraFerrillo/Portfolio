<x-layout>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="text-center">Benvenuti in Presto</h1>
        </div>
    </div>
</div>
@foreach ($ads as $ad)
<div class="row justify-content-center mb-5">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{$ad->title}}</div>
        </div>
        <div class="card-body">
            <p>
                <img src="https://via.placeholder.com/300x150.png" class="rounded float-right" alt="">
                {{$ad->body}}
            </p>
        </div>
        <div class="card-footer d-flex justify-content-between">
            <strong>Category: <a href="#">{{$ad->category->name}}</a></strong>
            <i>{{$ad->created_at->format('d/m/Y')}} - {{$ad->user->name}}</i>
        </div>
    </div>
</div>

@endforeach
</x-layout>
