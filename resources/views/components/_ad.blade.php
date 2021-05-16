<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card my-3" style="width: 18rem;">
                <img src="https://via.placeholder.com/300x150.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><a href="{{$link}}" class="btn btn-primary">{{$title}}</a></h5>
                  <p class="card-text">{{$body}}</p>
                  <h5>{{$price}}€</h5>
                  <strong>Category: <a href="{{$href}}">{{$category}}</a></strong><i>{{$date}} - {{$user}}</i>
                  @if(Auth::user())
                  <form action="{{$undo}}" method=POST>
                    @csrf
                    <button type="submit" class="btn btn-danger">Revisiona</button>
                    </form>
                  @endif
                </div>
            </div>
        </div>
    </div>
</div>

