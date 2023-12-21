@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('List Student :P') }}</div>

                <div class="card-body">
                    <a href="{{route('create')}}" class="btn btn-primary">Create Student</a>
                    <table class="table table-responsive">
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Phone Number</th>
                            <th>Classroom</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($students as $student)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$student->name}}</td>
                                <td>{{$student->phone_number}}</td>
                                <td>{{$student->classroom->name}}</td>
                                <td>
                                    <a href="{{route('edit', ['id' => $student->id])}}" class="btn btn-warning">Edit</a>

                                    <form action="{{route('delete', ['id' => $student->id])}}"
                                        method="post">
                                        @method('delete')
                                        @csrf
                                        <input type="submit" value="Delete" class="btn btn-danger">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
