@extends('layouts.news')

@section('title', $news->title)

@section('content')
<h3>{{$news->title}} - {{$news->description}}</h3>
<br>
<img src="{{asset('media/images/'.$news->image)}}" class="border" width="100%" >

<hr>

<p>{{$news->text}}</p>

<hr>

<a href="{{route('home')}}">Back to home</a>

<br>
@endsection