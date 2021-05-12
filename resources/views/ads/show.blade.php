<x-layout>
    <div class="container">
        <div class="row">
            @if (session('message'))
            {{session('message')}}
            @endif
            @if ($errors->any())
            @foreach ($errors->all() as $error)
            <div class="alert alert-danger my-2">
                <p>{{$error}}</p>
            </div>
            @endforeach
            @endif
            <div class="col-12">
                <div class="card">
                    <div class="card-header">{{$ad->title}}</div>
                </div>
                <div class="card-body">
                    <p>
                        <img src="https://via.placeholder.com/300x150.png" class="rounded float-right" alt="">
                        {{$ad->body}}
                        {{$ad->price}}
                    </p>
                </div>
                <div class="card-footer d-flex justify-content-between">
                    <strong>Category: <a>{{$ad->category->name}}</a></strong>
                    <i>{{$ad->created_at->format('d/m/Y')}} - {{$ad->user->name}}</i>
                </div>
        </div>
    </div>
</x-layout>
