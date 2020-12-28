<h1>Create New Employee</h1>
<div class="frmElContainer">
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name', null, []) !!}
</div>
<div class="frmElContainer">
    {!! Form::label('role', 'Role') !!}
    {!! Form::select('role', ['AM'=>'Account Manager', 'PM'=>'Project Manager', 'Dev'=>'Senior Developer'], null, []) !!}
</div>
<div class="errorContainer @if ($errors->any()) displayError @endif">
    <ul class="errors">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        @endif
    </ul>
</div>
<hr>
<div class="frmControl">
    <a href="{{ route('projectIndex') }}">Done</a>
    {!! Form::submit('Create Employee Record') !!}
</div>

