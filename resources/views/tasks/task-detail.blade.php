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
                <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Projects Detail</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i></button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fas fa-times"></i></button>
                    </div>
                    </div>
                    <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
                            <div class="row pb-2">
                                <div class="col-12 col-sm-6">
                                    <button type="button" class="btn btn-block btn-primary">Need Review</button>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <button type="button" class="btn btn-block btn-danger">Cancel</button>
                                </div>
                            </div>
                        <div class="row">
                            <div class="col-12">
                            <h4>Recent Activity</h4>
                                <div class="post">
                                <div class="user-block">
                                    <img class="img-circle img-bordered-sm" src="https://ui-avatars.com/api/?name=Task+Management" alt="user image">
                                    <span class="username">
                                    <a href="#">Jonathan Burke Jr.</a>
                                    </span>
                                    <span class="description">Shared publicly - 7:45 PM today</span>
                                </div>
                                <!-- /.user-block -->
                                <p>
                                    Lorem ipsum represents a long-held tradition for designers,
                                    typographers and the like. Some people hate it and argue for
                                    its demise, but others ignore.
                                </p>

                                <p>
                                    <a href="#" class="link-black text-sm"><i class="fas fa-link mr-1"></i> Demo File 1 v2</a>
                                </p>
                                </div>

                                <div class="post clearfix">
                                <div class="user-block">
                                    <img class="img-circle img-bordered-sm" src="https://ui-avatars.com/api/?name=Task+Management" alt="User Image">
                                    <span class="username">
                                    <a href="#">Sarah Ross</a>
                                    </span>
                                    <span class="description">Sent you a message - 3 days ago</span>
                                </div>
                                <!-- /.user-block -->
                                <p>
                                    Lorem ipsum represents a long-held tradition for designers,
                                    typographers and the like. Some people hate it and argue for
                                    its demise, but others ignore.
                                </p>
                                <p>
                                    <a href="#" class="link-black text-sm"><i class="fas fa-link mr-1"></i> Demo File 2</a>
                                </p>
                                </div>

                            <div class="post">
                                <div class="user-block">
                                    <img class="img-circle img-bordered-sm" src="https://ui-avatars.com/api/?name=Task+Management" alt="user image">
                                    <span class="username">
                                    <a href="#">Jonathan Burke Jr.</a>
                                    </span>
                                    <span class="description">Shared publicly - 5 days ago</span>
                                </div>
                                <!-- /.user-block -->
                                <p>
                                    Lorem ipsum represents a long-held tradition for designers,
                                    typographers and the like. Some people hate it and argue for
                                    its demise, but others ignore.
                                </p>

                                <p>
                                    <a href="#" class="link-black text-sm"><i class="fas fa-link mr-1"></i> Demo File 1 v1</a>
                                </p>
                            </div>
                            <div class="post">
                                <div class="form-group">
                                    <textarea name="" id="" class="form-control"></textarea>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                                <div class="form-group pt-2">
                                    <button class="form-control btn btn-primary">Comment</button>
                                </div>
                            </div>

                        </div>
                        </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
                        <h3 class="text-primary"><i class="fas fa-book"></i> 1 FB + 5 BM </h3>
                        <p class="text-muted">Mata Uang IDR + Authentication 2 Factor.</p>
                        <br>
                        <div class="text-muted">
                            <p class="text-sm">Client Name
                            <b class="d-block">Daffina Cell</b>
                            </p>
                            <p class="text-sm">Project Created By
                            <b class="d-block">Valdy Rizki</b>
                            </p>
                        </div>

                        <h5 class="mt-5 text-muted">Project files</h5>
                        <ul class="list-unstyled">
                            <li>
                            <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i> Functional-requirements.docx</a>
                            </li>
                            <li>
                            <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-pdf"></i> UAT.pdf</a>
                            </li>
                            <li>
                            <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-envelope"></i> Email-from-flatbal.mln</a>
                            </li>
                            <li>
                            <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-image "></i> Logo.png</a>
                            </li>
                            <li>
                            <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i> Contract-10_12_2014.docx</a>
                            </li>
                        </ul>
                        <div class="text-center mt-5 mb-3">
                            <a href="#" class="btn btn-sm btn-primary">Add files</a>
                            <a href="#" class="btn btn-sm btn-warning">Report contact</a>
                        </div>
                        </div>
                    </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection
