@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center p-5">
        <div class="col-4">
            <p>{{$project->name}}</p>
            <p>{{$project->description}}</p>
            @dd($project->types)
        </div>
    </div>
</div>
@endsection