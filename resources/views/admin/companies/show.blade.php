@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.company.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.companies.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.company.fields.id') }}
                        </th>
                        <td>
                            {{ $company->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.company.fields.name') }}
                        </th>
                        <td>
                            {{ $company->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.company.fields.company_logo') }}
                        </th>
                        <td>
                            @if($company->company_logo)
                                <a href="{{ $company->company_logo->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $company->company_logo->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.company.fields.about') }}
                        </th>
                        <td>
                            {{ $company->about }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.company.fields.phone_number') }}
                        </th>
                        <td>
                            {{ $company->phone_number }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.company.fields.website') }}
                        </th>
                        <td>
                            {{ $company->website }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.company.fields.address') }}
                        </th>
                        <td>
                            {{ $company->address }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.companies.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection