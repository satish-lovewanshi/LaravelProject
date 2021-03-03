@extends('admin.adminlayout')

<!-- main page containt -->
@section('content')
<h1>Home Page Editor</h1>
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
    
    {!! Form::open(['route'=>'page-create','enctype'=>'multipart/form-data']) !!}
   
        <div class="x_title">
            <h2 class="sub_title">Page Content</h2>
            <ul class="nav navbar-right panel_toolbox">
                <li>
                    <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li>
                    <a class="close-link"><i class="fa fa-close"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <!-- //////////////////////////////////////////// -->
            <div class="form-group has-feedback" style="position:relative;">
                <label for="name" class="hws_form_label">Title</label>
                {!! Form::text('title','Home',['class'=>'form-control',
                    'required'=>'required','readonly'=>'readonly']) !!}
                <span class='hws_error text-right text-danger'>
                    {{$errors->first('title')}}
                </span>
            </div>
            <!-- //////////// Banner Image ///////////// -->
            <div class="form-group has-feedback" style="position:relative;">
                <label for="image" class="hws_form_label"><h2>Banner Image</h2></label>
                {!! Form::hidden('image[]','banner_image') !!}
                {!! Form::file('banner_image',['class'=>'form-control','id'=>'file']) !!}
                @foreach($data as $value)
                    @if($value->section_title=='banner_image')
                        {!! Form::hidden('old_image',$value->data) !!}
                        <p>{{$value->data}}</p>
                        <img src="{{asset('/uploads')}}/{{$value->data}}" alt="Banner Image " style='height:200px;width:200px;'>
                    @endif
                @endforeach
            </div>
            <!-- //////////// Second  Section ///////////// -->
            <div class="form-group has-feedback" style="position:relative;">
                <label class="hws_form_label"><h2>Second section</h2></label><br>
                <label class="hws_form_label">Title:</label>
                {!!Form::hidden('txt_name[]','second_title')!!}
                @if($total_row)
                    @foreach($data as $value)
                        @if($value->section_title=="second_title")
                            {!! Form::text('second_title',$value->data,['class'=>'form-control']) !!}
                        @endif
                    @endforeach
                @else
                    {!! Form::text('second_title','',['class'=>'form-control']) !!}
                @endif
            </div>
           <!-- /////////////////  Third Section  //////////////////// -->
            <div class="form-group has-feedback" style="position:relative;">
                <label class="hws_form_label"><h2>Third section</h2></label><br>
                <label class="hws_form_label">Title:</label>
                {!!Form::hidden('txt_name[]','third_title')!!}
                @if($total_row)
                @foreach($data as $value)
                    @if($value->section_title=="third_title")
                        {!! Form::text('third_title',$value->data,['class'=>'form-control']) !!}
                    @endif
                @endforeach
                @else
                    {!! Form::text('third_title','',['class'=>'form-control']) !!}
                @endif
            </div>
           <!-- /////////////////  Forth Section  //////////////////// -->
            <div class="form-group has-feedback" style="position:relative;">
                <label class="hws_form_label"><h2>Forth section</h2></label><br>
                <label class="hws_form_label">Title:</label>
                {!!Form::hidden('txt_name[]','forth_title')!!}
                @if($total_row)
                @foreach($data as $value)
                    @if($value->section_title=="forth_title")
                        {!! Form::text('forth_title',$value->data,['class'=>'form-control']) !!}
                    @endif
                @endforeach
                @else
                    {!! Form::text('forth_title','',['class'=>'form-control']) !!}
                @endif
            </div>
                
                
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