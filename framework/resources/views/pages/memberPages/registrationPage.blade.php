@extends('layouts.homeLayouts.layout')

@section('content')
<!-- Page container -->
<div class="page-container login-container">

    <!-- Page content -->
    <div class="page-content">

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Content area -->
            <div class="content">

                <!-- Registration form -->
                <form action="index/html">
                    <div class="row">
                        <div class="col-lg-6 col-lg-offset-3">
                            <div class="panel registration-form">
                                <div class="panel-body">
                                    <div class="text-center">
                                        <div class="icon-object border-success text-success"><i class="icon-plus3"></i></div>
                                        <h5 class="content-group-lg">Create account <small class="display-block">All fields are required</small></h5>
                                    </div>

                                    <div class="form-group has-feedback">
                                        <input type="text" class="form-control" placeholder="Choose username">
                                        <div class="form-control-feedback">
                                            <i class="icon-user-plus text-muted"></i>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group has-feedback">
                                                <input type="text" class="form-control" placeholder="First name">
                                                <div class="form-control-feedback">
                                                    <i class="icon-user-check text-muted"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group has-feedback">
                                                <input type="text" class="form-control" placeholder="Second name">
                                                <div class="form-control-feedback">
                                                    <i class="icon-user-check text-muted"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group has-feedback">
                                                <input type="password" class="form-control" placeholder="Create password">
                                                <div class="form-control-feedback">
                                                    <i class="icon-user-lock text-muted"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group has-feedback">
                                                <input type="password" class="form-control" placeholder="Repeat password">
                                                <div class="form-control-feedback">
                                                    <i class="icon-user-lock text-muted"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group has-feedback">
                                                <input type="email" class="form-control" placeholder="Your email">
                                                <div class="form-control-feedback">
                                                    <i class="icon-mention text-muted"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group has-feedback">
                                                <input type="email" class="form-control" placeholder="Repeat email">
                                                <div class="form-control-feedback">
                                                    <i class="icon-mention text-muted"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" class="styled" checked="checked">
                                                Send me <a href="#">test account settings</a>
                                            </label>
                                        </div>

                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" class="styled" checked="checked">
                                                Subscribe to monthly newsletter
                                            </label>
                                        </div>

                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" class="styled">
                                                Accept <a href="#">terms of service</a>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="text-right">
                                        <button type="submit" class="btn btn-link"><i class="icon-arrow-left13 position-left"></i> Back to login form</button>
                                        <button type="submit" class="btn btn-labeled-right btn-primary ml-10">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- /registration form -->
                <!-- Footer -->
                <div class="footer text-muted">
                    &copy; 2015. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
                </div>
                <!-- /footer -->
            </div>
            <!-- /content area -->
        </div>
        <!-- /main content -->
    </div>
    <!-- /page content -->
</div>
<!-- /page container -->

@endsection