@extends('layouts.base')


@section('content')

    <div class="container">
        <form action="{{ route('task') }}" method="post">
            <div class="form-group">
                <input id="title" name="title" placeholder="Title" class="form-control">
            </div>
             <div class="form-group">
                <input id="description" name="description" placeholder="Description" class="form-control">
            </div>

            <input id="username" name="username" type="hidden">

            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>

    </div> 

@endsection