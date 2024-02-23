<div class="sidebar-wrapper" sidebar-layout="stroke-svg">
    <div>
      <div class="logo-wrapper"><a href="{{ route('/')}}"><img class="img-fluid for-light" src="{{ asset('assets/images/logo/RMS-b.png') }}" alt=""><img class="img-fluid for-dark" src="{{ asset('assets/images/logo/RMS-w.png') }}" alt=""></a>
        <div class="back-btn"><i class="fa fa-angle-left"></i></div>
        <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
      </div>
      <div class="logo-icon-wrapper"><a href="{{ route('/')}}"><img class="img-fluid" src="{{ asset('assets/images/rm-favicon_io/RMS-w0.png') }}" alt=""></a></div>
      <nav class="sidebar-main">
        <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
        <div id="sidebar-menu">
          <ul class="sidebar-links" id="simple-bar">
            <li class="back-btn">
              <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
            </li>

                <!--------------------------MY SIDEBAR LIST---------------------------->

                <!--------------------------------------------------------------------->

            <li class="sidebar-list">
                        <label class="badge badge-light-primary">2</label><a class="sidebar-link sidebar-title"
                            href="{{ route('index')}}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-home') }}"></use>
                            </svg><span class="lan-3">Dashboard</span></a>
                    </li>

               <!--------------------------------------------------------------------->

            

                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-ui-kits') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-ui-kits') }}"></use>
                            </svg><span>Business Continuity Management</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('datatable-data-source')}}">Incidents</a></li>
                            <li><a href="{{ route('base-input')}}">Plans and Assesements</a></li>
                        </ul>
                    </li>
                    

                <!--------------------------------------------------------------------->
                
                <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="{{ route('datatable-ext-autofill')}}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-maps') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-maps') }}"></use>
                            </svg><span>Emergency Response</span></a>
                    </li>

            
                <!--------------------------------------------------------------------->

                <li class="sidebar-list"><a class="sidebar-link sidebar-title" 
                href="{{ route('add-post')}}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-learning') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-learning') }}"></use>
                            </svg><span>Disaster Recovery</span></a>
                    </li>

                <!--------------------------------------------------------------------->

                <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-email') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-email') }}"></use>
                            </svg><span>Crisis Communication</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('email-application')}}">Email App</a></li>
                            <li><a href="{{ route('email-compose')}}">Email Compose</a></li>
                        </ul>
                    </li>


        </div>
        <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
      </nav>
    </div>
  </div>
  