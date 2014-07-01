@extends('layouts.master')

@section('contents')
    <h1>New Blog Item </h1>
@if ($errors->has('title')) 
    {{$errors->first('title', '<span class="help-block">:message</span>')}}
    @endif



  <form method="POST" action="{{{ action('PostsController@store') }}}">
    
        <label for="title">New Blog title</label>        
        <input type="text" name="title" value="{{{ Input::old('title') }}}">
        <br>
        <label for="body">New Blog body</label>      
        <!-- <input id-body type="text" name="body" value="{{{ Input::old('body') }}}">  -->
        <textarea id-body type="text" name="body" >  {{{ Input::old('body') }}}</textarea> 
        <br>
        <input type="submit">

        
    
</form>
@stop