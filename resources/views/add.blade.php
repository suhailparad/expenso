@extends('layout.app')

@section('content')
    <div class="container">
        <div class="col-sm-12">
            
            <form action="/addex" method="post" class="form-horizontal">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="expense-desc" class="col-sm-3 control-label">Expense</label>
                    <div class="col-sm-6">
                        <input type="text" name="descr" id="expense-desc" class="form-control" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="expense-date" class="col-sm-3 control-label">Date</label>
                    <div class="col-sm-6">
                        <input type="text" name="edate" id="expense-date" class="form-control" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="expense-amount" class="col-sm-3 control-label">Amount</label>
                    <div class="col-sm-6">
                        <input type="text" name="amount" id="expense-amount" class="form-control" >
                    </div>
                </div>
                
                <!-- Add Task Button -->
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-6">
                        <button type="submit" class="btn btn-default">
                            <i class="fa fa-btn fa-plus"></i>Add Expense
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection