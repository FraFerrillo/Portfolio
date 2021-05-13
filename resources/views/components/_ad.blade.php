{{-- <div class="row justify-content-center mb-5">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header"><a href="{{$link}}" class="btn btn-primary">{{$title}}</a></div>
        </div>
        <div class="card-body">
            <p>
                <img src="https://via.placeholder.com/300x150.png" class="rounded float-right" alt="">
                {{$body}}
                {{$price}}
            </p>
        </div>
        <div class="card-footer d-flex justify-content-between">
            <strong>Category: <a
                 href="{{$href}}">{{$category}}</a></strong>
            <i>{{$date}} - {{$user}}</i>
        </div>
    </div>
</div> --}}
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card my-3" style="width: 18rem;">
                <img src="https://via.placeholder.com/300x150.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><a href="{{$link}}" class="btn btn-primary">{{$title}}</a></h5>
                  <p class="card-text">{{$body}}</p>
                  <h5>{{$price}}</h5>
                  <strong>Category: <a href="{{$href}}">{{$category}}</a></strong><i>{{$date}} - {{$user}}</i>
                </div>
              </div>
        </div>
    </div>
</div>

