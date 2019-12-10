@extends('layouts.withOutJs')
@section('content')
<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Manage <b>Addresses</b></h2>
                </div>
                <div class="col-sm-6">
                    <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Employee</span></a>
                </div>
            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>House Number</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                @foreach($address as $oneAddress)
                    <td>{{$oneAddress->name}}</td>
                    <td>{{$oneAddress->address}}</td>
                    <td>{{$oneAddress->house_number}}</td>
                    <td>
                        <form action="{{route('address.destroy', $oneAddress->id)}}" id="delete" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}

                            <a class="delete" onclick="document.getElementById('delete').submit();"><i class="material-icons"  name="delete" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </form>

                        <div>
                            <a href="{{route('address.edit', $oneAddress->id)}}" class="edit"><i  title="Edit" class="material-icons">&#xE254;</i> </a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div id="addEmployeeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{route('address.store')}}" method="POST" class="form-horizontal">
                {{ csrf_field() }}
                <div class="modal-header">
                    <h4 class="modal-title">Add Employee</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input class="form-control" name="address" required>
                    </div>
                    <div class="form-group">
                        <label>House Number</label>
                        <textarea class="form-control" name="house_number" required></textarea>
                    </div>

                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-success" value="Add">
                </div>
            </form>
        </div>
    </div>
</div>







































<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@endsection