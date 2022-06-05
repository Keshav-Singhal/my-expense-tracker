@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center pt-5">
                <h1 class="display-one mt-5">{{ config('app.name') }}</h1>
                <p>This is my Expense Tracker app, click the button below to see them</p>
                <br>
                <a href="/expenses" class="btn btn-outline-primary">Show Expenses</a>
            </div>
        </div>
    </div>
@endsection