@extends('layouts.app')
@section('content')
  

<form  action="/update/profile" style="width: 1050px; margin-left: 300px" method="post">
        <!-- Cross Site Request Forgery-->
        {{csrf_field()}}
        <input Type="hidden" name="id" value="{{$dm->id}}">
       
        <div class="col-md-4 form-group">
            <span>Password</span>
            <input type="text" name="password" value="{{$dm->user->password}}"class="form-control">
            @error('password')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Email</span>
            <input type="text" name="email" value="{{$dm->user->email}}" class="form-control">
        </div>
        <div class="col-md-4 form-group">
            <span>Full Nmae</span>
            <input type="text" name="name" value="{{$dm->name}}"class="form-control">
            @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span>Address</span>
            <input type="text" name="address" value="{{$dm->address}}"class="form-control">
            @error('address')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
       
        <div class="col-md-4 form-group">
            <span>Phone</span>
            <input type="text" name="phone" value="{{$dm->phone}}"class="form-control">
            @error('phone')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
       
      
        <br>
        <input type="submit" class="btn btn-success" value="Edit" >
    </form>
    @endsection