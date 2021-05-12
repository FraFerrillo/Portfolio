<div class="row justify-content-center mb-5">
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
</div>
