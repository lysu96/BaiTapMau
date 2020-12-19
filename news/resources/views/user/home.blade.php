
<!DOCTYPE html>
<html class="#{html_class}" lang="en">
  <head>
    <title>Home - KingNews</title>

    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta charset="utf-8">
    <base href="{{ asset('') }}">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="#{fonts}">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
        <!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
        <![endif]-->
  </head>
  <body>
    <div class="page text-center">
      <header class="page-head">
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-default" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fullwidth" data-lg-layout="rd-navbar-static" data-stick-up-offset="198" data-md-layout="rd-navbar-fullwidth">
            <div class="rd-navbar-inner">
              <div class="rd-navbar-top-part text-sm-left small">
                <h1>WebSite Tin Tức </h1>
                <div class="rd-navbar-top-part-right">
                  <div class="rd-navbar-search-toggle" data-rd-navbar-toggle=".rd-navbar-search-wrap"></div>
                  <div class="rd-navbar-search-wrap">
                    <div class="rd-navbar-search">
                      <form class="rd-search rd-navbar-search-form" action="search-results.php" data-search-live="rd-search-results-live" method="GET">
                        <div class="form-wrap">
                          <label class="form-label" for="rd-navbar-search-form-input">Tìm kiếm....</label>
                          <input class="rd-navbar-search-form-input form-input" id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off">
                        </div>
                        <button class="rd-search-form-submit fa-search rd-navbar-search-form-submit" type="submit"></button>
                      </form>
                    </div>
                    <!--.rd-navbar-search-->
                    <!--  form.rd-navbar-search-form(action='search.php', method='GET')-->
                    <!--    label.rd-navbar-search-form-input-->
                    <!--      input(type='text', name='s', placeholder='I`m looking for....', autocomplete='off')-->
                    <!--    button.rd-navbar-search-form-submit(type='submit')-->
                    <!--  span.rd-navbar-live-search-results-->
                  </div>
                  <div class="divider-vertical divider-xs"></div>
                  <div class="element-groups-xl-custom user-forms"><a class="rd-navbar-login-btn" href="#" data-rd-navbar-toggle=".rd-navbar-login"><span class="icon icon-sm fa-unlock-alt text-white veil-sm"></span><span class="veil reveal-sm-inline-block">Đăng nhập</span></a>
                    <div class="rd-navbar-login">
                      <form action="#">
                        <div class="form-group">
                          <input class="form-control" type="text" name="name" placeholder="Your name">
                        </div>
                        <div class="form-group offset-top-12">
                          <input class="form-control" type="password" name="pass" placeholder="Your password">
                        </div>
                        <button class="btn btn-warning offset-top-12 text-normal" type="submit">Login</button>
                      </form>
                    </div><a class="rd-navbar-register-btn" href="#" data-rd-navbar-toggle=".rd-navbar-register"><span class="icon icon-sm fa-user text-white veil-sm"></span><span class="veil reveal-sm-inline-block">Đăng ký</span></a>
                    <div class="rd-navbar-register">
                      <form action="#">
                        <div class="form-group">
                          <input class="form-control" type="text" name="name" placeholder="Your name">
                        </div>
                        <div class="form-group offset-top-12">
                          <input class="form-control" type="password" name="pass" placeholder="Your password">
                        </div>
                        <button class="btn btn-warning offset-top-12 text-normal" type="submit">Register</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <!-- <div class="rd-navbar-panel">
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                <div class="rd-navbar-brand"><a class="brand-name" href="index.php"><span>king</span>news</a></div>
              </div> -->
              <div class="rd-navbar-nav-wrap">
                <div class="rd-navbar-social-list">
                          <ul class="list-inline-0">
                            <li><a class="icon icon-circle fa fa-facebook-square icon-default" href="#"></a></li>
                            <li><a class="icon icon-circle fa-twitter icon-default" href="#"></a></li>
                            <li><a class="icon icon-circle fa-google-plus icon-default" href="#"></a></li>
                            <li><a class="icon icon-circle fa-youtube icon-default" href="#"></a></li>
                            <li><a class="icon icon-circle fa-feed icon-default" href="#"></a></li>
                          </ul>
                </div>
                <ul class="rd-navbar-nav">
                  <li class="active"><a href="./">Trang chủ</a>
                    <ul class="rd-navbar-dropdown">
                      <li><a href="index-variant-2.php">Home Variant 2</a></li>
                      <li><a href="categories-grid.php">Grid Layout</a></li>
                      <li><a href="categories-masonry.php">Masonry Layout</a></li>
                      <li><a href="categories-list.php">List Layout</a></li>
                      <li><a href="#">Header Settings</a>
                        <ul class="rd-navbar-dropdown">
                          <li><a href="header-variant-1.php">Header style 1</a></li>
                          <li><a href="header-variant-2.php">Header style 2</a></li>
                          <li><a href="header-default.php">Header style 3</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Footer Settings</a>
                        <ul class="rd-navbar-dropdown">
                          <li><a href="footer-variant-1.php">Footer Style 1</a></li>
                          <li><a href="footer-default.php">Footer Style 2</a></li>
                          <li><a href="footer-variant-2.php">Footer style 3</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Sidebar Settings</a>
                        <ul class="rd-navbar-dropdown">
                          <li><a href="index.php">Right Sidebar</a></li>
                          <li><a href="index-sidebar-left.php">Left Sidebar</a></li>
                          <li><a href="index-sidebar-none.php">No Sidebar</a></li>
                        </ul>
                      </li>
                      <li><a href="typography.php">Typography</a></li>
                      <li><a href="404.php">404</a></li>
                    </ul>
                  </li>
                  {{-- 
                  <li><a href="politics.php">Politics</a></li>
                  <li><a href="business.php">Business</a></li>
                  <li><a href="sports.php">Sports</a></li>
                  <li><a href="tech.php">Tech</a></li>
                  <li><a href="world.php">World</a></li>
                  <li><a href="about-us.php">About</a></li> --}}
                  @foreach ($danhmuc as $element)
                    <li><a href="#">{{$element->tendanhmuc}}</a></li>
                  @endforeach
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <main class="page-content">
        <section class="section-top-50">
          <div class="shell">
            <div class="range">
              <div class="cell-lg-6">
                <div class="offset-lg-negative-right-26">
                  <div class="post post-variant-1">
                    <div class="post-inner"><img class="img-responsive post-image" src="{{$noibat2->anh}}" style="height: 496px" alt=""/>
                      <div class="post-caption">
                        <ul>
                          <li><a href=""><span class="label label-warning">{{$noibat2->category->tendanhmuc}}</span></a></li>
                        </ul>
                        <div>
                          <div class="h1"><a href="home/{{$noibat2->id}}">{{$noibat2->mota}}</a></div>
                          <div class="post-meta post-meta-hidden-outer">
                            <div class="post-meta-hidden">
                              <div class="icon text-gray icon-lg material-icons-share">
                                <ul>
                                  <li><a class="icon fa fa-facebook" href="#"></a></li>
                                  <li><a class="icon fa fa-twitter" href="#"></a></li>
                                  <li><a class="icon fa fa-google-plus" href="#"></a></li>
                                  <li><a class="icon fa fa-linkedin" href="#"></a></li>
                                  <li><a class="icon fa fa-pinterest" href="#"></a></li>
                                </ul>
                              </div>
                            </div><a class="post-meta-time" href="politics.php">
                              <time class="htmlme" datetime="2016-06-06">{{Carbon\Carbon::parse($noibat2->created_at)->format('d/m/Y')}}</time></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="cell-lg-6 offset-top-12 offset-lg-top-0 offset-lg-negative-left-26">
                <div class="range">
                  <div class="cell-sm-6">
                    <div class="offset-lg-negative-right-38 offset-sm-negative-right-23">
                      @foreach($noibat1 as $value)
                      <div class="post post-variant-1">
                        <div class="post-inner"><img class="img-responsive post-image" src="{{$value->anh}}" width="426" style="height: 244px" alt=""/>
                          <div class="post-caption">
                            <ul>
                              <li><a href="politics.php"><span class="label label-warning">{{$value->category->tendanhmuc}}</span></a></li>
                            </ul>
                            <div>
                              <div class="h5"><a href="home/{{$value->id}}">{{$value->tieude}}</a></div>
                              <div class="post-meta post-meta-hidden-outer">
                                <div class="post-meta-hidden">
                                  <div class="icon text-gray icon-lg material-icons-share">
                                    <ul>
                                      <li><a class="icon fa fa-facebook" href="#"></a></li>
                                      <li><a class="icon fa fa-twitter" href="#"></a></li>
                                      <li><a class="icon fa fa-google-plus" href="#"></a></li>
                                      <li><a class="icon fa fa-linkedin" href="#"></a></li>
                                      <li><a class="icon fa fa-pinterest" href="#"></a></li>
                                    </ul>
                                  </div>
                                </div>
                                <div><a class="post-meta-time" href="politics.php">
                                    <time datetime="2016-06-06">{{Carbon\Carbon::parse($value->created_at)->format('d/m/Y')}}</time></a></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      @endforeach
                    </div>
                  </div>
                  <div class="cell-sm-6 offset-top-12 offset-sm-top-0">
                    <div class="offset-lg-negative-left-14 offset-lg-negative-right-24 offset-sm-negative-left-23">
                      @foreach($noibat11 as $value)
                      <div class="post post-variant-1">
                        <div class="post-inner"><img class="img-responsive post-image" src="{{$value->anh}}" width="426" style="height: 244px" alt=""/>
                          <div class="post-caption">
                            <ul>
                              <li><a href="politics.php"><span class="label label-warning">{{$value->category->tendanhmuc}}</span></a></li>
                            </ul>
                            <div>
                              <div class="h5"><a href="home/{{$value->id}}">{{$value->tieude}}</a></div>
                              <div class="post-meta post-meta-hidden-outer">
                                <div class="post-meta-hidden">
                                  <div class="icon text-gray icon-lg material-icons-share">
                                    <ul>
                                      <li><a class="icon fa fa-facebook" href="#"></a></li>
                                      <li><a class="icon fa fa-twitter" href="#"></a></li>
                                      <li><a class="icon fa fa-google-plus" href="#"></a></li>
                                      <li><a class="icon fa fa-linkedin" href="#"></a></li>
                                      <li><a class="icon fa fa-pinterest" href="#"></a></li>
                                    </ul>
                                  </div>
                                </div>
                                <div><a class="post-meta-time" href="politics.php">
                                    <time datetime="2016-06-06">{{Carbon\Carbon::parse($noibat2->created_at)->format('d/m/Y')}}</time></a></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      @endforeach
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="section-top-26">
          <div class="shell">
            <div class="range text-md-left">
              <div class="cell-lg-8">
                <div class="heading-divider offset-top-45 offset-md-top-25">
                  <h2>Tin tức mới nhất</h2>
                </div>
                @foreach($data as $value)
                <div class="post post-variant-2">
                  <div class="unit unit-xl-horizontal text-sm-left unit-sm-horizontal unit-md-horizontal unit-lg-horizontal offset-top-25 offset-md-top-0">
                    <div class="unit-left">
                      <div class="post-inner">
                        <div class="reveal-inline-block"><img class="post-image" src="{{$value->anh}}" width="150" style="height:115px" alt=""/></div>
                        <div class="post-caption">
                          <ul>
                            <li><a href="politics.php"><span class="label label-warning">{{$value->category->tendanhmuc}}</span></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="unit-body">
                      <div class="h5 text-bold"><a class="post-link" href="home/{{$value->id}}">{{$value->tieude}}</a></div>
                      <p>{{$value->mota}}</p>
                      <div class="post-meta post-meta-hidden-outer">
                        <div class="post-meta-hidden">
                          <div class="icon text-gray icon-lg material-icons-share">
                            <ul>
                              <li><a class="icon fa fa-facebook" href="https://www.facebook.com/sharer.php?u=localhost/news/public/home/4{{$value->id}}"></a></li>
                              <li><a class="icon fa fa-twitter" href="#"></a></li>
                              <li><a class="icon fa fa-google-plus" href="#"></a></li>
                              <li><a class="icon fa fa-linkedin" href="#"></a></li>
                              <li><a class="icon fa fa-pinterest" href="#"></a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="element-groups-custom"><a class="post-meta-author" href="categories-list.php">{{$value->user->name}}</a><a class="post-meta-time" href="politics.php">
                            <time datetime="2016-06-06">{{Carbon\Carbon::parse($value->created_at)->format('d/m/Y')}}</time></a><a class="post-meta-comment" href="post-default.php#comments">0 Comments</a></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="divider divider-dashed"></div>
                @endforeach
                {{-- <ul class="pagination">
                  <li class="active"><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li><span>...</span></li>
                  <li><a href="#">10</a></li>
                  <li class="next veil reveal-md-inline"><a href="#">Next</a></li>
                </ul> --}}
                {{-- <div class="heading-divider">
                  <h2>Tin tức thế giới</h2>
                </div>
                <div class="offset-top-45 range range-sm-center range-lg-left post post-variant-3">
                  <div class="cell-sm-10 cell-md-6">
                    <div class="post-inner"><img class="img-responsive post-image reveal-inline-block" src="images/index-24.jpg" height="411" width="536" alt="">
                      <div class="post-caption post-caption-lg">
                        <ul>
                          <li><a href="politics.php"><span class="label label-warning">World</span></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="cell-sm-10 cell-md-6 offset-top-36 offset-md-top-0">
                    <div class="h4 text-normal font-accent-2 offset-top-0"><a class="post-link" href="post-default.php">If Obama Had Ruled Like This in 2009, He'd Be the Reforming President We All Hoped For</a></div>
                    <div class="post-meta element-groups-custom offset-top-12"><a class="post-meta-author" href="categories-list.php">Brian Williamson</a><a class="post-meta-time" href="politics.php">
                        <time datetime="2016-06-06">2h ago</time></a><a class="post-meta-comment" href="post-default.php#comments">15 Comments</a></div>
                    <p>When people tell me that our President has delivered his 7th State of the Union speech recently, I always correct their mistake and tell it was eighth, in fact. On February 24, 2009, the start of Barack Obama’s 2nd month in office, he made an extensive speech on then ongoing Great Recession crisis. He tried to show what his personal vision for a path out was and why it was aligned with a $787 billion stimulus law that was passed that same day. Also, Mr. President talked foreign politics on that same occasion.</p>
                    <div class="reveal-xs-flex range-xs-middle range-xs-justify offset-top-25"><a class="btn btn-warning" href="post-default.php">Read more</a>
                      <div class="veil reveal-xs-block">
                        <div class="post-meta post-meta-hidden-outer">
                          <div class="post-meta-hidden">
                            <div class="icon text-gray icon-lg material-icons-share">
                              <ul>
                                <li><a class="icon fa fa-facebook" href="#"></a></li>
                                <li><a class="icon fa fa-twitter" href="#"></a></li>
                                <li><a class="icon fa fa-google-plus" href="#"></a></li>
                                <li><a class="icon fa fa-linkedin" href="#"></a></li>
                                <li><a class="icon fa fa-pinterest" href="#"></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> --}}
                {{-- <div class="divider divider-dashed"></div>
                <div class="range offset-top-30 offset-md-top-60">
                  <div class="cell-md-6">
                    <div class="post post-variant-2">
                      <div class="unit unit-xl-horizontal unit-lg-horiaontal unit-md-horizontal unit-sm-horizontal text-sm-left">
                        <div class="unit-left">
                          <div class="post-inner">
                            <div class="reveal-inline-block"><img class="post-image" src="images/index-25.jpg" width="150" height="115" alt=""/></div>
                            <div class="post-caption">
                              <ul>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="unit-body">
                          <div class="h5 text-bold"><a class="post-link" href="post-default.php">10 Creative Courses That Will Keep You Learning New Things Next Year</a></div>
                          <div class="post-meta post-meta-hidden-outer">
                            <div class="post-meta-hidden">
                              <div class="icon text-gray icon-lg material-icons-share">
                                <ul>
                                  <li><a class="icon fa fa-facebook" href="#"></a></li>
                                  <li><a class="icon fa fa-twitter" href="#"></a></li>
                                  <li><a class="icon fa fa-google-plus" href="#"></a></li>
                                  <li><a class="icon fa fa-linkedin" href="#"></a></li>
                                  <li><a class="icon fa fa-pinterest" href="#"></a></li>
                                </ul>
                              </div>
                            </div>
                            <div class="element-groups-custom"><a class="post-meta-time" href="politics.php">
                                <time datetime="2016-06-06">2h ago</time></a><a class="post-meta-comment" href="post-default.php#comments">15 Comments</a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="divider divider-dashed"></div>
                    <div class="post post-variant-2">
                      <div class="unit unit-xl-horizontal unit-lg-horizontal unit-md-horizontal unit-sm-horizontal text-sm-left">
                        <div class="unit-left">
                          <div class="post-inner">
                            <div class="reveal-inline-block"><img class="post-image" src="images/index-27.jpg" width="150" height="115" alt=""/></div>
                            <div class="post-caption">
                              <ul>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="unit-body">
                          <div class="h5 text-bold"><a class="post-link" href="post-default.php">Uber is Using Phone Gyrometers to Check Whether Drivers go Over Speed or Acceleration</a></div>
                          <div class="post-meta post-meta-hidden-outer">
                            <div class="post-meta-hidden">
                              <div class="icon text-gray icon-lg material-icons-share">
                                <ul>
                                  <li><a class="icon fa fa-facebook" href="#"></a></li>
                                  <li><a class="icon fa fa-twitter" href="#"></a></li>
                                  <li><a class="icon fa fa-google-plus" href="#"></a></li>
                                  <li><a class="icon fa fa-linkedin" href="#"></a></li>
                                  <li><a class="icon fa fa-pinterest" href="#"></a></li>
                                </ul>
                              </div>
                            </div>
                            <div class="element-groups-custom"><a class="post-meta-time" href="politics.php">
                                <time datetime="2016-06-06">2h ago</time></a><a class="post-meta-comment" href="post-default.php#comments">15 Comments</a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="divider divider-dashed"></div>
                    <div class="post post-variant-2">
                      <div class="unit unit-xl-horizontal unit-lg-horizontal unit-md-horizontal unit-sm-horizontal text-sm-left">
                        <div class="unit-left">
                          <div class="post-inner">
                            <div class="reveal-inline-block"><img class="post-image" src="images/index-29.jpg" width="150" height="115" alt=""/></div>
                            <div class="post-caption">
                              <ul>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="unit-body">
                          <div class="h5 text-bold"><a class="post-link" href="post-default.php">Greek Islanders are to be Nominated for Peace Prize After Saving Tens of Thousands Refugees in 2015</a></div>
                          <div class="post-meta post-meta-hidden-outer">
                            <div class="post-meta-hidden">
                              <div class="icon text-gray icon-lg material-icons-share">
                                <ul>
                                  <li><a class="icon fa fa-facebook" href="#"></a></li>
                                  <li><a class="icon fa fa-twitter" href="#"></a></li>
                                  <li><a class="icon fa fa-google-plus" href="#"></a></li>
                                  <li><a class="icon fa fa-linkedin" href="#"></a></li>
                                  <li><a class="icon fa fa-pinterest" href="#"></a></li>
                                </ul>
                              </div>
                            </div>
                            <div class="element-groups-custom"><a class="post-meta-time" href="politics.php">
                                <time datetime="2016-06-06">2h ago</time></a><a class="post-meta-comment" href="post-default.php#comments">15 Comments</a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="cell-md-6">
                    <div class="divider divider-dashed veil-md"></div>
                    <div class="post post-variant-2">
                      <div class="unit unit-xl-horizontal unit-lg-horizontal unit-md-horizontal unit-sm-horizontal text-sm-left">
                        <div class="unit-left">
                          <div class="post-inner">
                            <div class="reveal-inline-block"><img class="post-image" src="images/index-26.jpg" width="150" height="115" alt=""/></div>
                            <div class="post-caption">
                              <ul>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="unit-body">
                          <div class="h5 text-bold"><a class="post-link" href="post-default.php">David Cameron to Do a Last-hope Appeal to Jean-Claude Juncker to Save EU Renegotiation</a></div>
                          <div class="post-meta post-meta-hidden-outer">
                            <div class="post-meta-hidden">
                              <div class="icon text-gray icon-lg material-icons-share">
                                <ul>
                                  <li><a class="icon fa fa-facebook" href="#"></a></li>
                                  <li><a class="icon fa fa-twitter" href="#"></a></li>
                                  <li><a class="icon fa fa-google-plus" href="#"></a></li>
                                  <li><a class="icon fa fa-linkedin" href="#"></a></li>
                                  <li><a class="icon fa fa-pinterest" href="#"></a></li>
                                </ul>
                              </div>
                            </div>
                            <div class="element-groups-custom"><a class="post-meta-time" href="politics.php">
                                <time datetime="2016-06-06">2h ago</time></a><a class="post-meta-comment" href="post-default.php#comments">15 Comments</a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="divider divider-dashed"></div>
                    <div class="post post-variant-2">
                      <div class="unit unit-xl-horizontal unit-lg-horizontal unit-md-horizontal unit-sm-horizontal text-sm-left">
                        <div class="unit-left">
                          <div class="post-inner">
                            <div class="reveal-inline-block"><img class="post-image" src="images/index-28.jpg" width="150" height="115" alt=""/></div>
                            <div class="post-caption">
                              <ul>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="unit-body">
                          <div class="h5 text-bold"><a class="post-link" href="post-default.php">Woman Claiming £33m Win, Has Washed Lottery Ticket</a></div>
                          <div class="post-meta post-meta-hidden-outer">
                            <div class="post-meta-hidden">
                              <div class="icon text-gray icon-lg material-icons-share">
                                <ul>
                                  <li><a class="icon fa fa-facebook" href="#"></a></li>
                                  <li><a class="icon fa fa-twitter" href="#"></a></li>
                                  <li><a class="icon fa fa-google-plus" href="#"></a></li>
                                  <li><a class="icon fa fa-linkedin" href="#"></a></li>
                                  <li><a class="icon fa fa-pinterest" href="#"></a></li>
                                </ul>
                              </div>
                            </div>
                            <div class="element-groups-custom"><a class="post-meta-time" href="politics.php">
                                <time datetime="2016-06-06">2h ago</time></a><a class="post-meta-comment" href="post-default.php#comments">15 Comments</a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="divider divider-dashed"></div>
                    <div class="post post-variant-2">
                      <div class="unit unit-xl-horizontal unit-lg-horizontal unit-md-horizontal unit-sm-horizontal text-sm-left">
                        <div class="unit-left">
                          <div class="post-inner">
                            <div class="reveal-inline-block"><img class="post-image" src="images/index-30.jpg" width="150" height="115" alt=""/></div>
                            <div class="post-caption">
                              <ul>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="unit-body">
                          <div class="h5 text-bold"><a class="post-link" href="post-default.php">30th Anniversary of the Space Shuttle Challenger Catastrophe, in pictures</a></div>
                          <div class="post-meta post-meta-hidden-outer">
                            <div class="post-meta-hidden">
                              <div class="icon text-gray icon-lg material-icons-share">
                                <ul>
                                  <li><a class="icon fa fa-facebook" href="#"></a></li>
                                  <li><a class="icon fa fa-twitter" href="#"></a></li>
                                  <li><a class="icon fa fa-google-plus" href="#"></a></li>
                                  <li><a class="icon fa fa-linkedin" href="#"></a></li>
                                  <li><a class="icon fa fa-pinterest" href="#"></a></li>
                                </ul>
                              </div>
                            </div>
                            <div class="element-groups-custom"><a class="post-meta-time" href="politics.php">
                                <time datetime="2016-06-06">2h ago</time></a><a class="post-meta-comment" href="post-default.php#comments">15 Comments</a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> --}}
              </div>
              <div class="cell-lg-4 offset-top-36">
                <div class="range">
                  <div class="cell-sm-8 cell-sm-preffix-2 cell-lg-12 cell-lg-preffix-0 cell-xs-push-1 cell-lg-push-1">
                    <div class="bg-gray-base context-dark section-top-15 section-bottom-30 inset-p-left-6 inset-p-right-6">
                      <h3 class="heading-italic text-light">Tìm kiếm</h3>
                      <form class="form-inline-flex reveal-xs-flex" action="#">
                        <div class="form-group offset-bottom-0">
                          <input class="form-control" type="text" name="search1" placeholder="I'm looking for....">
                        </div>
                        <button class="btn btn-warning offset-xs-left-10 offset-top-12 offset-xs-top-0" type="submit">Search</button>
                      </form>
                    </div>
                  </div>
                  <div class="cell-sm-8 cell-sm-preffix-2 cell-lg-12 cell-lg-preffix-0 cell-xs-push-7 cell-lg-push-2 text-center text-lg-left">
                    <div class="bg-gray-light section-top-15 section-bottom-30 inset-p-left-6 inset-p-right-6 offset-top-45 offset-xl-top-60">
                      <h3 class="heading-italic text-light">Theo rõi chúng tôi</h3>
                      <p>Đọc tin tức mới nhất của chúng tôi trên bất kỳ mạng xã hội nào!</p>
                                      <ul class="list-inline-0">
                                        <li><a class="icon icon-circle fa-facebook icon-gray-base" href="#"></a></li>
                                        <li><a class="icon icon-circle fa-twitter icon-gray-base" href="#"></a></li>
                                        <li><a class="icon icon-circle fa-google-plus icon-gray-base" href="#"></a></li>
                                        <li><a class="icon icon-circle fa-youtube icon-gray-base" href="#"></a></li>
                                        <li><a class="icon icon-circle fa-feed icon-gray-base" href="#"></a></li>
                                      </ul>
                      <hr class="divider divider-dashed">
                      <h3 class="heading-italic text-light">Nhận tin tức mới nhất được gửi hàng ngày!</h3>
                      <p>Chúng tôi sẽ gửi cho bạn tin tức mới nhất vào địa chỉ email của bạn mỗi ngày</p>
                      <form class="offset-top-20 rd-mailform-inline rd-mailform form-inline-flex reveal-xs-flex" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
                        <div class="form-wrap mfInput">
                          <input class="form-input" id="subscribe-form-email" type="text" name="email" data-constraints="@Email @Required">
                          <label class="form-label" for="subscribe-form-email">Your E-mail</label>
                        </div>
                        <button class="btn btn-warning">Nhận</button>
                      </form>
                    </div>
                  </div>
                  <div class="cell-xs-12 cell-xs-push-2 cell-lg-push-4 offset-top-45">
                    <div class="heading-divider">
                      <h3 class="heading-italic text-light">Bài đăng gần đây</h3>
                    </div>
                    <div class="range offset-top-45">
                      <div class="cell-sm-6 cell-lg-12">
                                        <div class="post post-variant-1">
                                          <div class="post-inner"><img class="img-responsive post-image" src="images/sidebar-07.jpg" width="536" height="411" alt="">
                                            <div class="post-caption">
                                              <ul>
                                                <li><a href="politics.php"><span class="label label-warning">News</span></a></li>
                                              </ul>
                                              <div>
                                                <div class="h4 text-normal font-accent-2"><a href="post-with-slider.php">Bill Maher & Macfarlene: ‘Serial Anti-Catholic Bigots’ - Catholic League</a></div>
                                                                <div class="post-meta post-meta-hidden-outer">
                                                                  <div class="post-meta-hidden">
                                                                    <div class="icon text-gray icon-lg material-icons-share">
                                                                      <ul>
                                                                        <li><a class="icon fa fa-facebook" href="#"></a></li>
                                                                        <li><a class="icon fa fa-twitter" href="#"></a></li>
                                                                        <li><a class="icon fa fa-google-plus" href="#"></a></li>
                                                                        <li><a class="icon fa fa-linkedin" href="#"></a></li>
                                                                        <li><a class="icon fa fa-pinterest" href="#"></a></li>
                                                                      </ul>
                                                                    </div>
                                                                  </div>
                                                                  <div class="element-groups-custom veil reveal-md-block"><a class="post-meta-author" href="categories-grid.php">Brian Williamson</a><a class="post-meta-time" href="categories-grid.php">
                                                                      <time datetime="2016-06-06">2h ago</time></a></div>
                                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                        <hr class="divider divider-dashed">
                                        <div class="post post-variant-1">
                                          <div class="post-inner"><img class="img-responsive post-image" src="images/sidebar-08.jpg" width="536" height="411" alt="">
                                            <div class="post-caption">
                                              <ul>
                                                <li><a href="politics.php"><span class="label label-warning">News</span></a></li>
                                              </ul>
                                              <div>
                                                <div class="h4 text-normal font-accent-2"><a href="post-with-audio.php">Spotify aims to raise $500M in debt</a></div>
                                                                <div class="post-meta post-meta-hidden-outer">
                                                                  <div class="post-meta-hidden">
                                                                    <div class="icon text-gray icon-lg material-icons-share">
                                                                      <ul>
                                                                        <li><a class="icon fa fa-facebook" href="#"></a></li>
                                                                        <li><a class="icon fa fa-twitter" href="#"></a></li>
                                                                        <li><a class="icon fa fa-google-plus" href="#"></a></li>
                                                                        <li><a class="icon fa fa-linkedin" href="#"></a></li>
                                                                        <li><a class="icon fa fa-pinterest" href="#"></a></li>
                                                                      </ul>
                                                                    </div>
                                                                  </div>
                                                                  <div class="element-groups-custom veil reveal-md-block"><a class="post-meta-author" href="categories-grid.php">Brian Williamson</a><a class="post-meta-time" href="categories-grid.php">
                                                                      <time datetime="2016-06-06">2h ago</time></a></div>
                                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                        <hr class="divider divider-dashed veil-sm reveal-lg-block">
                      </div>
                      <div class="cell-sm-6 cell-lg-12 offset-lg-top-30">
                                        <div class="post post-variant-1">
                                          <div class="post-inner"><img class="img-responsive post-image" src="images/sidebar-09.jpg" width="536" height="411" alt="">
                                            <div class="post-caption">
                                              <ul>
                                                <li><a href="politics.php"><span class="label label-warning">News</span></a></li>
                                              </ul>
                                              <div>
                                                <div class="h4 text-normal font-accent-2"><a href="post-with-quote.php">ICC Judges Start Investigations of Russian Aggressive War in Georgia in 2008</a></div>
                                                                <div class="post-meta post-meta-hidden-outer">
                                                                  <div class="post-meta-hidden">
                                                                    <div class="icon text-gray icon-lg material-icons-share">
                                                                      <ul>
                                                                        <li><a class="icon fa fa-facebook" href="#"></a></li>
                                                                        <li><a class="icon fa fa-twitter" href="#"></a></li>
                                                                        <li><a class="icon fa fa-google-plus" href="#"></a></li>
                                                                        <li><a class="icon fa fa-linkedin" href="#"></a></li>
                                                                        <li><a class="icon fa fa-pinterest" href="#"></a></li>
                                                                      </ul>
                                                                    </div>
                                                                  </div>
                                                                  <div class="element-groups-custom veil reveal-md-block"><a class="post-meta-author" href="categories-grid.php">Brian Williamson</a><a class="post-meta-time" href="categories-grid.php">
                                                                      <time datetime="2016-06-06">2h ago</time></a></div>
                                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="cell-xs-12 cell-xs-push-5 cell-lg-push-5 offset-top-36">
                    {{-- <div class="heading-divider">
                      <h3 class="heading-italic text-light">Những ý kiến ​​gần đây</h3>
                    </div>
                    <div class="range offset-top-0">
                      <div class="cell-sm-8 cell-sm-preffix-2 cell-lg-12 cell-lg-preffix-0"><span class="small font-accent text-italic"><a href="categories-grid.php">Brian Williamson</a> on</span>
                        <h5><a class="text-gray-base" href="post-default.php">Bradley Cooper’s "Twin" Causes Madness At Sundance Film Festival Opening</a></h5>
                        <hr class="divider divider-dashed"><span class="small font-accent text-italic"><a href="categories-grid.php">Brian Williamson</a> on</span>
                        <h5><a class="text-gray-base" href="post-with-audio.php">3 Ways To Conquer Your Winter Laziness</a></h5>
                        <hr class="divider divider-dashed"><span class="small font-accent text-italic"><a href="categories-grid.php">Brian Williamson</a> on</span>
                        <h5><a class="text-gray-base" href="post-with-video.php">Greeks were warned - stop refugees wave, or we will kick you out</a></h5>
                      </div>
                      <div class="cell-sm-8 cell-sm-preffix-2 cell-lg-12 cell-lg-preffix-0 offset-top-36">
                        {{-- <div class="heading-divider">
                          <h3 class="heading-italic text-light">Thông tin tác giả</h3>
                        </div><a href="about-us.php"><img src="images/sidebar-11.jpg" height="536" width="391" alt=""></a> --}}
                      </div>
                    {{-- </div> --}}
                  </div>
                  <div class="cell-xs-12 cell-xs-push-5 cell-lg-push-6 offset-top-36">
                    <div class="range text-sm-left">
                      <div class="cell-sm-6 cell-lg-12">
                        <div class="heading-divider">
                          <h3 class="heading-italic text-light">Bộ sưu tập</h3>
                        </div>
                        <div class="instafeed sidebar-gallery" data-lightgallery="group" data-lg-thumbnail="false">
                          <div class="range range-ten">
                            <div class="cell-xs-5 cell-lg-2"><a class="thumbnail-variant-1" href="images/index-gallery-01.jpg" data-lightgallery="item"><img src="images/index-gallery-01.jpg" alt="" width="100" height="100"></a></div>
                            <div class="cell-xs-5 cell-lg-2"><a class="thumbnail-variant-1" href="images/index-gallery-02.jpeg" data-lightgallery="item"><img src="images/index-gallery-02.jpeg" alt="" width="100" height="100"></a></div>
                            <div class="cell-xs-5 cell-lg-2"><a class="thumbnail-variant-1" href="images/index-gallery-03.jpg" data-lightgallery="item"><img src="images/index-gallery-03.jpg" alt="" width="100" height="100"></a></div>
                            <div class="cell-xs-5 cell-lg-2"><a class="thumbnail-variant-1" href="images/index-gallery-04.jpeg" data-lightgallery="item"><img src="images/index-gallery-04.jpeg" alt="" width="100" height="100"></a></div>
                            <div class="cell-xs-5 cell-lg-2"><a class="thumbnail-variant-1" href="images/index-gallery-05.jpeg" data-lightgallery="item"><img src="images/index-gallery-05.jpeg" alt="" width="100" height="100"></a></div>
                            <div class="cell-xs-5 cell-lg-2"><a class="thumbnail-variant-1" href="images/index-gallery-06.jpeg" data-lightgallery="item"><img src="images/index-gallery-06.jpeg" alt="" width="100" height="100"></a></div>
                            <div class="cell-xs-5 cell-lg-2"><a class="thumbnail-variant-1" href="images/index-gallery-07.jpeg" data-lightgallery="item"><img src="images/index-gallery-07.jpeg" alt="" width="100" height="100"></a></div>
                            <div class="cell-xs-5 cell-lg-2"><a class="thumbnail-variant-1" href="images/index-gallery-08.jpeg" data-lightgallery="item"><img src="images/index-gallery-08.jpeg" alt="" width="100" height="100"></a></div>
                            <div class="cell-xs-5 cell-lg-2"><a class="thumbnail-variant-1" href="images/index-gallery-09.jpeg" data-lightgallery="item"><img src="images/index-gallery-09.jpeg" alt="" width="100" height="100"></a></div>
                            <div class="cell-xs-5 cell-lg-2"><a class="thumbnail-variant-1" href="images/index-gallery-10.jpeg" data-lightgallery="item"><img src="images/index-gallery-10.jpeg" alt="" width="100" height="100"></a></div>
                          </div>
                        </div>
                      </div>
                      <div class="cell-sm-6 cell-lg-12 offset-top-36 offset-sm-top-0 offset-lg-top-36">
                        <div class="heading-divider">
                          <h3 class="heading-italic text-light">Like Us On Facebook</h3>
                        </div>
                        <div id="fb-root">
                          <div class="fb-root fb-widget">
                            <div class="fb-page-responsive">
                              <div class="fb-page" data-href="https://www.facebook.com/TemplateMonster" data-tabs="timeline" data-height="350" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                                <div class="fb-xfbml-parse-ignore">
                                  <blockquote cite="https://www.facebook.com/TemplateMonster"><a href="https://www.facebook.com/TemplateMonster">TemplateMonster</a></blockquote>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        {{-- <div class="heading-divider">
                          <h3 class="heading-italic text-light">Lịch</h3>
                        </div>
                        <div class="rd-calendar">
                          <div class="rdc-table">
                            <div class="rdc-panel text-center bg-gray-base context-dark">
                              <div class="h5">
                                <div class="rdc-month reveal-inline-block"></div><span>  </span>
                                <div class="rdc-fullyear reveal-inline-block"></div>
                              </div>
                            </div>
                          </div>
                          <div class="reveal-flex range-xs-justify"><a class="rdc-prev"></a><a class="rdc-next"></a></div>
                        </div> --}}
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>
      <footer class="page-footer">
        <div class="shell offset-top-60">
          <hr class="divider divider-lg offset-0">
          <div class="range text-center text-lg-left section offset-top-0">
            <div class="cell-sm-preffix-2 cell-sm-8 cell-lg-4 cell-xl-3 cell-lg-preffix-0 cell-lg-push-4">
              <h3 class="text-regular text-italic font-accent">Nhận tin tức mới nhất</h3>
              <div>
                <p>Chúng tôi sẽ gửi cho bạn tin tức mới nhất mỗi ngày</p>
              </div>
              <form class="offset-top-25 rd-mailform-inline rd-mailform form-inline-flex reveal-xs-flex" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
                <div class="form-wrap mfInput">
                  <input id="subscribe-form-email-2" type="text" name="email" data-constraints="@Email @Required">
                  <label class="form-label" for="subscribe-form-email-2">Your E-mail</label>
                </div>
                <button class="btn btn-warning">Subscribe</button>
              </form>
              <div class="rd-mailform-validate"></div>
            </div>
            <div class="cell-sm-preffix-1 cell-sm-10 cell-lg-4 cell-xl-3 cell-lg-preffix-0 offset-top-45 offset-lg-top-0 cell-lg-push-3">
              <h6 class="text-bold">Tags</h6>
              <div class="offset-top-20">
                <ul class="element-groups-sm-custom small text-italic">
                  <li><a class="btn btn-default btn-sm btn-rect text-regular font-accent" href="politics.php">News</a></li>
                  <li><a class="btn btn-default btn-sm btn-rect text-regular font-accent" href="world.php">World</a></li>
                  <li><a class="btn btn-default btn-sm btn-rect text-regular font-accent" href="tech.php">Tech</a></li>
                  <li><a class="btn btn-default btn-sm btn-rect text-regular font-accent" href="business.php">Business</a></li>
                  <li><a class="btn btn-default btn-sm btn-rect text-regular font-accent" href="politics.php">Army</a></li>
                  <li><a class="btn btn-default btn-sm btn-rect text-regular font-accent" href="politics.php">Travel</a></li>
                  <li><a class="btn btn-default btn-sm btn-rect text-regular font-accent" href="sports.php">Sport</a></li>
                  <li><a class="btn btn-default btn-sm btn-rect text-regular font-accent" href="culture.php">Culture</a></li>
                  <li><a class="btn btn-default btn-sm btn-rect text-regular font-accent" href="politics.php">Commodities</a></li>
                  <li><a class="btn btn-default btn-sm btn-rect text-regular font-accent" href="politics.php">NBA</a></li>
                  <li><a class="btn btn-default btn-sm btn-rect text-regular font-accent" href="politics.php">War</a></li>
                  <li><a class="btn btn-default btn-sm btn-rect text-regular font-accent" href="politics.php">Gadgets</a></li>
                  <li><a class="btn btn-default btn-sm btn-rect text-regular font-accent" href="politics.php">Health</a></li>
                  <li><a class="btn btn-default btn-sm btn-rect text-regular font-accent" href="politics.php">Social</a></li>
                  <li><a class="btn btn-default btn-sm btn-rect text-regular font-accent" href="politics.php">Money</a></li>
                </ul>
              </div>
            </div>
            <div class="cell-xs-6 cell-xl-3 cell-lg-2 offset-top-45 offset-lg-top-0">
              <h6>Thể loại</h6>
              <ul class="small text-center text-lg-left list-unstyled list text-italic font-accent">
                <li><a href="politics.php">News</a></li>
                <li><a href="politics.php">Politics</a></li>
                <li><a href="business.php">Business</a></li>
                <li><a href="sports.php">Sport</a></li>
                <li><a href="culture.php">Culture</a></li>
                <li><a href="tech.php">Tech</a></li>
                <li><a href="politics.php">Travel</a></li>
                <li><a href="politics.php">Videos</a></li>
              </ul>
            </div>
            <div class="cell-xs-6 cell-lg-2 cell-xl-3 offset-top-45 offset-lg-top-0">
              <h6>Thông tin</h6>
              <ul class="small text-center text-lg-left list-unstyled list text-italic font-accent">
                <li><a href="about-us.php">About us</a></li>
                <li><a href="contacts.php">Contact us</a></li>
                <li><a href="typography.php">Typography</a></li>
              </ul>
            </div>
          </div>
          <hr class="divider divider-offset-top-52">
          <div class="range text-left offset-top-36">
            <div class="cell-md-5 cell-md-push-1 text-center text-md-right">
                    <ul class="list-inline-0">
                      <li><a class="icon icon-circle fa-facebook icon-default" href="#"></a></li>
                      <li><a class="icon icon-circle fa-twitter icon-default" href="#"></a></li>
                      <li><a class="icon icon-circle fa-google-plus icon-default" href="#"></a></li>
                      <li><a class="icon icon-circle fa-youtube icon-default" href="#"></a></li>
                      <li><a class="icon icon-circle fa-feed icon-default" href="#"></a></li>
                    </ul>
            </div>
            <div class="cell-md-7 text-center text-md-left offset-top-25 offset-md-top-0">
              <div class="brand reveal-md-inline-block"><a class="brand-name" href="./"><h1>WebSite</h1></a></div>
              <p class="reveal-md-inline-block offset-top-20 offset-top-md-0 small">© 2019 Tin tức, Inc. <a href="privacy.php">Bản quyền</a>
              </p>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    
    <!--LIVEDEMO_00 -->

    <script type="text/javascript">
     var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-7078796-5']);
      _gaq.push(['_trackPageview']);
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();</script>
    
  </body><!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.php?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager -->
</html>