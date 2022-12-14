@extends('layouts.admin')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>@lang('global.add')</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">@lang('global.home')</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('merchantIndex') }}">@lang('global.add')</a></li>
                        <li class="breadcrumb-item active">@lang('global.add')</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->

    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">@lang('global.add')</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">

                        <form action="{{ route('merchantStore') }}" method="post">
                            @csrf

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>@lang('cruds.merchant.brand_id')</label>
                                        <select name="brand_id" id="brand_id" class="form-control brand1" {{ $errors->has('brand_id') ? "is-invalid":"" }}">
                                            @foreach(\App\Models\Pages\Brand::get() as $brand)
                                                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                            @endforeach
                                        </select>
                                        @if($errors->has('brand_id'))
                                            <span class="error invalid-feedback">{{ $errors->first('brand_id') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>@lang('cruds.merchant.name')</label>
                                        <input type="text" name="name" value="{{ old('name') }}"
                                               class="form-control {{ $errors->has('name') ? "is-invalid":"" }}"
                                               autocomplete="off" required>
                                        @if($errors->has('name'))
                                            <span class="error invalid-feedback">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>@lang('cruds.merchant.filial')</label>
                                        <input type="text" name="filial" value="{{ old('filial') }}"
                                               class="form-control {{ $errors->has('filial') ? "is-invalid":"" }}"
                                               autocomplete="off" required>
                                        @if($errors->has('filial'))
                                            <span class="error invalid-feedback">{{ $errors->first('filial') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>@lang('cruds.merchant.address')</label>
                                        <input type="text" name="address" value="{{ old('address') }}"
                                               class="form-control {{ $errors->has('address') ? "is-invalid":"" }}"
                                               autocomplete="off" required>
                                        @if($errors->has('address'))
                                            <span class="error invalid-feedback">{{ $errors->first('address') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <h3>Merchant Information</h3>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>@lang('cruds.merchant.uzcard_merchant_id')</label>
                                        <input type="text" name="uzcard_merchant_id" value="{{ old('uzcard_merchant_id') }}"
                                               class="form-control {{ $errors->has('uzcard_merchant_id') ? "is-invalid":"" }}"
                                               autocomplete="off" required>
                                        @if($errors->has('uzcard_merchant_id'))
                                            <span class="error invalid-feedback">{{ $errors->first('uzcard_merchant_id') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>@lang('cruds.merchant.uzcard_terminal_id')</label>
                                        <input type="text" name="uzcard_terminal_id" value="{{ old('uzcard_terminal_id') }}"
                                               class="form-control {{ $errors->has('uzcard_terminal_id') ? "is-invalid":"" }}"
                                               autocomplete="off" required>
                                        @if($errors->has('uzcard_terminal_id'))
                                            <span class="error invalid-feedback">{{ $errors->first('uzcard_terminal_id') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>@lang('cruds.merchant.humo_merchant_id')</label>
                                        <input type="text" name="humo_merchant_id" value="{{ old('humo_merchant_id') }}"
                                               class="form-control {{ $errors->has('humo_merchant_id') ? "is-invalid":"" }}"
                                               autocomplete="off" required>
                                        @if($errors->has('humo_merchant_id'))
                                            <span class="error invalid-feedback">{{ $errors->first('humo_merchant_id') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>@lang('cruds.merchant.humo_terminal_id')</label>
                                        <input type="text" name="humo_terminal_id" value="{{ old('humo_terminal_id') }}"
                                               class="form-control {{ $errors->has('humo_terminal_id') ? "is-invalid":"" }}"
                                               autocomplete="off" required>
                                        @if($errors->has('humo_terminal_id'))
                                            <span class="error invalid-feedback">{{ $errors->first('humo_terminal_id') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <h3>Account information</h3>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>@lang('cruds.account.number')</label>
                                        <input type="number" name="number" value="{{ old('number') }}" class="form-control {{ $errors->has('number') ? "is-invalid":"" }}" autocomplete="off" required>
                                        @if($errors->has('number'))
                                            <span class="error invalid-feedback">{{ $errors->first('number') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>@lang('cruds.account.name')</label>
                                        <input type="text" name="account_name" value="{{ old('account_name') }}" class="form-control {{ $errors->has('account_name') ? "is-invalid":"" }}" autocomplete="off" required>
                                        @if($errors->has('account_name'))
                                            <span class="error invalid-feedback">{{ $errors->first('account_name') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>@lang('cruds.account.account_inn')</label>
                                        <input type="text" name="account_inn" value="{{ old('account_inn') }}" class="form-control {{ $errors->has('account_inn') ? "is-invalid":"" }}" autocomplete="off" required>
                                        @if($errors->has('account_inn'))
                                            <span class="error invalid-feedback">{{ $errors->first('account_inn') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>@lang('cruds.account.account_filial')</label>
                                        <input type="text" name="account_filial" value="{{ old('account_filial') }}" class="form-control {{ $errors->has('account_filial') ? "is-invalid":"" }}" autocomplete="off" required>
                                        @if($errors->has('account_filial'))
                                            <span class="error invalid-feedback">{{ $errors->first('account_filial') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>@lang('cruds.account.percentage')</label>
                                        <input type="number" name="percentage" value="{{ old('percentage') }}" class="form-control {{ $errors->has('percentage') ? "is-invalid":"" }}" autocomplete="off" required>
                                        @if($errors->has('percentage'))
                                            <span class="error invalid-feedback">{{ $errors->first('percentage') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-success float-right">@lang('global.save')</button>
                                <a href="{{ route('merchantIndex') }}"
                                   class="btn btn-default float-left">@lang('global.cancel')</a>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
