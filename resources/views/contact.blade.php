@extends('layout')

@section('title')
    <title>Spill the Tea</title>
@endsection

@section('main')
    <div class="card m-5 w-50 mx-auto card-body">
        <h4 class="card-title mb-4">Spill the Tea!</h4>
        <h5 class="card-text mb-3">Have some news about the class that you want to share? Send to us and we will do the spilling for you!</h5>
        <form id="contact_form" name="contact_form" action="{{ route('submitForm') }}" method="POST">
            @csrf
            <label for="subject">Subject</label>
            <input type="text" required maxlength="50" class="form-control m-2" id="subject" name="subject">
            <label for="email">Email address</label>
            <input type="email" required maxlength="50" class="form-control m-2" id="email" name="email" placeholder="name@example.com">
            <label for="message">Message</label>
            <textarea required class="form-control m-2" id="message" name="message" rows="4"></textarea>
            <button type="submit" class="btn btn-danger px-4 btn-lg">Submit</button>
        </form>
    </div>

@endsection