@extends('layouts.master')

@section('contents')




<div class="container">
{{ Form::open(array('action' =>'HomeController@doLogin', 'class'=>"form-signin")) }}
     
        <h2 class="form-signin-heading">Please sign in</h2>
        <input name ="email" type="email" class="form-control" placeholder="Email address" required autofocus>
        <input name="password" type="password" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input name="remember" type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->



@stop