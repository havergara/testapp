<h1>New Project Record</h1>

<div class="frmElContainer">
    {!! Form::label('project_name', 'Project Name') !!}
    {!! Form::text('project_name', null, []) !!}
</div>
<div class="frmElContainer">
    {!! Form::label('account_manager', 'Account Manager') !!}
    {!! Form::select('account_manager', $accountManagers, null, []) !!}
</div>
<div class="frmElContainer">
    {!! Form::label('project_manager', 'Project Manager') !!}
    {!! Form::select('project_manager', $projectManagers, null, []) !!}
</div>
<div class="frmElContainer">
    {!! Form::label('senior_developer', 'Senior Developer') !!}
    {!! Form::select('senior_developer', $seniorDevelopers, null, []) !!}
</div>
<div class="frmElContainer">
    {!! Form::label('linkOne', 'Link 1') !!}
    {!! Form::text('linkOne', null, ['class'=>'links']) !!}
</div>
<div class="frmElContainer">
    {!! Form::label('linkTwo', 'Link 2') !!}
    {!! Form::text('linkTwo', null, ['class'=>'links']) !!}
</div>
<div class="frmElContainer">
    {!! Form::label('linkThree', 'Link 3') !!}
    {!! Form::text('linkThree', null, ['class'=>'links']) !!}
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
    <a href="{{ route('createEmployee') }}">Add New Employee</a>
    {!! Form::submit('Create Project') !!}
</div>
