<div class="row justify-content-center mb-5">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{$title}}</div>
        </div>
        <div class="card-body">
            <p>
                <img src="https://via.placeholder.com/300x150.png" class="rounded float-right" alt="">
                {{$body}}
            </p>
        </div>
        <div class="card-footer d-flex justify-content-between">
            <strong>Category: <a
                 href="{{$href}}">{{$category}}</a></strong>
            <i>{{$date}} - {{$user}}</i>
        </div>
    </div>
</div>
