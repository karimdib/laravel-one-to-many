@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <form action="{{route('admin.projects.show', $project)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group p-3">
                <label for="name" class="mb-2">name</label>
                <input type="text" class="form-control" id="name" placeholder="name" name="name">
            </div>
            <div class="form-group p-3">
                <label for="description" class="mb-2">description</label>
                <input type="text" class="form-control" id="description" placeholder="description" name="description">
            </div>
            <div class="form-group p-3">
                <label for="">scgli il tipo</label>
                <select name="type_id" class="form-control" id="type_id">
                    <option value="" disabled='disabled'>Scegli un tipo</option>
                    @foreach ($types as $type)
                    <option>{{ $type->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary m-3">Submit</button>
        </form>
    </div>
</div>
@endsection