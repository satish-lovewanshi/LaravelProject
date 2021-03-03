@include('layout')
<h1>Signup page </h1>
<div class=" col-lg-4 col-md-6 m-auto bg-light border border-warning">
    @if(session('username'))
    <h2 style="color: green;">{{session('username')}} you are register successfuly </h2>
    @endif
    <form action="PostSignupForm" method="POST">
        @csrf
        <div class="m-lg-2 m-sm-2">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input type="texr" class="form-control" id="" name="full_name" required placeholder="Your Full Name">
                <span style="color:red;">@error('full_name'){{$message}}@enderror</span>
            </div>
            <div class="mb-3">
                <label for="exampleDataList" class="form-label">Class</label>
                <input type="number" class="form-control" list="datalistOptions" id="exampleDataList" required name="class" placeholder="Select your class....">
                <datalist id="datalistOptions">
                    <option value="12">
                    <option value="11">
                    <option value="10">
                    <option value="9">
                    <option value="8">
                </datalist>
                <span style="color:red;">@error('class'){{$message}}@enderror</span>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Mobile No.</label>
                <input type="number" class="form-control" id="" name="mobile" required placeholder="Enter 10 digit number">
                <span style="color:red;">@error('mobile'){{$message}}@enderror</span>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="" name="email" required placeholder="name@example.com">
                <span style="color:red;">@error('email'){{$message}}@enderror</span>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Password</label>
                <input type="password" class="form-control" id="" name="password" required placeholder=" Pleas enter Alphanumeric Password">
                <span style="color:red;">@error('password'){{$message}}@enderror</span>
            </div>
            <div class="mb-3 ">
                <button class="btn btn-success  ">Submit</button>
            </div>
        </div>
    </form>
</div>