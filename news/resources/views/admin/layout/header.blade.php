<!-- HEADER DESKTOP-->
  <header class="header-desktop">
    <div class="section__content section__content--p30">
      <div class="container-fluid">
        <div class="header-wrap float-right">
          <div class="header-button">
            @if(Auth::user()->role==2)
            <div class="noti-wrap">
              <div class="noti__item js-item-menu">
                <i class="zmdi zmdi-notifications"></i>
                <span class="quantity">{{count($thongbao)}}</span>
                <div class="notifi-dropdown js-dropdown">
                  <div class="notifi__title">
                    <p class="m-0 font-weight-bold">Có {{count($thongbao)}} bài viết mới cần duyệt</p>
                  </div>
                  @foreach($thongbao as $value)
                  <div class="notifi__item">
                    <div class="bg-c3 img-cir img-40">
                      <i class="zmdi zmdi-file-text"></i>
                    </div>
                    <div class="content">
                      <p>Bài đăng của <span class="font-weight-bold">{{$value->user->name}}</span></p>
                      <span class="date">{{Carbon\Carbon::parse($value->created_at)->format('d/m/Y H:m:s')}}</span>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
            </div>
            @endif
            <div class="account-wrap">
              <div class="account-item clearfix js-item-menu">
                <div class="image">
                  <img src="images/icon/man1.png" alt="John Doe" />
                </div>
                <div class="content">
                  <a class="js-acc-btn" href="#">{{Auth::user()->name}}</a>
                </div>
                <div class="account-dropdown js-dropdown">
                  <div class="info clearfix">
                    <div class="image">
                      <a href="#">
                        <img src="images/icon/man1.png" alt="John Doe" />
                      </a>
                    </div>
                    <div class="content">
                      <h5 class="name">
                        <a href="#">{{Auth::user()->name}}</a>
                      </h5>
                      <span class="email">{{Auth::user()->email}}</span>
                    </div>
                  </div>
                  {{-- <div class="account-dropdown__body">
                    <div class="account-dropdown__item">
                      <a href="#">
                        <i class="zmdi zmdi-account"></i>Account</a>
                    </div>
                    <div class="account-dropdown__item">
                      <a href="#">
                        <i class="zmdi zmdi-settings"></i>Setting</a>
                    </div>
                    <div class="account-dropdown__item">
                      <a href="#">
                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                    </div>
                  </div> --}}
                  <div class="account-dropdown__footer">
                    <a href="{{route('logout')}}">
                      <i class="zmdi zmdi-power"></i>Logout</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>