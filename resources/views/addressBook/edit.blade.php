@extends('layouts.withOutJs')
@section('content')

<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Manage <b>Addresses</b></h2>
                </div>
            </div>
        </div>
        <form action="{{route('address.update', $address)}}" id="delete" method="post">
            {{ csrf_field() }}
            {{ method_field('PUT') }}

        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Address</th>
                    <th>House Number</th>
                </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    <input type="text" class="" name="name" value="{{$address->name}}">
                </td>

                <td>
                    <input type="text" class="" name="address" value="{{$address->address}}">
                </td>

                <td>
                    <input type="number" class="" name="house_number" value="{{$address->house_number}}">
                </td>
            </tr>
            </tbody>
        </table>

    <div class="modal-footer">
        <input type="submit" class="btn btn-success" value="Save Changes">
    </div>
        </form>
    </div>
</div>
@endsection