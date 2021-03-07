<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin Login</title>

    <!-- Bootstrap -->
    <link href="{{ asset('/admin/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('/admin/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('/admin/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{ asset('/admin/vendors/animate.css/animate.min.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('/admin/build/css/custom.min.css')}}" rel="stylesheet">
  </head>

 
<body class="login">
    {{$errors}}
    <div>
        <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">
                    <form action='AdminLogin' method='post'>
                        @csrf
                        <h1>Login Form</h1>
                        <div>
                            <input type="text" class="form-control" placeholder="Username" name='username' required="" />
                        </div>
                        <div>
                            <input type="password" class="form-control" placeholder="Password" name='password' required="" />
                        </div>
                        <div>
                            <button class="btn btn-default submit" type='submit'>Log in</button>
                        </div>

                        <div class="clearfix"></div>
                    </form>
                </section>
                <section>
                    <div>
                        <p style="coler:red;">If you are open admin pannel in desktop you can assecc all controll of admin</p>
                        <h3 >If you want to checkout this CMS you may be login and access admin controll panel and test to change any image or text of any page  </h3>
                        <h4 class='bg-success '>username:admin</h4>
                        <h4 class='bg-success'>password:admin</h4>
                        <h3>Please enter your details in Contact <a href="{{asset('contact')}}"><u>Form</u></a></h3>
                    </div>
                </section>

            </div>
        </div>
    </div>
</body>
   <!-- jQuery -->
   <script src="{{asset('admin/vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('admin/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- Custom Theme Scripts -->
    <script src="{{asset('admin/build/js/custom.min.js')}}"></script>
	

 
</html>