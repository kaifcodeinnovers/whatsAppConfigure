@extends('admin::layouts.content')

@section('page_title')
    {{ __('admin::app.settings.exchange_rates.title') }}
@stop

@section('content')
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h1>{{ __('admin::app.settings.exchange_rates.title') }}</h1>
            </div>

            <div class="page-action">
                <a href="{{ route('admin.exchange_rates.update_rates') }}" class="btn btn-lg btn-primary">
                    {{ __('admin::app.settings.exchange_rates.update-rates') }}
                </a>
                @if (bouncer()->hasPermission('settings.exchange_rates.create'))
                    <a href="{{ route('admin.exchange_rates.create') }}" class="btn btn-lg btn-primary">
                        {{ __('admin::app.settings.exchange_rates.add-title') }}
                    </a>
                @endif
            </div>
        </div>

        <div class="page-content">
            <datagrid-plus src="{{ route('admin.exchange_rates.index') }}"></datagrid-plus>
        </div>
    </div>
@stop
