<x-layout>
    <div class="container">
        <div class="row">
            @if (session ('message'))
                <div class="alert alert-success my-3">
                    {{session('message')}}
                </div>
            @endif
            @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger my-3">
                    <p>{{$error}}</p>
                </div>
            @endforeach
            @endif    
        </div>
    </div>
</x-layout>
                
            