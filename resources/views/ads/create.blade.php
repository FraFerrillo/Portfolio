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
            <h1 class="text-center">{{Auth:user()}}</h1>   
        <form action="{{route('ads.store')}}" method='POST'>
            @csrf
            <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
                <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>
</x-layout>
                
            