@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card-header text-center mb-4">
                    <h1>Edit Employ</h1>
                </div>
                <form method="post" action="/update/{{$id}}">

                    <div class="form-group row">
                        <label for="name"
                               class="col-md-4 col-form-label text-md-right">Employ Name:</label>

                        <div class="col-md-6">
                            <input type="text" name="emp_name" value="{{$emp_name}}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name"
                               class="col-md-4 col-form-label text-md-right">Salary:</label>

                        <div class="col-md-6">
                            <input type="number" min="0" step="1" name="salary" value="{{$salary}}">
                        </div>
                    </div>

                    {{csrf_field()}}
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <input type="submit" value="Edit Employ">
                        </div>
                    </div>
                </form>
            </div>
@endsection