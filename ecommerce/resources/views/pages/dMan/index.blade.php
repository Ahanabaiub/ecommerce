@extends('layouts.app')
@section('content')
  
    
   <br>

   
   <form action="{{route('order.search')}}" method="post">
        {{csrf_field()}}
       <table>
           <tr>
               <td><input type="text" name="src"></td>
               <td><input type="submit" value="Search"></td>
           </tr>
       </table>
   </form>
   <br>

   <table class="table table-borded" >
        <tr>
            <th>Order Id</th>
            <th>Ordered By</th>
            <th>Orderd At</th>
            <th>Status</th>
           
            <th></th>
            <th></th>
            <th></th>
        </tr>
        @foreach($orders as $c)
            <tr>
                <td>{{$c->id}}</td>
                <td>{{$c->customer->user->username}}</td>
                <td>{{$c->created_at}}</td>
                <td>{{$c->status}}</td>
               
                <td><a class="btn btn-success" href="/order/details/{{$c->id}}">Details</a></td>
                @if($c->status=='Ordered')
                
                    <td><a class="btn btn-danger" href="/order/cancell/{{$c->id}}">Cancell</a></td>
                
                @endif
               
                @if($c->status=='Ordered')
                
                    <td><a class="btn btn-info" href="/order/delevered/{{$c->id}}">Delivered</a></td>
                
                @endif
            </tr>
        @endforeach

    </table>
   
@endsection