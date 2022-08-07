<div class="page-wrapper">
  <div class="page-header navbar navbar-fixed-top">
    <div class="page-header-inner ">
      <div class="page-logo">
        <a target="__blank" href="#" class="logo-default" style="pointer-events: none; color: #fff; font-size: 16px; margin-top: 13px;">
          {{ Auth::user()->name }}
        </a>
        <div class="menu-toggler sidebar-toggler">
          <span></span>
        </div>
      </div>
      <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
        <span></span>
      </a>
      <div class="top-menu">
        <ul class="nav navbar-nav pull-right">
          <li>
              <a href="#" style="color: #fff" 
              onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              <i class="icon-logout"></i> Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
            </form>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>