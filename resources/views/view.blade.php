@extends('layout.app')

@section('title','View Expenso')

@section('content')
    
<div class="container">
    <!-- Expenses -->
    @if(count($expense)>0)
        
        <div class="panel panel-default">
            <div class="panel-heading">
               
                <form action="/view/search" method="post">
                    {{ csrf_field() }}
                <label>Search : </label>
                
                    From : <input type="text" name="efrom">
                    &nbsp;To : <input type="text" name="eto">
                    <button type="submit" class="btn btn-danger">
                        <i class="fa fa-btn fa-trash"></i>Search
                    </button>
                </form>
            </div>
            
            <div class="panel-body">
                <table class="table table-stripped task-table">
                    
                    <tbody>
                        <th>Expense</th>
                        <th>Date</th>
                        <th>Amount(INR)</th>
                        <th></th>
                        <?php $sum=0 ?>
                        @foreach($expense as $exps)
                            <tr>
                                <td class="table-text"><div>{{ $exps->expense }}</div></td>
                                <td><label>{{ $exps->edate }}</label></td>
                                <td><label>{{ $exps->amount }}</td>
                                
                                <td>
                                    <form action="/view/delete/{{$exps->id}}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <button type="submit" class="btn btn-danger">
                                            <i class="fa fa-btn fa-trash"></i>Delete
                                        </button>
                                    </form>
                                </td>
                                <?php $sum=$sum+$exps->amount ?>
                            </tr>
                        @endforeach
                    </tbody>
                        
                </table>
                <hr/>
                <div><b>Total Amount :INR. {{$sum}} </b> </div>
            
            </div>
            
        </div>
    
    @endif
</div>

@endsection