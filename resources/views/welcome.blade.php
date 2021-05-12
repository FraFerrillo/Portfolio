<x-layout>
    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="text-center">Benvenuti in Presto</h1>
            </div>
        </div>
        @foreach ($ads as $ad)
        <x-_ad ad="{{$ad}}"/>
        @endforeach
        
    </div>
</x-layout>
