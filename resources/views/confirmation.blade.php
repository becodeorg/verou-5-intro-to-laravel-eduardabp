@extends('layout')

@section('main')
    <div class="text-center">
        <h3>Thank you, your tea has been submited!</h3>
        <iframe src="https://giphy.com/embed/RhjdalP2Gnb5uy5vlW" width="480" height="270" frameBorder="0" class="giphy-embed mt-2" allowFullScreen></iframe><a href="https://giphy.com/gifs/brooklynninenine-brooklyn-nine-99-b99-RhjdalP2Gnb5uy5vlW"></a>
        <br>
        <a href="{{ route('contact') }}" class="fs-2 mt-3">Spill more!</a>
    </div>
@endsection