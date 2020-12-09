@extends('app')
@section('title', 'Home')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard v2</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard v2</li>
            </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
        <!-- Info boxes -->
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

                        <div class="info-box-content">
                        <span class="info-box-text">Task Active</span>
                        <span class="info-box-number">
                            10
                            <small>%</small>
                        </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

                    <div class="info-box-content">
                    <span class="info-box-text">Task Cancelled</span>
                    <span class="info-box-number">41,410</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

                    <div class="info-box-content">
                    <span class="info-box-text">Task Done</span>
                    <span class="info-box-number">760</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                    <div class="info-box-content">
                    <span class="info-box-text">Total Task</span>
                    <span class="info-box-number">2,000</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-md-12">
                <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title text-bold">Task Active</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fas fa-minus"></i></button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                                <i class="fas fa-times"></i></button>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <table class="table table-striped projects">
                                <thead>
                                    <tr >
                                        <th style="width: 1%">
                                            #
                                        </th>
                                        <th style="width: 25%">
                                            Task Name
                                        </th>
                                        <th style="width: 24%" class="text-center">
                                            Team Members
                                        </th>
                                        <th style="width: 10%" class="text-center">
                                            Priority
                                        </th>
                                        <th style="width: 10%" class="text-center">
                                            Status
                                        </th>
                                        <th style="width: 30%" class="text-center">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            #
                                        </td>
                                        <td>
                                            <a>
                                                AdminLTE v3
                                            </a>
                                            <br/>
                                            <small>
                                                Created 01.01.2019
                                            </small>
                                        </td>
                                        <td class="text-center">
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <img alt="Avatar" class="table-avatar" src="https://ui-avatars.com/api/?name=Task+Management">
                                                </li>
                                                <li class="list-inline-item">
                                                    <img alt="Avatar" class="table-avatar" src="https://ui-avatars.com/api/?name=Task+Management">
                                                </li>
                                            </ul>
                                        </td>
                                        <td class="project_progress text-center">
                                            <span class="badge badge-success">Low</span>
                                        </td>
                                        <td class="project-state text-center">
                                            <span class="badge badge-primary">Active</span>
                                        </td>
                                        <td class="project-actions text-center">
                                            <a class="btn btn-primary btn-sm" href="/task/detail">
                                                <i class="fas fa-folder">
                                                </i>
                                                <div id="app">
                                                <span v-if="tes"></span>
                                                </div>
                                            </a>
                                            <a class="btn btn-info btn-sm" href="#">
                                                <i class="fas fa-pencil-alt">
                                                </i>
                                                Edit
                                            </a>
                                            <a class="btn btn-danger btn-sm" href="#">
                                                <i class="fas fa-trash">
                                                </i>
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- Row -->
            </div>
        </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection
