@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/expenses" class="btn btn-outline-primary btn-sm">Go back</a>
                <div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-4">
                    <h1 class="display-4">Edit Expense </h1>
                    <p>Edit and submit this form to update a expense</p>

                    <hr>

                    <form action="" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="title">Expense Name</label>
                                <input type="text" id="title" class="form-control" name="title"
                                       placeholder="Enter Name of the Expense" value="{{ $expense->Name }}" required>
                            </div>

                            <div class="control-group col-12">
                                <label for="title">Expense Amount</label>
                                <input type="number" id="amount" class="form-control" name="amount"
                                       placeholder="Enter Amount of the Expense" value="{{ $expense->Amount }}" required>
                            </div>
                            
                            <div class="control-group col-12 mt-2">
                                <label for="body">Expense Description</label>
                                <textarea id="body" class="form-control" name="body" placeholder="Enter Description of the Expense"
                                          rows="5" required>{{ $expense->Description }}</textarea>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="control-group col-12 text-center">
                                <button id="btn-submit" class="btn btn-primary">
                                    Update Expense
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection