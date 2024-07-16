<!-- START: Main Menu-->
<div class="sidebar">
    <div class="media d-block text-center user-profile">
        <img class="img-fluid" src="{{ asset('dist/images/author1.jpg') }}" alt="">

        <div class="media-body text-center mt-0 color-primary mt-2">
                <a href="#" class="nav-link py-0" data-toggle="dropdown" aria-expanded="false">
                    <h6 class="mb-0 font-weight-bold">Harry Jones</h6>
                    Toronto, Canada
                </a>
                <div class="dropdown-menu dropdown-menu-right p-0" style="">
                    <a href="#" class="dropdown-item px-2 align-self-center d-flex">
                        <span class="icon-pencil mr-2 h6 mb-0"></span> Edit Profile</a>
                    <a href="#" class="dropdown-item px-2 align-self-center d-flex">
                        <span class="icon-user mr-2 h6 mb-0"></span> View Profile</a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item px-2 text-danger align-self-center d-flex">
                        <span class="icon-logout mr-2 h6  mb-0"></span> Sign Out</a>
                </div>
        </div>
    </div>

                <!-- START:Menu -->
            <ul id="side-menu" class="sidebar-menu">
                <li class="dropdown active"><a href="#">Dashboard</a>
                    <ul>
                        <li class="active"><a href="{{ route('dashboard') }}"><i class="icon-rocket"></i> Dashboard</a></li>
                        <li><a href="{{ route('form') }}"><i class="icon-rocket"></i>Form</a></li>
                        {{-- <li><a href="{{url('/table')}}"><i class="icon-rocket"></i>Table</a></li> --}}
                        <li><a href="{{ route('table') }}"><i class="icon-rocket"></i>Reports</a></li>
                    </ul>
                </li>
            </ul>
        </div>
