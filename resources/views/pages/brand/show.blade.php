@extends('layouts.admin')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>@lang('cruds.brand.brands')</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">@lang('global.home')</a></li>
                        <li class="breadcrumb-item active">@lang('cruds.brand.brands')</li>
                        <li class="breadcrumb-item active">@lang('global.edit')</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->

    <section class="content">
        <div class="row">
            <div class="col-8 offset-2">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">@lang('global.show')</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">

                        <table id="" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="">
                            <thead>
                            <tr>
                                <th>@lang('cruds.brand.name')</th>
                                <td>{{ $brand->name }}</td>
                            </tr>
                            <tr>
                                <th>@lang('cruds.brand.logo')</th>
                                <td>{{ $brand->logo }}</td>
                            </tr>
                            <tr>
                                <th>@lang('cruds.brand.status')</th>
                                <td>{{ $brand->status }}</td>
                            </tr>
                            <tr>
                                <th>@lang('cruds.brand.is_unired')</th>
                                <td>{{ $brand->is_unired }}</td>
                            </tr>

                            </thead>
                        </table>
                        <div>
                            <a href="{{ route('brandIndex') }}" type="button" class="btn btn-danger"> Back</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
