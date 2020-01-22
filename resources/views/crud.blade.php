@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card-header text-center mb-4">
                    <h1>Simple CRUD</h1>
                </div>
                @if(Session::has('message'))
                    <p style="color: red;">Employ Name Already Exists!</p>
                @endif
                <form method="post" action="/add">

                    <div class="form-group row">
                        <label for="name"
                               class="col-md-4 col-form-label text-md-right">Employ Name:</label>

                        <div class="col-md-6">
                            <input type="text" width="100%" name="emp_name">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name"
                               class="col-md-4 col-form-label text-md-right">Salary:</label>

                        <div class="col-md-6">
                            <input type="number" min="0" step="1" name="salary">
                        </div>
                    </div>

                    {{csrf_field()}}
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <input type="submit" value="Add Employ">
                        </div>
                    </div>
                </form>
                <br>
                <br>
                <div class="container pt-4">
                    @foreach($employ as $emp)
                        <li>
                            {{$emp->emp_name}}
                            {{$emp->salary}} ---
                            <a href="/edit/{{$emp->id}}">Edit</a> |
                            <a href="/delete/{{$emp->id}}">Delete</a>
                        </li>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection