@extends('layout')

@section('title')
    <title>Posts</title>
@endsection

@section('main')

    <h3 class="ms-5">Articles</h3>
    <div class="container text-center mt-4">
        <div class="row gx-5">
            <div class="col border border-danger p-2 m-2">
                <h4>How PHP Divide Our Class in 2 Extremist Groups</h4>
                <p>As the weeks pass by, the heat from PHP do not subside. Class is divides between hatred and mere tolerance, but there is no escape from PHP. He is here to stay - and there is nothing that we can do about that. Apart complaining. We can complain. A lot.</p>
            </div>
            <div class="col border border-danger p-2 m-2">
                <h4>Is Laravel the new Marvel?</h4>
                <p>Laravel is the new kid in the block. And it sounds like "Marvel". But apart from the fonetics, they don't share any similarities.</p>
            </div>
            <div class="col border border-danger p-2 m-2">
                <h4>How Coffee Saved the World (again!)</h4>
                <p>Another week, another Monday, and the developers apprentice's would have not survived without the help of the magic black liquid that powers their brains.</p>
            </div>
        </div>
    </div>
@endsection