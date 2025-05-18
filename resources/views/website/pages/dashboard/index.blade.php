@extends('website.layouts.master')

@section('title')
    {{ $title ?? 'Portofolio' }}
@endsection

@push('styles')
    {{-- Customize your style --}}
@endpush

@section('content')
    @component('website.components.breadcrumb')
        @slot('titleContent')
            {{ $titleContent ?? 'Title Content' }}
        @endslot
        @slot('li_1')
            {{ $li_1 ?? 'Li 1' }}
        @endslot
        @slot('subTitleContent')
            {{ $subTitleContent ?? 'Sub Title Content' }}
        @endslot
    @endcomponent

    {{-- start content --}}

    {{-- end of content --}}
@endsection

@push('scripts')
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endpush
