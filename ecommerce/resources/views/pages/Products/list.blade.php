@extends('layouts.app')
@section('content')
<h1 align="center">Product </h1>
  
    <table class="table table-borded">
        <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Unit Price</th>
            <th>Description</th>
           
            
        @foreach($products as $p)
            <tr>
                <td><img src="{{$p->image}}" style="width:100px; hight:110px;"></td>
                <td>{{$p->name}}</td>
                <td>{{$p->unitPrice}}</td>
                <td>{{$p->details}}</td>
              
              
            </tr>
        @endforeach
    </table>
@endsection
