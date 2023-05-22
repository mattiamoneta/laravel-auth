@extends('layouts.admin')

@section('page-name')
    Portfolio
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Thumbnail</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($projects as $project)
                                <tr>
                                    <th scope="row">{{ $project->id }}</th>
                                    <td>{{ $project->name }}</td>
                                    <td>{{ $project->description }}</td>
                                    <td>{{ $project->thumb }}</td>
                                    <td>
                                        <a class="btn btn-primary"
                                            href="{{ route('admin.projects.show', $project->id) }}"><i
                                                class="fa-solid fa-info"></i></a>
                                        <a class="btn btn-primary"
                                            href="{{ route('admin.projects.edit', $project->id) }}"><i
                                                class="fa-solid fa-file-pen"></i></a>
                                        <a class="btn btn-danger"
                                            href="{{ route('admin.projects.destroy', $project->id) }}"><i
                                                class="fa-solid fa-trash-can"></i></a>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
