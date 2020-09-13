@extends('singin&singup.master_singin&up')
@section('mainContent')

<body >

<h3 class="text-center text-success">{{ Session::get('successmessage') }}</h3>

    <form class="form-login" method="get" action="{{url('/forgetpass')}}">
      {{ csrf_field() }}
        <h2 class="form-login-heading">Forget Password</h2>
          @if (session('pass'))
                        <div class="alert alert-dismissible alert-danger">
                          <button type="button" class="close" data-dismiss="alert">×</button>
                          <strong> Please Enter Valid Password!!!!</strong>
                        </div>
                    @endif
            @if (session('mobiles'))
              <div class="alert alert-dismissible alert-danger">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong> Please Enter Valid Mobile!!!!</strong>
              </div>
        @endif
           @if (session('deactive'))
                        <div class="alert alert-dismissible alert-danger">
                          <button type="button" class="close" data-dismiss="alert">×</button>
                          <strong> You Are Deactive!!!!</strong>
                        </div>
              @endif
        <div class="login-wrap"style="height:250px;">
          <input type="number" class="form-control" required placeholder="Register Phone" name="phone" autofocus>
        
          <br>
          
               <input type="password" class="form-control" required placeholder="New Password" name="password" id="showPass" >
               <span toggle="#password-field" class="fa fa-lg fa-eye field-icon toggle-password"  onclick="myFunction()"></span>
            
         <br>
          <button class="btn btn-theme btn-block" name="btn" type="submit">Change Password</button>
        

        </div>
        </form>
 <div class="text-center" style="margin-top:-60px;">
             <div class="row">
             <div class="col-md-4"></div>
              <div class="col-md-4 col-6"><a href="{{url('/login')}}"><button class="btn btn-sm btn-primary btn-block">Back</button></a></div>
              
             </div>
              
             </div>
</body>
  
@endsection