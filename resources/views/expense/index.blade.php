@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                 <div class="row">
                    <div class="col-8">
                        <h1 class="display-one">My Expenses!</h1>
                        <p>Click on any one to know more!</p>
                    </div>
                    <div class="col-4">
                        <p>Create new Expense</p>
                        <a href="/expenses/create/post" class="btn btn-primary btn-sm">Add Expense</a>
                    </div>
                </div>                
                @forelse($expenses as $expense)
                    <ul>
                        <li><a href="./expenses/{{ $expense->id }}">{{ ucfirst($expense->Name) }}</a></li>
                    </ul>
                @empty
                    <p class="text-warning">No Expenses Available</p>
                @endforelse
            </div>
        </div>
    </div>
@endsection