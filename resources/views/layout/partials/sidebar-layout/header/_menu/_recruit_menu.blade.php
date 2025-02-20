
<!--begin::Menu wrapper-->
<div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="{default: 'append', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
	<!--begin::Menu-->
	<div class="menu menu-rounded menu-column menu-lg-row my-5 my-lg-0 align-items-stretch fw-semibold px-2 px-lg-0" id="kt_app_header_menu" data-kt-menu="true">
		<!--begin:Menu item-->
        @if (userHasPermission('recruit_home'))
            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-0 me-lg-2">
                <!--begin:Menu link-->
                {{-- <span class="menu-link">
                    <span class="menu-title">Home</span>
                    <span class="menu-arrow d-lg-none"></span>
                </span> --}}
                <a href="{{ route('hrm_recruit_home') }}" class="menu-link {{ request()->routeIs('hrm_recruit_home') ? 'active' : '' }}">
                    <span class="menu-title">Home</span>
                </a>
                <!--end:Menu link-->
            </div>
        @endif
		<!--end:Menu item-->
		<!--begin:Menu item-->
        @if (userHasPermission('job_opening_home'))
            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-0 me-lg-2">
                <!--begin:Menu link-->
                {{-- <span class="menu-link ajax-link" data-url="{{ route('job_openings_home') }}">
                    <span class="menu-title">Job Openings</span>
                    <span class="menu-arrow d-lg-none"></span>
                </span> --}}
                <a href="{{ route('job_openings_home') }}" class="menu-link {{ request()->routeIs('job_openings_home') ? 'active' : '' }}">
                    <span class="menu-title">Job Openings</span>
                </a>
                <!--end:Menu link-->
            </div>
        @endif
		<!--end:Menu item-->
		<!--begin:Menu item-->
		<div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
			<!--begin:Menu link-->
			<span class="menu-link">
				<span class="menu-title">Interviews</span>
				<span class="menu-arrow d-lg-none"></span>
			</span>
			<!--end:Menu link-->
		</div>
		<!--end:Menu item-->
		<!--begin:Menu item-->
		<div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-0 me-lg-2">
			<!--begin:Menu link-->
			<span class="menu-link">
				<span class="menu-title">Departments</span>
				<span class="menu-arrow d-lg-none"></span>
			</span>
			<!--end:Menu link-->
		</div>
		<!--end:Menu item-->
	</div>
	<!--end::Menu-->
</div>
<!--end::Menu wrapper-->


@push('scripts')
    <script>
        $(document).ready(function () {
            // $(".ajax-link").click(function (e) {
            //     e.preventDefault();

            //     var url = $(this).data("url");

            //     $.ajax({
            //         url: url,
            //         type: "GET",
            //         dataType: "html",
            //         beforeSend: function () {
            //             $("#content-area").html("<h3>Loading...</h3>");
            //         },
            //         success: function (response) {

            //             $("#content-area").html(response);
            //         },
            //         error: function (xhr, status, error) {
            //             console.error("Error:", error);
            //             $("#content-area").html("<h3>Error loading page. Try again.</h3>");
            //         }
            //     });
            // });
        });
    </script>
@endpush

