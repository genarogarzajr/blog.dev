@extends('layouts.master')

@section('contents')
<div class="container col-md-4"></div>


<div class="container col-md-4">

{{ Form::open(array('action' =>'HomeController@doLogin', 'class'=>"form-signin")) }}
     
        <h2 class="form-signin-heading">Please sign in</h2>
        <div class="form-group">
        	<input name ="email" type="email" class="form-control" placeholder="Email address" required autofocus>
    	</div> <!-- class="form-signin-heading" -->
        	<input name="password" type="password" class="form-control" placeholder="Password" required>
        
        <div class="checkbox">
          <label>
            <input name="remember" type="checkbox" value="remember-me"> Remember me
          </label>
        </div> <!-- class="checkbox" -->
        
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>
New User?  Sign up
    </div> 

<div class="container col-md-4"></div>
@stop