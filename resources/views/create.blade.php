@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Student') }}</div>

                <div class="card-body">
                    <form action="" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" id="phone" name="phone">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Classroom Name</label>
                            <select name="classroom_id" id="" class="form-select">
                                @foreach ($classrooms as $classroom)
                                    <option value="{{$classroom->id}}">
                                        {{$classroom->name}}
                                    </option>
                                @endforeach
                            </select>
                            {{-- <input type="text" class="form-control" id="phone" name="phone"> --}}
                        </div>
                        <input type="submit" value="submit" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
