@extends('layouts.master')

@section('contents')
    <h1>New Blog Item </h1>
@if ($errors->has('title')) 
    {{$errors->first('title', '<span class="help-block">:message</span>')}}
    @endif

{{ Form::open(array('action'=>'PostsController@store')) }}
    {{ Form::label('title', 'Title')}}
    {{ Form::text('title') }}

        <br>
        <label for="body">New Blog body</label>      
        
        <textarea id-body type="text" name="body" >  {{{ Input::old('body') }}}</textarea> 
        <br>
        <input type="submit">

{{ Form::close() }}        
    

@stop