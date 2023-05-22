@extends('layouts.admin')

@section('page-name')
    {{ $project->name }}
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    {{ $project->description }}
                </div>
            </div>
        </div>
    </div>
@endsection
