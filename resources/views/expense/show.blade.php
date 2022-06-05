@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/expenses" class="btn btn-outline-primary btn-sm">Go back</a>
                <h3 class="display-one">{{ ucfirst($expense->Name) }}</h3>
                <h3 class="display-one">{{ $expense->Amount }}</h3>
                <p>{!! $expense->Description !!}</p> 
                <hr>
                <a href="/expenses/{{ $expense->id }}/edit" class="btn btn-outline-primary">Edit Expense</a>
                <br><br>
                <form id="delete-frm" class="" action="" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger">Delete Expense</button>
                </form>
            </div>
        </div>
    </div>
@endsection