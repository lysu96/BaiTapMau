<!-- MENU SIDEBAR-->
  <aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
      <a href="admin/post">
        <!-- <img src="images/icon/logo.png" alt="Cool Admin" /> -->
        <h2>ADMIM</h2>
      </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
      <nav class="navbar-sidebar">
        <ul class="list-unstyled navbar__list">
          <li class="">
            <a href="admin/post">
              <i class="far fa-check-square"></i>Quản lý bài viết</a>
          </li>
          @if(Auth::user()->role==2)
          <li class="">
            <a href="admin/category">
              <i class="fas fa-table"></i>Quản lý danh mục</a>
          </li>
          <li class="">
            <a href="admin/checkpost">
              <i class="fas fa-chart-bar"></i>Bài đăng cần duyệt
            </a>
          </li>
          @endif
        </ul>
      </nav>
    </div>
  </aside>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('.list-unstyled li').each(function(index, el) {
        if($(this).hasClass('active')){
          $(this).removeClass('active');
        }
      });
      if(window.location.pathname=="/news/public/admin/post"){
        $('.list-unstyled li:nth-child(1)').addClass('active');
      }else{
        if(window.location.pathname=="/news/public/admin/category"){
        $('.list-unstyled li:nth-child(2)').addClass('active');
      }else if (window.location.pathname=="/news/public/admin/checkpost") {
        $('.list-unstyled li:nth-child(3)').addClass('active');
      }}
      if(window.location.pathname=="/news/public/customer/post"){
        $('.list-unstyled li:nth-child(1)').addClass('active');
      }
    });
  </script>
<!-- END MENU SIDEBAR