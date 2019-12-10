@extends('layouts.app')
@section('content')


<form action="{{route('address.store')}}" method="POST" class="form-horizontal">
    {{ csrf_field() }}

    <div class="col-sm-6">
        <label for="name"  class="col-sm-2 control-label">Name</label>
        <input   name="name" class="form-control" id="name" placeholder="Address">
    </div>

    <div class="col-sm-6">
        <label for="address"  class="col-sm-2 control-label">Address</label>
        <input   name="address" class="form-control" id="address" placeholder="Address only">
    </div>

    <div class="col-sm-6">
        <label for="house number" class="col-sm-2 control-label">House Number</label>
        <input type="number" name="house_number" class="form-control" id="house number" placeholder="12">
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i>Add address</button>
        </div>
    </div>

</form>
@endsection