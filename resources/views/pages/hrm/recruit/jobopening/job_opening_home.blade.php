<x-default-layout layout="{{ config('settings.KT_THEME_LAYOUT_DIR') }}._default_recruit">

    @section('title')
        Job Openings
    @endsection

    @section('breadcrumbs')
        {{ Breadcrumbs::render('job_openings_home') }}
    @endsection

    <div class="card">
        <!--begin::Card header-->
        <div class="card-header border-0 pt-6">

        </div>
        <!--end::Card header-->
    </div>
</x-default-layout>
