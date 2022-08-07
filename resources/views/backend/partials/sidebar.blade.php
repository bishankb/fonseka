<div class="page-sidebar-wrapper">
  <div class="page-sidebar navbar-collapse collapse">
    <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
      <li class="sidebar-toggler-wrapper hide">
        <div class="sidebar-toggler">
          <span></span>
        </div>
      </li>

      <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
        <a href="{{ route('dashboard') }}" class="nav-link nav-toggle">
          <i class="fa fa-tachometer"></i>
          <span class="title">Dashboard</span>
        </a>
      </li>

      <li class="nav-item {{ Request::is('routines*') ? 'active' : '' }}">
          <a href="{{ route('routines.index') }}" class="nav-link nav-toggle">
            <i class="fa fa-clock-o"></i>
            <span class="title">Routine</span>
          </a>
        </li>
    </ul>
  </div>
</div>

@section('backend-script')
  <script>
    $("#item_id li a").click(function() {
        $('#item_li').parent().addClass('start active open').siblings().removeClass('start active open');
    });
  </script>
@endsection
