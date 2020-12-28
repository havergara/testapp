@extends('layout.app')

@section('content')
    <div class="gridContainer">
        <div>
            {!! Form::open(['route'=>'storeProject', 'name'=>'frmProject', 'id'=>'frmProject', 'novalidate']) !!}
            @csrf
            @include('user.project.form')
            {!! Form::close() !!}
        </div>
        <div>
            <table id="projectTable">
                <tr>
                    <th>Project Name</th>
                    <th>Account Manager</th>
                    <th>Project Manager</th>
                    <th>Senior Developer</th>
                    <th>Links</th>
                </tr>
                @if($projects->count() > 0)
                    @foreach($projects as $project)
                        <tr>
                            <td>{{ $project->name }}</td>
                            <td>{{ $project->AM }}</td>
                            <td>{{ $project->PM }}</td>
                            <td>{{ $project->SD }}</td>
                            <td>
                                @if(!is_null($project->link1))
                                    <a href="{{ $project->link1 }}" target="_blank">&rarr;</a>
                                @endif
                                @if(!is_null($project->link2))
                                    <a href="{{ $project->link2 }}" target="_blank">&rarr;</a>
                                @endif
                                @if(!is_null($project->link3))
                                    <a href="{{ $project->link3 }}" target="_blank">&rarr;</a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="5">No project record created yet</td>
                    </tr>
                @endif
            </table>
        </div>
    </div>

@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset('css/projects.css') }}">
@endsection

@section('js')
    <script src="{{ asset('js/projects.js') }}"></script>
@endsection
