<div class="sidebar-wrapper" sidebar-layout="stroke-svg">
    <div>
      <div class="logo-wrapper"><a href="{{ route('/')}}"><img class="img-fluid for-light" src="{{ asset('assets/images/logo/RMS-black.png') }}" alt=""><img class="img-fluid for-dark" src="{{ asset('assets/images/logo/RMS-white.png') }}" alt=""></a>
        <div class="back-btn"><i class="fa fa-angle-left"></i></div>
        <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
      </div>
      <div class="logo-icon-wrapper"><a href="{{ route('/')}}"><img class="img-fluid" src="{{ asset('assets/images/rm-favicon_io/RMS-w1.png') }}" alt=""></a></div>
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
                        </label><a class="sidebar-link sidebar-title"
                            href="{{ route('index')}}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-charts') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-charts') }}"></use>
                            </svg><span class="lan-3">Dashboard</span></a>
                    </li>
               <!--------------------------------------------------------------------->

            

                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="{{ route ('base-input')}}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-editors') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-editors') }}"></use>
                            </svg><span>Plans and Assesements</span></a>
                
                    </li>
                    

                <!--------------------------------------------------------------------->
                
                <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="{{ route('datatable-data-source')}}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-icons') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-icons') }}"></use>
                            </svg><span>Incidents Response</span></a>
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
  