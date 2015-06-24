@extends('template')

@section('content')
    <h1>Create new Post</h1>

    {!! Form::open(['route'=>'admin.posts.store', 'method'=>'post']) !!}

    <!-- Title Form Input -->
    <div class="form-group">
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title', null, ['class'=>'form-control']) !!}
    </div>

    <!-- Content Form Input -->
    <div class="form-group">
        {!! Form::label('content', 'content:') !!}
        {!! Form::textarea('content', null, ['class'=>'form-control']) !!}
    </div>

    <!-- Submit Form -->
    <div class="form-group">
        {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@endsection