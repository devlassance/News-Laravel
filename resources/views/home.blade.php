@extends('layouts.news')

@section('title', 'Home')

@section('content')

<div class="row row-cols-3">
    @foreach ($news as $item)
        <div class="col mb-3">
            <div class="card">
                <div class="card-wrapper">
                    <div class="card-img">
                        <img src="{{asset('media/images/'.$item->image)}}" class="border" width="100%" alt="Mobirise" title="" media-simple="true">
                    </div>
                    <div class="card-box p-3">
                        <h4 class="card-title ">{{$item->title}}</h4>
                        <p>
                            {{$item->description}} <a href="{{route('show', $item->id)}}">Learn more...</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach       
</div>

@endsection