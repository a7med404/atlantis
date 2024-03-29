@extends('layouts.master')
@section('title')
  page title
@endsection
@section('header')
  
@endsection
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Create
        <small>it all starts here</small>
        </h1>
        <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Title</h3>

            <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
                <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
                
            {!! Form::open(['route' => ['posts.store'], 'method' => "POST", 'class' => 'form', 'files' => true]) !!}
            @include('posts.form')
            {!! Form::close() !!}

        </div>
        <!-- /.box-body -->
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
@endsection
  
@section('footer')

@endsection
