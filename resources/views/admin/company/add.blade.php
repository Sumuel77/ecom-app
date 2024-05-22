@extends('admin.master')

@section('title')
    Add-Company
@endsection

@section('body')

    <!--app-content open-->
    <div class="app-content main-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">


                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <div>
                        <h1 class="page-title">Form Layouts</h1>
                    </div>
                    <div class="ms-auto pageheader-btn">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Form Layouts</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- row -->
                <div class="row row-deck">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <span><h3 class="card-title">Add Company Form</h3></span>
                                <a href="{{ route('company.index') }}" class="btn btn-primary ms-auto d-block">Manage Company</a>
                            </div>
                            <div class="card-body">
                                <p class="text-center text-success">{{session('message')}}</p>

                                <form class="form-horizontal" action="{{ route('company.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="row mb-4">
                                        <label for="categoryname" class="col-md-3 form-label">Company Name</label>
                                        <div class="col-md-9">
                                            <input class="form-control" name="name"  type="text">
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <label for="categoryname" class="col-md-3 form-label">Slogam or Moto</label>
                                        <div class="col-md-9">
                                            <input class="form-control"  name="slogan"  type="text">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="categoryname" class="col-md-3 form-label">Domain Url</label>
                                        <div class="col-md-9">
                                            <input class="form-control"  name="domain_url"  type="text">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="categoryname" class="col-md-3 form-label">Facebook Url</label>
                                        <div class="col-md-9">
                                            <input class="form-control"  name="facebook_url"  type="text">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="categoryname" class="col-md-3 form-label">Twitter url</label>
                                        <div class="col-md-9">
                                            <input class="form-control"  name="twitter_url"  type="text">
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <label for="categoryname" class="col-md-3 form-label">Youtube url</label>
                                        <div class="col-md-9">
                                            <input class="form-control"  name="youtube_url"  type="text">
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <label for="categoryname" class="col-md-3 form-label">Linkedin url</label>
                                        <div class="col-md-9">
                                            <input class="form-control"  name="linked_in_url"  type="text">
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <label for="categoryname" class="col-md-3 form-label">Instagram url</label>
                                        <div class="col-md-9">
                                            <input class="form-control"  name="instagram_url"  type="text">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="categoryname" class="col-md-3 form-label">Contact Email</label>
                                        <div class="col-md-9">
                                            <input class="form-control"  name="contact_email"  type="email">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="categoryname" class="col-md-3 form-label">Support Email</label>
                                        <div class="col-md-9">
                                            <input class="form-control"  name="support_email"  type="email">
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <label for="categoryname" class="col-md-3 form-label">Contact Mobile</label>
                                        <div class="col-md-9">
                                            <input class="form-control"  name="contact_mobile"  type="number">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="categoryname" class="col-md-3 form-label">Support Mobile</label>
                                        <div class="col-md-9">
                                            <input class="form-control"  name="support_mobile"  type="number">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="categoryname" class="col-md-3 form-label">Fax Number</label>
                                        <div class="col-md-9">
                                            <input class="form-control"  name="fax_number"  type="number">
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <label for="categoryname" class="col-md-3 form-label">Address</label>
                                        <div class="col-md-9">
                                            <textarea class="form-control" name="address"></textarea>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <label for="categoryname" class="col-md-3 form-label">Biography</label>
                                        <div class="col-md-9">
                                            <textarea class="form-control"  name="biography"></textarea>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <label for="image" class="col-md-3 form-label">Logo jpg</label>
                                        <div class="col-md-9">
                                            <input class="form-control dropify" id="image" name="logo_jpg" type="file"/>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <label for="image" class="col-md-3 form-label">Logo png</label>
                                        <div class="col-md-9">
                                            <input class="form-control dropify" id="image" name="logo_png" type="file"/>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <label for="image" class="col-md-3 form-label">Favicon</label>
                                        <div class="col-md-9">
                                            <input class="form-control dropify" id="image" name="favicon" type="file"/>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <label for="image" class="col-md-3 form-label">Trade License</label>
                                        <div class="col-md-9">
                                            <input class="form-control dropify" id="image" name="trade_license" type="file"/>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <label for="image" class="col-md-3 form-label">TIN Certificate</label>
                                        <div class="col-md-9">
                                            <input class="form-control dropify" id="image" name="tin_certificate" type="file"/>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <label for="image" class="col-md-3 form-label">ECAB Certificate</label>
                                        <div class="col-md-9">
                                            <input class="form-control dropify" id="image" name="ecab_certificate" type="file"/>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <label for="image" class="col-md-3 form-label">Payment Image</label>
                                        <div class="col-md-9">
                                            <input class="form-control dropify" id="image" name="payment_image" type="file"/>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Create New Company</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /row -->



            </div>
        </div>
    </div>
    <!-- CONTAINER CLOSED -->

@endsection
