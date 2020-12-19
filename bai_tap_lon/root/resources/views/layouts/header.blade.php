<style>
#header.header-scrolled {
  background: #fff;
  padding: 20px 0;
  height: 72px;
  transition: all 0.5s;
}
#header {
  padding: 30px 0;
  height: 92px;
  left: 0;
  top: 0;
  right: 0;
  transition: all 0.5s;
  z-index: 997;
  background-color: #fff;
  box-shadow: 5px 0px 15px #c3c3c3;
}
#header #logo h1 {
  font-size: 34px;
  margin: 0;
  padding: 0;
  line-height: 1;
  font-family: "Montserrat", sans-serif;
  font-weight: 700;
  letter-spacing: 3px;
}
#header #logo h1 a, #header #logo h1 a:hover {
  color: #000;
  padding-left: 10px;
  border-left: 4px solid grey;
}
#nav-menu-container {
  float: right;
  margin: 0;
}
.nav-menu > li {
  margin-left: 10px;
}
.nav-menu > li {
  float: left;
}
.nav-menu li {
  position: relative;
  white-space: nowrap;
}
.nav-menu, .nav-menu * {
  margin: 0;
  padding: 0;
  list-style: none;
}
.header-scrolled .nav-menu li:hover > a, .header-scrolled .nav-menu > .menu-active > a {
  color: #18d26e;
}
.header-scrolled .nav-menu a {
  color: black;
}
.nav-menu li:hover > a, .nav-menu > .menu-active > a {
  color: #18d26e;
}
.nav-menu a {
  padding: 0 8px 10px 8px;
  text-decoration: none;
  display: inline-block;
  color: #000;
  font-family: "Montserrat", sans-serif;
  font-weight: 700;
  font-size: 13px;
  text-transform: uppercase;
  outline: none;
}
#mobile-nav-toggle {
  display: inline;
}
#mobile-nav-toggle {
  position: fixed;
  right: 0;
  top: 0;
  z-index: 999;
  margin: 20px 20px 0 0;
  border: 0;
  background: none;
  font-size: 24px;
  display: none;
  transition: all 0.4s;
  outline: none;
  cursor: pointer;
}
#mobile-body-overly {
  width: 100%;
  height: 100%;
  z-index: 997;
  top: 0;
  left: 0;
  position: fixed;
  background: rgba(0, 0, 0, 0.7);
  display: none;
}
body.mobile-nav-active #mobile-nav {
  left: 0;
}
#mobile-nav {
  position: fixed;
  top: 0;
  padding-top: 18px;
  bottom: 0;
  z-index: 998;
  background: rgba(0, 0, 0, 0.8);
  left: -260px;
  width: 260px;
  overflow-y: auto;
  transition: 0.4s;
}
#mobile-nav ul {
  padding: 0;
  margin: 0;
  list-style: none;
}
#mobile-nav ul li {
  position: relative;
}
#mobile-nav ul li a {
  color: #fff;
  font-size: 13px;
  text-transform: uppercase;
  overflow: hidden;
  padding: 10px 22px 10px 15px;
  position: relative;
  text-decoration: none;
  width: 100%;
  display: block;
  outline: none;
  font-weight: 700;
  font-family: "Montserrat", sans-serif;
}
#mobile-nav ul .menu-has-children i.fa-chevron-up {
  color: #18d26e;
}
#mobile-nav ul .menu-has-children i {
  position: absolute;
  right: 0;
  z-index: 99;
  padding: 15px;
  cursor: pointer;
  color: #fff;
}
#mobile-nav ul .menu-item-active {
  color: #18d26e;
}
#mobile-nav ul li li {
  padding-left: 30px;
}

.menu-has-children ul
{display: none;}

.sf-arrows .sf-with-ul {
  padding-right: 30px;
}

.sf-arrows .sf-with-ul:after {
  content: "\f107";
  position: absolute;
  right: 15px;
  font-family: FontAwesome;
  font-style: normal;
  font-weight: normal;
  color:black;
}

.sf-arrows ul .sf-with-ul:after {
  content: "\f105";
}


.nav-menu li:hover > ul,
.nav-menu li.sfHover > ul {
  display: block;
}
.nav-menu ul {
  margin: 4px 0 0 0;
  padding: 10px;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
  background: #fff;
}
.nav-menu ul {
  position: absolute;
  display: none;
  top: 100%;
  left: 0;
  z-index: 99;
}

.sf-arrows .sf-with-ul {
  padding-right: 30px;
}
.nav-menu li {
  position: relative;
  white-space: nowrap;
}


@media (max-width: 768px){
  #nav-menu-container {
    display: none;
  }

  #mobile-nav-toggle {
    display: inline;
  }
}

</style>
<script>
  // Mobile Navigation
  if ($('#nav-menu-container').length) {
    var $mobile_nav = $('#nav-menu-container').clone().prop({
      id: 'mobile-nav'
    });
    $mobile_nav.find('> ul').attr({
      'class': '',
      'id': ''
    });
    $('body').append($mobile_nav);
    $('body').prepend('<button type="button" id="mobile-nav-toggle"><i class="fa fa-bars"></i></button>');
    $('body').append('<div id="mobile-body-overly"></div>');
    $('#mobile-nav').find('.menu-has-children').prepend('<i class="fa fa-chevron-down"></i>');

    $(document).on('click', '.menu-has-children i', function(e) {
      $(this).next().toggleClass('menu-item-active');
      $(this).nextAll('ul').eq(0).slideToggle();
      $(this).toggleClass("fa-chevron-up fa-chevron-down");
    });

    $(document).on('click', '#mobile-nav-toggle', function(e) {
      $('body').toggleClass('mobile-nav-active');
      $('#mobile-nav-toggle i').toggleClass('fa-times fa-bars');
      $('#mobile-body-overly').toggle();
    });

    $(document).click(function(e) {
      var container = $("#mobile-nav, #mobile-nav-toggle");
      if (!container.is(e.target) && container.has(e.target).length === 0) {
        if ($('body').hasClass('mobile-nav-active')) {
          $('body').removeClass('mobile-nav-active');
          $('#mobile-nav-toggle i').toggleClass('fa-times fa-bars');
          $('#mobile-body-overly').fadeOut();
        }
      }
    });
  } else if ($("#mobile-nav, #mobile-nav-toggle").length) {
    $("#mobile-nav, #mobile-nav-toggle").hide();
  }

  // Smooth scroll for the menu and links with .scrollto classes
  $('.nav-menu a, #mobile-nav a, .scrollto').on('click', function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      if (target.length) {
        var top_space = 0;

        if ($('#header').length) {
          top_space = $('#header').outerHeight();

          if( ! $('#header').hasClass('header-fixed') ) {
            top_space = top_space - 20;
          }
        }

        $('html, body').animate({
          scrollTop: target.offset().top - top_space
        }, 1500, 'easeInOutExpo');

        if ($(this).parents('.nav-menu').length) {
          $('.nav-menu .menu-active').removeClass('menu-active');
          $(this).closest('li').addClass('menu-active');
        }

        if ($('body').hasClass('mobile-nav-active')) {
          $('body').removeClass('mobile-nav-active');
          $('#mobile-nav-toggle i').toggleClass('fa-times fa-bars');
          $('#mobile-body-overly').fadeOut();
        }
        return false;
      }
    }
  });
  
</script>

<header id="header">
  <div class="container">

    <div id="logo" class="pull-left">
      <h1><a href="{{asset('')}}" class="scrollto">Phone Store</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
    </div>
    <nav id="nav-menu-container">
      <ul class="nav-menu">
        <li>
          <form class="form-horizontal" role="form" method="POST" action="{{Route('timkiem')}}">
           {{csrf_field()}}
           <div class="row">
            <div class="col-md-9">
              <div class="form-group">
                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                  <input type="text" name="key" class="form-control" id="name"
                  value="" required autofocus>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3"></div>
              <div class="col-md-6">
                <button type="submit" style="border: none;background: none;"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </form>
        </li>
        <li class="menu-active"><a href="{{asset('')}}">Trang chủ</a></li>
        <li class="menu-has-children"><a href="">Điện thoại</a>
          <ul>
            <li><a href="{{asset('dtdd/Apple')}}">Apple</a></li>
            <li><a href="{{asset('dtdd/Samsung')}}">Samsung</a></li>
            <li><a href="{{asset('dtdd/Xiaomi')}}">Xiaomi</a></li>
            <li><a href="{{asset('dtdd/Huawei')}}">Huawei</a></li>
          </ul>
        </li>

        <li><a href="{{asset('lienhe')}}">Liên hệ</a></li>
        @if (!Auth::check())
        <li><a href="{{asset('login')}}">Đăng Nhập</a></li>
        <li><a href="{{asset('register')}}">Đăng ký</a></li>
        @else
        <li class="menu-has-children"><a href="{{asset('account')}}"><?= Auth::user()->hoTen ?></a>
          <ul>
            @if (Auth::user()->role>1)
            <li><a href="{{asset('admin')}}">Admin CP</a></li>
            @endif
            <li><a href="{{asset('account')}}">Thông tin tài khoản</a></li>
            <li><a href="{{asset('logout')}}">Logout</a></li>
          </ul>
        </li>
        @endif
        <?php if (Auth::check()): ?>
          <li><a href="{{asset('gio-hang')}}"><i class="fas fa-shopping-cart"></i><span style="width: 18px; height: 18px;line-height: 18px;" class="badge badge-primary badge-pill"><?php $gh = DB::table('gio_hang')->where('id_tv',Auth::user()->id)->get(); echo count($gh); ?></span></a></li>
        <?php endif ?>

      </ul>
    </nav><!-- #nav-menu-container -->

  </div>
</header><!-- #header -->