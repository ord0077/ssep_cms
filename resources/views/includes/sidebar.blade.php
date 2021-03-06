    <!-- begin::navigation -->
    <div class="navigation">
        <!-- begin::navigation menu -->
        <div class="navigation-menu-body">

            <!-- begin::navigation-logo -->
            <div>
                <div id="navigation-logo">
                    <a href="{{ route('dashboard') }}">
                        <img class="logo" src="{{ asset('assets/media/image/logo.png') }}" alt="logo">
                        <img class="logo-light" src="{{ asset('assets/media/image/logo.png') }}" alt="light logo">
                    </a>
                </div>
            </div>
            <!-- end::navigation-logo -->

            <div class="navigation-menu-group">

                <div class="open" id="dashboards">
                    <ul class="side_navi">
                        <li><a class="{{request()->is('dashboard*') ? 'active' : ''}}" href="{{route('dashboard')}}">{{ __('site.dashboard') }}</a></li>
                        <li><a class="{{request()->is('customers*') ? 'active' : ''}}" href="{{ route('customers') }}">{{ __('site.customers') }}</a></li>
                        <li><a class="{{request()->is('add-complain*') ? 'active' : ''}}" href="{{ route('add-complain') }}">{{ __('site.add_complain') }}</a></li>
                        <li><a class="{{request()->is('add-inquiry*') ? 'active' : ''}}" href="{{ route('add-inquiry') }}">{{ __('site.add_inquiry') }}</a></li>
                        <br>
                        <li class="navigation-divider">{{ __('site.complaints') }}</li>
                        <li><a class="{{request()->is('complaints-queue*') ? 'active' : ''}}" href="{{ route('complaints-queued') }}">{{ __('site.complaints_in_queue') }} <span class="badge badge-danger">26</span></a></li>
                        <li><a class="{{request()->is('complaints-processing*') ? 'active' : ''}}" href="{{ route('complaints-processing') }}">{{ __('site.complaints_in_process') }} <span class="badge badge-warning">38</span></a></li>
                        <li><a class="{{request()->is('complaints-resolved*') ? 'active' : ''}}" href="{{ route('complaints-resolved') }}">{{ __('site.complaints_resolved') }} <span class="badge badge-success">65</span></a></li>

                        <li class="navigation-divider">{{ __('site.inquiries') }}</li>
                        <li><a class="{{request()->is('inquiries-queued*') ? 'active' : ''}}" href="{{ route('inquiries-queued') }}">{{ __('site.inquiries_in_queue') }} <span class="badge badge-danger">12</span></a></li>
                        <li><a class="{{request()->is('inquiries-processing*') ? 'active' : ''}}" href="{{ route('inquiries-processing') }}">{{ __('site.inquiries_in_process') }} <span class="badge badge-warning">5</span></a></li>
                        <li><a class="{{request()->is('inquiries-completed*') ? 'active' : ''}}" href="{{ route('inquiries-completed') }}">{{ __('site.inquiries_completed') }} <span class="badge badge-success">20</span></a></li>

                        <li class="navigation-divider">{{ __('site.calls') }}</li>
                        <li><a class="{{request()->is('missed-calls*') ? 'active' : ''}}" href="{{ route('missed-calls') }}">{{ __('site.missed_calls') }} <span class="badge badge-danger">25</span></a></li>
                        <li><a class="{{request()->is('received-calls*') ? 'active' : ''}}" href="{{ route('received-calls') }}">{{ __('site.received_calls') }} <span class="badge badge-success">76</span></a></li>
                        <br>
                        <li><a class="{{request()->is('signout*') ? 'active' : ''}}" href="{{ route('signout') }}"><i data-feather="log-out"></i> &nbsp;{{ __('site.log_out') }}</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end::navigation menu -->

    </div>
    <!-- end::navigation -->
