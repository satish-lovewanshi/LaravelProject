@include('layout')
<div class=" col-lg-4 col-md-6 m-auto bg-light border border-warning">
    @if(session('username'))
        <h2 style="color: green;">{{session('username')}} you are register successfuly </h2>
    @endif
    <form action="PostLoginForm" method="post">
        @csrf
        <div class="m-lg-2 m-sm-2">
            <div class="mb-3">
                <label for="" class="form-label">Username</label>
                <input type="email" class="form-control" id="" name="username" required placeholder="Your username">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">password</label>
                <input type="password" class="form-control" id="" name="password"  required placeholder="your password">
            </div>
            <div class="mb-3 ">
                <button class="btn btn-success  ">Login</button>
            </div>
        </div>
    </form>
</div>