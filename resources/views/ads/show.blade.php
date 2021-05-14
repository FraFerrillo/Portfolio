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
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header"> Annuncio # {{$ad->id}}</div>
        
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-2"><h3>Utente</h3></div>
                                    <div class="col-md-10">
                                        #{{$ad->user->id}},
                                        {{$ad->user->name}},
                                        {{$ad->user->email}},
                                    </div>
                                </div>
        
                                <hr>
        
                                <div class="row">
                                    <div class="col-md-2"><h3>Titolo</h3></div>
                                    <div class="col-md-10"> {{$ad->title}}</div>
                                </div>
        
                                <hr>
        
                                <div class="row">
                                    <div class="col-md-2"><h3>Descrizione</h3></div>
                                    <div class="col-md-10">{{$ad->body}}</div>
        
                                </div>
        
                                <div class="row">
                                    <div class="col-md-2"><h3>Immagini</h3></div>
                                    <div class="col-md-10">
                                        <div class="row mb-2">
                                            <div class="col-md-4">
                                                <img src="https://via.placeholder.com/300x150.png" class="rounded" alt="">
                                            </div>
                                            <div class="col-md-8">
                                                ... ... ...
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-4">
                                                <img src="https://via.placeholder.com/300x150.png" class="rounded" alt="">
                                            </div>
                                            <div class="col-md-8">
                                                ... ... ...
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
