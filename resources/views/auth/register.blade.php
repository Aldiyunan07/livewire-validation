@extends('layouts.app')
@push('styles')
    @livewireStyles
@endpush
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    @livewire('register')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
    @livewireScripts
@endpush