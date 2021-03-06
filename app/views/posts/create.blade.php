@extends('layouts.master')

@section('contents')
    <h1>New Blog Item </h1>
@if ($errors->has('title')) 
    {{$errors->first('title', '<span class="help-block">:message</span>')}}
    @endif

{{ Form::open(array('action'=>'PostsController@store', array('class' => 'form-horizontal')) }}
    
<div class="form-group">    
    {{ Form::label('title', 'Title', array('class' => ))}}
    <div class="col-sm-10">
    {{ Form::text('title') }}
    </div>
</div>


        <br>
        <label for="body">New Blog body</label>      
        
        <textarea id-body type="text" name="body" >  {{{ Input::old('body') }}}</textarea> 
        <br>
        <input type="submit">

{{ Form::close() }}        
    

@stop