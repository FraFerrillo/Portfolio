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
                        <div class="card bg-light border-0 shadow mt-5">
                            <div class="card-header bg-dark text-white"> Annuncio # {{$ad->id}}</div>

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
                                        @foreach ($ad->images as $image)
                                            <div class="row mb-2">
                                                <div class="col-md-4">
                                                    <img src="{{Storage::url($image->file)}}" class="rounded" alt="">
                                                </div>
                                                <div class="col-md-8">
                                                    {{$image->id}} <br>
                                                    {{$image->file}} <br>
                                                    {{Storage::url($image->file)}} <br>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="margin-bottom: 200px"></div>
</x-layout>
