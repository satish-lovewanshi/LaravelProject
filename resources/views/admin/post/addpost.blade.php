@extends('admin.adminlayout')

<!-- main page containt -->
@section('content')
<h1>Post Editor</h1>
<div class="row">
    <!-- error show code -->
    @if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </div>
    @endif
    <!-- end error show code  -->
    <!-- error and success message -->
    @if(session()->has('message'))
    <div class='alert alert-dismissable alert-success'>
        <h1>{{session('message')}}</h1>
    </div>
    @endif
    
    {!! Form::open(['route'=>['post-add',$posts->id],'enctype'=>'multipart/form-data']) !!}
    <div class="x_panel">
        <div class="x_title">
            <h2 class="sub_title">Post Page Content</h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                <li><a class="close-link"><i class="fa fa-close"></i></a></li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
        <!-- /////////////////////////////////////////////// -->
            <div class="form-group has-feedback" style="position:relative;">
            {{ Form::select('page_title',['home'=>'Home',
                                        'company'=>'Company',
                                        'services'=>'Services',
                                        'contact'=>'Contact' ],$posts->page_title,['class'=>'form-control'])}}
            </div>

            <!-- ////////////////// Section title //////////////////// -->
            <div class="form-group has-feedback" style="position:relative;">
                <label for="name" class='hws_form_lable'>Section Title</label>
                {{Form::text('section_title',$posts->section_title,['class'=>'form-control','placeholder'=>'section title'])}}
            </div>

            <!-- ////////////////////// post title ////////////////// -->
            <div class="form-group has-feedback" style="position:relative;">
                <label for="name" class='hws_form_lable'>Post Title</label>
                {{Form::text('title',$posts->title,['class'=>'form-control','placeholder'=>'Post Title'])}}
            </div>

            <!-- ////////////////// text area /////////////////////// -->
            <div class="form-group has-feedback" style="position:relative;">
                <label for="name" class='hws_form_lable'>Post Description</label>
                {{Form::textarea ('description',$posts->description,['class'=>'form-control','placeholder'=>'Post Description'])}}
            </div>
            <!-- ////////////////// image /////////////////////// -->
            <div class="form-group has-feedback" style="position:relative;">
                <label for="name" class='hws_form_lable'>Image</label><br>
                <img src="{{asset('/uploads')}}/{{$posts->image}}" alt="old image " style='height:50px;width:50px;'>
                {{Form::hidden('old_image',$posts->image)}}
                {{Form::file('image',['class'=>'form-control','id'=>'file'])}}
            </div>
                
                <!-- ///////////// submit button //////////////////////-->
                {{ Form::submit('Save',['class'=>'btn btn-primary'])}}
        </div>
    </div>
    {!! Form::close() !!}
</div>
@endsection
<!-- for any java script code -->
@push('footer-script') 
<!-- <script>
    $(function(){
        if($('#editor').length){
            CKEDITOR.replace('editor',{});
        }
        $('.editor').each(function(){
            CKEDITOR.replace($(this).attr('id'));
        )};
    });
</script> -->
@endpush