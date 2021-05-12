<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Nuovo Annuncio
                    </div>
                    <div class="card-body">
                        @if (session('message'))
                        <div class="alert alert-success my-3">
                            {{session('message')}}
                        </div>
                        @endif
                        @if ($errors->any())
                        @foreach ($errors->all() as $error)
                        <div class="alert alert-danger my-2">
                            <p>{{$error}}</p>
                        </div>
                        @endforeach
                        
                        @endif
                        
                        <div class="col-12">
                            <h1 class="text-center">{{Auth::user()->name}}</h1>
                            <form action="{{route('ads.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <label for="category" class="col-md-4 col-form-label text-md-end">Categoria</label>
                                <div class="col-md-6">
                                    <select name="category" id="category">
                                        @foreach ($categories as $category)
                                            <option value="{{$category->id}}" {{old('category')==$category->id ? 'selected': ''}}>
                                                {{$category->name}}                                            
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3 form-group row">
                                    <label for="title">Titolo</label>
                                    <input type="text" value="{{old('title')}}" name="title" class="form-control" id="title">
                                </div>
                                <div class="mb-3 form-group row">
                                    <label for="body">Annuncio</label>
                                    <textarea name="body" id="body" cols="30" rows="10"
                                    class="form-control">{{old('body')}}</textarea>
                                </div>
                                {{-- <div class="mb-3">
                                    <label for="img">Carica un'immagine</label>
                                    <input type="file" value="{{old('img')}}" name="img" class="form-control" id="img">
                                </div> --}}
                                <button type="submit" class="btn btn-success shadow">Crea</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</x-layout>


