@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
            {{ trans('cruds.subscriber.title_singular') }} {{ trans('global.list') }}
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class=" table table-bordered table-striped table-hover datatable datatable-Subscriber">
                    <thead>
                        <tr>
                            <th width="10">

                            </th>
                            <th>
                                {{ trans('cruds.subscriber.fields.id') }}
                            </th>
                            <th>
                                {{ trans('cruds.subscriber.fields.email') }}
                            </th>
                            <th>
                                {{ trans('cruds.subscriber.fields.status') }}
                            </th>
                            <th>
                                &nbsp;Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($subscribers as $key => $subscriber)
                            <tr data-entry-id="{{ $subscriber->id }}">
                                <td>

                                </td>
                                <td>
                                    {{ $subscriber->id ?? '' }}
                                </td>
                                <td>
                                    {{ $subscriber->email ?? '' }}
                                </td>
                                <td>
                                    {{ App\Models\Subscriber::STATUS_SELECT[$subscriber->status] ?? '' }}
                                </td>
                                <td>


                                    @can('subscriber_delete')
                                        <form action="{{ route('admin.subscribers.destroy', $subscriber->id) }}" method="POST"
                                            onsubmit="return confirm('{{ trans('global.areYouSure') }}');"
                                            style="display: inline-block;">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="submit" class="btn btn-md btn-danger" disabled
                                                value="{{ trans('global.delete') }}">
                                        </form>
                                    @endcan

                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    @parent
    <script>
        $(function() {
            let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)

            $.extend(true, $.fn.dataTable.defaults, {
                orderCellsTop: true,
                order: [
                    [1, 'desc']
                ],
                pageLength: 100,
            });
            let table = $('.datatable-Subscriber:not(.ajaxTable)').DataTable({
                buttons: dtButtons
            })
            $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e) {
                $($.fn.dataTable.tables(true)).DataTable()
                    .columns.adjust();
            });

        })
    </script>
@endsection
