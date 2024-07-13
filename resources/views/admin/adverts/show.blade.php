@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.advert.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.adverts.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.advert.fields.id') }}
                        </th>
                        <td>
                            {{ $advert->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.advert.fields.company') }}
                        </th>
                        <td>
                            {{ $advert->company->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.advert.fields.title') }}
                        </th>
                        <td>
                            {{ $advert->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.advert.fields.body') }}
                        </th>
                        <td>
                            {!! $advert->body !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.advert.fields.deadline') }}
                        </th>
                        <td>
                            {{ $advert->deadline }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.advert.fields.status') }}
                        </th>
                        <td>
                            {{ App\Models\Advert::STATUS_SELECT[$advert->status] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.advert.fields.location') }}
                        </th>
                        <td>
                            {{ $advert->location }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.advert.fields.sector') }}
                        </th>
                        <td>
                            {{ $advert->sector }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.advert.fields.education_level') }}
                        </th>
                        <td>
                            {{ $advert->education_level }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.advert.fields.desired_experience') }}
                        </th>
                        <td>
                            {{ $advert->desired_experience }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.advert.fields.contract_type') }}
                        </th>
                        <td>
                            {{ $advert->contract_type }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.advert.fields.number_of_positions') }}
                        </th>
                        <td>
                            {{ $advert->number_of_positions }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.advert.fields.category') }}
                        </th>
                        <td>
                            {{ $advert->category->name ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.adverts.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection