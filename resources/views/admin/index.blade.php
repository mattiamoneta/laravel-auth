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
                                        <form action="{{ route('admin.projects.destroy', $project->id) }}" method="post">
                                            <a class="btn btn-primary"
                                                href="{{ route('admin.projects.show', $project->slug) }}"><i
                                                    class="fa-solid fa-info"></i></a>
                                            <a class="btn btn-primary"
                                                href="{{ route('admin.projects.edit', $project) }}"><i
                                                    class="fa-solid fa-file-pen"></i></a>

                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Are you sure to delete?');"><i
                                                    class="fa-solid fa-trash-can"></i></button>
                                        </form>
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
