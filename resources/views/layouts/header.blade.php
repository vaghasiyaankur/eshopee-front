<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Home</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="{{ asset('assets/css/includes.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/base.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <style>
         :root {
            --font-body-family: Roboto, sans-serif;
            --font-body-style: normal;
            --font-body-weight: 400;
            --font-weight-body--bold: 400;
         }
         *,
         *::before,
         *::after {
            box-sizing: inherit;
         }
         html {
            box-sizing: border-box;
            font-size: 62.5%;
            height: 100%;
         }
         body {
            display: grid;
            grid-template-rows: auto auto 1fr auto;
            grid-template-columns: 100%;
            min-height: 100%;
            margin: 0;
            font-size: 14px;
            letter-spacing: 0.06rem;
            line-height: 1.8;
            font-family: var(--font-body-family);
            font-style: var(--font-body-style);
            font-weight: var(--font-body-weight);
         }
         :root {
            --brand-secondary: #ce1d76;
            --brand-modify-secondary: rgba(206, 29, 118, 0.3);
            --button-bg-color: #fed700;
            --button-text-color: #232323;
            --button-bg-hover-color: #ce1d76;
            --button-text-hover-color: #ffffff;
            --button-text-hover-modify-color: rgba(255, 255, 255, 0.4);
            --product-btn-bg-color: #ffffff;
            --product-icon-color: #222222;
            --product-btn-bg-hover-color:  #ce1d76;
            --product-icon-hover-color: #ffffff;
            --navbar-background-color: #f6f7f8;
            --navbar-text-modify-color: rgba(102, 102, 102, 0.1);
            --navbar-text-color: #666666;
            --menu-bg-color:#232323;
            --menu-text-modify-color:rgba(255, 255, 255, 0.1);
            --menu-text-color:#FFFFFF;
            --menu-text-hover-color:#ce1d76;
            --sale-bg-color:#7fbc1e;
            --sale-text-color:#ffffff;
            --soldout-bg-color:#c92c2c;
            --soldout-text-color:#ffffff;
            --footer-bg-color: #f5f7f8;
            --footer-heading-color: #232323;
            --footer-text-color: #666666;
            --footer-text-hover-color: #ce1d76;
            --footer-bottom-bg-color: #232323;
            --footer-bottom-text-color: #ffffff;
            --password-color: #232323;
            --password-textcolor: #FFFFFF;
            --font-body-family: Roboto;
         }
      </style>
   </head>
   <body class=" @if (Request::path() == '/') template-index @endif  @if (Request::path() == 'collections') template-list-collections @endif" >
 <div id="header">
    <header class="site-header">
       <div class="nav-header">
          <div class="page-width">
             <div class="row">
                <div class="header-block hidden-lg-down col-md-6 col-sm-12 col-xs-12">
                   <div class="text"> Order Before 17:30, Shipped Today</div>
                </div>
                <div class="desktop-user-info col-lg-6 col-sm-12 col-sm-12 col-xs-12">
                   <div class="wishlist">
                      <a class="nav-icon" href="/pages/wishlist">Wishlist</a>
                   </div>
                   <div class="user_info">
                      <div class="userinfo-title clearfix" data-toggle="popover" aria-expanded="false" data-href="#user-notification">
                         Account
                      </div>
                      <div id="user-notification" class="toggle-dropdown">
                         <!-- <link href="//cdn.shopify.com/s/files/1/0250/3793/0580/t/3/assets/page-account.css?v=160686326329420194631645791721" rel="stylesheet" type="text/css" media="all"> -->
                         <div class="customer login ishi-panel-container">
                            <div id="ishi-login-panel" class="ishi-panel-data ishi-panel-data-default active">
                               <h2>
                                  Login
                               </h2>
                               <form method="post" action="/account/login" id="customer_login">
                                  <input type="hidden" name="form_type" value="customer_login"><input type="hidden" name="utf8" value="✓">
                                  <div class="field">
                                     <input type="email" name="customer[email]" id="CustomerEmail" autocomplete="email" autocorrect="off" autocapitalize="off" placeholder="Email">
                                     <label for="CustomerEmail">
                                     Email
                                     </label>
                                  </div>
                                  <div class="field">
                                     <input type="password" value="" name="customer[password]" id="CustomerPassword" autocomplete="current-password" placeholder="Password">
                                     <label for="CustomerPassword">
                                     Password
                                     </label>
                                  </div>
                                  <p data-action="ishi-panel" aria-controls="#ishi-recover-panel" class="forgot">Forgot your password?</p>
                                  <button class="btn">
                                  Sign in
                                  </button>
                                  <p data-action="ishi-panel" aria-controls="#ishi-register-panel"> Create account</p>
                               </form>
                            </div>
                            <div id="ishi-recover-panel" class="ishi-panel-data ishi-panel-data-slide">
                               <h2>
                                  Reset your password
                               </h2>
                               <p>
                                  We will send you an email to reset your password
                               </p>
                               <form method="post" action="/account/recover" accept-charset="UTF-8">
                                  <input type="hidden" name="form_type" value="recover_customer_password"><input type="hidden" name="utf8" value="✓">
                                  <div class="field">
                                     <input type="email" value="" name="email" id="RecoverEmail" autocorrect="off" autocapitalize="off" autocomplete="email" placeholder="Email">
                                     <label for="RecoverEmail">
                                     Email
                                     </label>
                                  </div>
                                  <button>
                                  Submit
                                  </button>
                                  <p data-action="ishi-panel" aria-controls="#ishi-login-panel">Cancel</p>
                               </form>
                            </div>
                            <div id="ishi-register-panel" class="ishi-panel-data ishi-panel-data-slide">
                               <h2>
                                  Create account
                               </h2>
                               <form method="post" action="/account" id="create_customer" accept-charset="UTF-8" novalidate="novalidate">
                                  <input type="hidden" name="form_type" value="create_customer"><input type="hidden" name="utf8" value="✓">
                                  <div class="field">
                                     <input type="text" name="customer[first_name]" id="RegisterForm-FirstName" autocomplete="given-name" placeholder="First name">
                                     <label for="RegisterForm-FirstName">
                                     First name
                                     </label>
                                  </div>
                                  <div class="field">
                                     <input type="text" name="customer[last_name]" id="RegisterForm-LastName" autocomplete="family-name" placeholder="Last name">
                                     <label for="RegisterForm-LastName">
                                     Last name
                                     </label>
                                  </div>
                                  <div class="field">
                                     <input type="email" name="customer[email]" id="RegisterForm-email" spellcheck="false" autocapitalize="off" autocomplete="email" aria-required="true" placeholder="Email">
                                     <label for="RegisterForm-email">
                                     Email
                                     </label>
                                  </div>
                                  <div class="field">
                                     <input type="password" name="customer[password]" id="RegisterForm-password" aria-required="true" placeholder="Password">
                                     <label for="RegisterForm-password">
                                     Password
                                     </label>
                                  </div>
                                  <button class="btn">
                                  Create
                                  </button>
                                  <p data-action="ishi-panel" aria-controls="#ishi-login-panel" class="new-account">Already Have an Account ?</p>
                               </form>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <div class="header-top site-header-inner hidden-lg-down">
          <div class="page-width">
             <div class="row">
                <div id="_desktop_logo" class="header-logo-section col-xl-4 col-lg-3 col-md-3 col-sm-6 col-xs-6">
                   <h1 class="h2 header__logo" itemscope="" itemtype="http://schema.org/Organization">
                      <div class="hidden-lg-down">
                         <a href="/" itemprop="url" class="header__logo-image ">
                         <img class="hidden-lg-down" src="{{ asset('assets/images/logo.png') }}" alt="Techayo Sectioned Shopify Theme" itemprop="logo" style="max-width: 100%;width: 175px;">
                         </a>
                      </div>
                      <div class="hidden-lg-up">
                         <a href="/" itemprop="url" class="header__logo-image">
                         <img class="hidden-lg-up" src="{{ asset('assets/images/logo.png') }}" alt="Techayo Sectioned Shopify Theme" itemprop="logo" style="max-width: 100%;">
                         </a>
                      </div>
                   </h1>
                </div>
                <div id="_desktop_search" class="site-header__search hidden-lg-down  col-lg-4 col-md-5">
                   <div class="search-title clearfix" data-href="#search-container-full" data-toggle="popover" aria-expanded="false">
                      <span class="search-toggle hidden-lg-down">
                         <svg aria-hidden="true" focusable="false" role="presentation" class="icon" viewBox="0 0 1200 1200">
                            <svg x="20%" y="22%">
                               <path d="M606.209,578.714L448.198,423.228C489.576,378.272,515,318.817,515,253.393C514.98,113.439,399.704,0,257.493,0
                                  C115.282,0,0.006,113.439,0.006,253.393s115.276,253.393,257.487,253.393c61.445,0,117.801-21.253,162.068-56.586
                                  l158.624,156.099c7.729,7.614,20.277,7.614,28.006,0C613.938,598.686,613.938,586.328,606.209,578.714z M257.493,467.8
                                  c-120.326,0-217.869-95.993-217.869-214.407S137.167,38.986,257.493,38.986c120.327,0,217.869,95.993,217.869,214.407
                                  S377.82,467.8,257.493,467.8z"></path>
                            </svg>
                         </svg>
                      </span>
                      <span class="search-toggle hidden-lg-up">
                         <svg aria-hidden="true" focusable="false" role="presentation" class="icon" viewBox="0 0 1200 1200">
                            <svg x="24%" y="24%">
                               <path fill-rule="evenodd" clip-rule="evenodd" d="M606.209,578.714L448.198,423.228C489.576,378.272,515,318.817,515,253.393C514.98,113.439,399.704,0,257.493,0
                                  C115.282,0,0.006,113.439,0.006,253.393s115.276,253.393,257.487,253.393c61.445,0,117.801-21.253,162.068-56.586
                                  l158.624,156.099c7.729,7.614,20.277,7.614,28.006,0C613.938,598.686,613.938,586.328,606.209,578.714z M257.493,467.8
                                  c-120.326,0-217.869-95.993-217.869-214.407S137.167,38.986,257.493,38.986c120.327,0,217.869,95.993,217.869,214.407
                                  S377.82,467.8,257.493,467.8z"></path>
                            </svg>
                         </svg>
                      </span>
                   </div>
                   <div id="search-container-full" class="search-info toggle-dropdown">
                      <form action="/search" method="get" class="search-header search search--focus" role="search" style="position: relative;">
                         <input type="hidden" name="type" value="product">
                         <input class="search-header__input search__input" name="q" placeholder="Search" aria-label="Search" autocomplete="off">
                         <button class="search-header__submit search__submit btn--link" type="submit">
                         <i class="fa fa-search" aria-hidden="true"></i>
                         <span class="icon__fallback-text hidden">Search</span>
                         </button>
                         <ul class="search-results" style="position: absolute; left: 0px; top: 43px; display: none;"></ul>
                      </form>
                   </div>
                </div>
                <div class="hidden-lg-down header-right col-lg-4 col-md-3 col-sm-6 col-xs-6">
                   <div id="_desktop_cart" class="cart_info">
                      <div class="cart-display" id="cart-icon-bubble" data-href="#cart-notification" data-toggle="popover" aria-expanded="false">
                         <span class="cart-img">
                            <span class="hidden-lg-down cart-logo">
                               <svg aria-hidden="true" focusable="false" role="presentation" class="icon" viewBox="0 0 600 600">
                                  <svg x="5%" y="10%">
                                     <path d="m450.026 192.65h-31l-87.436-126.828a7 7 0 1 0 -11.526 7.945l81.955 118.883h-286.083l81.954-118.883a7 7 0 1 0 -11.526-7.945l-87.432 126.828h-36.958a29.492 29.492 0 1 0 0 58.983h5.226l17.591 173.3a26.924 26.924 0 0 0 26.862 24.273h288.691a26.922 26.922 0 0 0 26.861-24.273l17.592-173.3h5.229a29.492 29.492 0 1 0 0-58.983zm-36.749 230.868a12.962 12.962 0 0 1 -12.933 11.687h-288.688a12.962 12.962 0 0 1 -12.933-11.687l-17.448-171.885h349.45zm36.749-185.885h-388.052a15.492 15.492 0 1 1 0-30.983h388.052a15.492 15.492 0 1 1 0 30.983z"></path>
                                     <path d="m256 407.526a7 7 0 0 0 7-7v-115.296a7 7 0 0 0 -14 0v115.3a7 7 0 0 0 7 6.996z"></path>
                                     <path d="m335.57 407.526a7 7 0 0 0 7-7v-115.296a7 7 0 0 0 -14 0v115.3a7 7 0 0 0 7 6.996z"></path>
                                     <path d="m176.43 407.526a7 7 0 0 0 7-7v-115.296a7 7 0 0 0 -14 0v115.3a7 7 0 0 0 7 6.996z"></path>
                                  </svg>
                               </svg>
                            </span>
                            <span class="hidden-lg-up cart-logo">
                               <svg aria-hidden="true" focusable="false" role="presentation" class="icon" viewBox="0 0 550 550">
                                  <svg x="20%" y="20%">
                                     <path d="M306.4,313.2l-24-223.6c-0.4-3.6-3.6-6.4-7.2-6.4h-44.4V69.6c0-38.4-31.2-69.6-69.6-69.6c-38.4,0-69.6,31.2-69.6,69.6
                                        v13.6H46c-3.6,0-6.8,2.8-7.2,6.4l-24,223.6c-0.4,2,0.4,4,1.6,5.6c1.2,1.6,3.2,2.4,5.2,2.4h278c2,0,4-0.8,5.2-2.4
                                        C306,317.2,306.8,315.2,306.4,313.2z M223.6,123.6c3.6,0,6.4,2.8,6.4,6.4c0,3.6-2.8,6.4-6.4,6.4c-3.6,0-6.4-2.8-6.4-6.4
                                        C217.2,126.4,220,123.6,223.6,123.6z M106,69.6c0-30.4,24.8-55.2,55.2-55.2c30.4,0,55.2,24.8,55.2,55.2v13.6H106V69.6z
                                        M98.8,123.6c3.6,0,6.4,2.8,6.4,6.4c0,3.6-2.8,6.4-6.4,6.4c-3.6,0-6.4-2.8-6.4-6.4C92.4,126.4,95.2,123.6,98.8,123.6z M30,306.4
                                        L52.4,97.2h39.2v13.2c-8,2.8-13.6,10.4-13.6,19.2c0,11.2,9.2,20.4,20.4,20.4c11.2,0,20.4-9.2,20.4-20.4c0-8.8-5.6-16.4-13.6-19.2
                                        V97.2h110.4v13.2c-8,2.8-13.6,10.4-13.6,19.2c0,11.2,9.2,20.4,20.4,20.4c11.2,0,20.4-9.2,20.4-20.4c0-8.8-5.6-16.4-13.6-19.2V97.2
                                        H270l22.4,209.2H30z"></path>
                                  </svg>
                               </svg>
                            </span>
                         </span>
                         <div class="cart-content hidden-lg-down">
                            <span class="cart-title">Shopping Cart</span>
                            <span class="item-count "><span class="total_price cart-item">
                            $0.00
                            </span></span>
                         </div>
                      </div>
                      <cart-notification>
                         <div class="cart-notification-wrapper">
                            <div id="cart-notification" class="cart-notification focus-inset toggle-dropdown">
                               <div class="slimScrollDiv cart-empty-notification">
                                  <div id="cart-notification-default">
                                     <div class="cart-notification__header cart-empty">
                                        <h2 class="cart-notification__heading caption-large">Your Cart is currently empty!</h2>
                                     </div>
                                  </div>
                               </div>
                               <div id="cart-notification-product"></div>
                               <div id="cart-notification-button"></div>
                            </div>
                         </div>
                      </cart-notification>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <div id="mobile_top_menu_wrapper" class="hidden-lg-up" style="display:none;">
          <div id="top_menu_closer" class="hidden-lg-up">
             <svg aria-hidden="true" focusable="false" role="presentation" class="icon" viewBox="0 0 16 17">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M.865 15.978a.5.5 0 00.707.707l7.433-7.431 7.579 7.282a.501.501 0 00.846-.37.5.5 0 00-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 10-.707-.708L8.991 7.853 1.413.573a.5.5 0 10-.693.72l7.563 7.268-7.418 7.417z" fill="currentColor"></path>
             </svg>
          </div>
          <div id="_mobile_top_menu" class="js-top-menu mobile"></div>
       </div>
       <div class="mobile-menu-overlay hidden-lg-up"></div>
       <div class="mobile-navmenu hidden-lg-up">
          <div class="mobile-width">
             <div class="page-width">
                <div class="row">
                   <div class="mobile-width-left">
                      <div id="menu-icon" class="menu-icon hidden-lg-up">
                         <svg aria-hidden="true" focusable="false" role="presentation" class="icon" viewBox="0 0 750 750">
                            <svg x="25%" y="27%">
                               <g>
                                  <rect y="46.06" width="344.339" height="29.52"></rect>
                               </g>
                               <g>
                                  <rect y="156.506" width="344.339" height="29.52"></rect>
                               </g>
                               <g>
                                  <rect y="268.748" width="344.339" height="29.531"></rect>
                               </g>
                            </svg>
                         </svg>
                      </div>
                      <div id="_mobile_search"></div>
                   </div>
                   <div id="_mobile_logo" class="header-logo-section"></div>
                   <div class="mobile-width-right">
                      <div id="_mobile_link_menu"></div>
                      <div id="_mobile_cart" class="cart_info"></div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </header>
 </div>
 <div class="hidden-lg-down">
    <div class="navfullwidth">
       <div class="page-width">
          <div class="row">
             <div id="shopify-section-Ishi_megamenu" class="shopify-section">
                <div data-section-id="Ishi_megamenu" data-section-type="megamenu-header">
                   <div id="_desktop_top_menu" class="menu js-top-menu hidden-sm-down dropdown js-dropdown" role="navigation">
                      <div class="desktop-menu-block expand-more hidden-sm-down" data-toggle="dropdown"  role="button">
                        @php($categories=\App\Model\Category::with(['childes.childes'])->where('position', 0)->paginate(11))
                         <h2 class="home-title hidden-lg-down">
                            CATEGORIES
                         </h2>
                         <div class="wrapper">
                            <div class="line-menu half start"></div>
                            <div class="line-menu"></div>
                            <div class="line-menu half end"></div>
                         </div>
                      </div>
                      @if(request()->is('/'))
                        <ul class="top-menu dropdown-menu" id="top-menu">
                            @foreach($categories as $key=>$category)
                                @if($key<11)
                                    <li class="category">
                                        <span class="float-xs-right hidden-lg-up">
                                        <span data-href="#_n_child-one1" data-toggle="collapse" class="ishi-collapse in navbar-toggler ishi-collapsed rotate" aria-expanded="false">
                                            <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-caret" viewBox="0 0 10 6">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z" fill="currentColor"/>
                                            </svg>
                                        </span>
                                        </span>
                                        <a class="dropdown-item flex-between"
                                            <?php if ($category->childes->count() > 0) echo "data-toggle='dropdown'"?> href="javascript:"
                                                            onclick="location.href='{{route('products',['id'=> $category['id'],'data_from'=>'category','page'=>1])}}'">
                                            <div>
                                                <img
                                                    src="{{asset("storage/app/public/category/$category->icon")}}"
                                                    onerror="this.src='{{asset('assets/front-end/img/image-place-holder.png')}}'"
                                                    style="width: 18px; height: 18px; ">
                                                    <h3 class="title">{{Str::limit($category->name, 30)}}</h3>
                                                    @if ($category->childes->count() > 0)
                                                       <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-caret" viewBox="0 0 10 6">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z" fill="currentColor"/>
                                                    </svg>
                                                @endif
                                            </div>
                                        {{-- <span class="new"> NEW</span> --}}
                                        </a>
                                        @if($category->childes->count()>0)
                                            <div class="popover sub-menu js-sub-menu ishi-collapse desktop-collapse" id="_n_child-one1">
                                                    <ul id="top-menu-child" class="top-menu mainmenu-dropdown panel-group">
                                                        @foreach($category['childes'] as $subCategory)
                                                            <li class="sub-category panel">
                                                                <span class="float-xs-right hidden-lg-up">
                                                                    <span data-href="#_n_grand-child-one1" data-toggle="collapse" class="ishi-collapse in navbar-toggler ishi-collapsed rotate" aria-expanded="false" data-parent="#top-menu-child">
                                                                    <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-caret" viewBox="0 0 10 6">
                                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z" fill="currentColor"/>
                                                                    </svg>
                                                                    </span>
                                                                </span>
                                                                <a class="dropdown-item dropdown-submenu" <?php if ($subCategory->childes->count() > 0) echo "data-toggle='dropdown'"?> href="javascript:"
                                                                    onclick="location.href='{{route('products',['id'=> $subCategory['id'],'data_from'=>'category','page'=>1])}}'">
                                                                    <h3 class="inner-title">{{$subCategory['name']}}</h3>
                                                                </a>
                                                                <div class="top-menu ishi-collapse desktop-collapse" id="_n_grand-child-one1">
                                                                @if($subCategory->childes->count()>0)
                                                                    <ul class="top-menu">
                                                                        @foreach($subCategory['childes'] as $subSubCategory)
                                                                            <li class="category">
                                                                                <a href="{{route('products',['id'=> $subSubCategory['id'],'data_from'=>'category','page'=>1])}}" class="dropdown-item">{{$subSubCategory['name']}}</a>
                                                                            </li>
                                                                        @endforeach
                                                                    </ul>
                                                                {{-- @else
                                                                    <a class="dropdown-item dropdown-submenu" <?php if ($subCategory->childes->count() > 0) echo "data-toggle='dropdown'"?> href="javascript:"
                                                                    onclick="location.href='{{route('products',['id'=> $subCategory['id'],'data_from'=>'category','page'=>1])}}'">
                                                                    <h3 class="inner-title">{{$subCategory['name']}}</h3>
                                                                </a> --}}
                                                                @endif
                                                            </li>
                                                            {{-- <li class="sub-category panel">
                                                                <span class="float-xs-right hidden-lg-up">
                                                                    <span data-href="#_n_grand-child-two1" data-toggle="collapse" class="ishi-collapse in navbar-toggler ishi-collapsed rotate" aria-expanded="false" data-parent="#top-menu-child">
                                                                    <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-caret" viewBox="0 0 10 6">
                                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z" fill="currentColor"/>
                                                                    </svg>
                                                                    </span>
                                                                </span>
                                                                <a href="collections/speaker.html" class="dropdown-item dropdown-submenu">
                                                                    <h3 class="inner-title">Home Entertainment</h3>
                                                                </a>
                                                                <div class="top-menu ishi-collapse desktop-collapse" id="_n_grand-child-two1">
                                                                    <ul class="top-menu">
                                                                    <li class="category">
                                                                        <a href="collections/speaker.html" class="dropdown-item">Bluetooth Speakers</a>
                                                                    </li>
                                                                    <li class="category">
                                                                        <a href="collections/mobile.html" class="dropdown-item">Wearable Devices</a>
                                                                    </li>
                                                                    </ul>
                                                                </div>
                                                            </li> --}}
                                                        @endforeach
                                                    </ul>
                                            </div>
                                        @endif
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                      @endif
                   </div>
                </div>
             </div>
             <div id="shopify-section-Ishi_headerlink" class="shopify-section">
                <div data-section-id="Ishi_headerlink" data-section-type="headerlink-section" class="headerlink-section hidden-lg-down">
                   <div id="_desktop_link_menu">
                      <div id="ishiheaderlinks_block" class="header-block">
                         <div id="header_ishiheaderlinks">
                            <ul class="bullet large hidden-xl-down">
                               <li>
                                  <a href="{{ route('aboutus') }}" title="About us">
                                  About Us
                                  </a>
                               </li>
                               <li>
                                  <a href="{{ route('collection_all') }}" title="Collection">
                                  Collection
                                  </a>
                               </li>
                               <li>
                                  <a href="{{ route('blogs') }}" title="Blog">
                                  Blogs
                                  </a>
                               </li>
                               <li>
                                  <a href="{{ route('contact') }}" title="Contact">
                                  Contact Us
                                  </a>
                               </li>
                               <li>
                                  <a class="viewmore" href="javascript:void(0)" title="Product"> Seller Zone
                                  </a>
                                  <div class="headerlink-dropdown">
                                     <ul>
                                        <li>
                                           <a href="collections/electronics.html" title="Product">Become a Seller</a>
                                        </li>
                                        <li>
                                           <a href="collections/computer.html" title="Category">
                                           Seller Login
                                           </a>
                                     </ul>
                                  </div>
                               </li>
                            </ul>
                            <div class="header-link hidden-xl-up" data-href="#small-container" data-toggle="popover" aria-expanded="false">
                               <span class="link-icon expand-more">
                                  <svg aria-hidden="true" focusable="false" role="presentation" class="icon" viewBox="0 0 699 699">
                                     <svg x="22%" y="25%">
                                        <path d="M12.03,120.303h360.909c6.641,0,12.03-5.39,12.03-12.03c0-6.641-5.39-12.03-12.03-12.03H12.03
                                           c-6.641,0-12.03,5.39-12.03,12.03C0,114.913,5.39,120.303,12.03,120.303z"/>
                                        <path d="M372.939,180.455H12.03c-6.641,0-12.03,5.39-12.03,12.03s5.39,12.03,12.03,12.03h360.909c6.641,0,12.03-5.39,12.03-12.03
                                           S379.58,180.455,372.939,180.455z"/>
                                        <path d="M372.939,264.667H132.333c-6.641,0-12.03,5.39-12.03,12.03c0,6.641,5.39,12.03,12.03,12.03h240.606
                                           c6.641,0,12.03-5.39,12.03-12.03C384.97,270.056,379.58,264.667,372.939,264.667z"/>
                                     </svg>
                                  </svg>
                               </span>
                               <h4 class="small-title">Menu</h4>
                               <ul id="small-container" class="bullet small toggle-dropdown">
                                  <li>
                                     <a href="about">About us</a>
                                  </li>
                                  <li>
                                     <a href="collections">Collection</a>
                                  </li>
                                  <li>
                                     <a href="contact">Contact</a>
                                  </li>
                                  <li>
                                     <a href="blogs">Blog</a>
                                  </li>
                                  <li>
                                     <a href="collections/computer.html">Shop</a>
                                  </li>
                                  <li>
                                     <a href="collections/mobile.html">Services</a>
                                  </li>
                                  <li>
                                     <a href="collections/electronics.html">Product</a>
                                  </li>
                                  <li>
                                     <a href="collections/computer.html">Category</a>
                                  </li>
                               </ul>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
             {{-- <div id="shopify-section-Ishi_offer" class="shopify-section shopify-section">
                <div id="ishioffersblock">
                   <div class="typed"></div>
                </div>
                <div class="offerstitle">
                   <a href="collections/computer.html">
                   <span>FLAT 10% OFF ALL Iphone</span>
                   </a>
                </div>
                <div class="offerstitle">
                   <a href="collections/electronics.html">
                   <span>FLAT 10% OFF ALL PURCHASE</span>
                   </a>
                </div>
                <div class="offerstitle">
                   <a href="collections/electronics.html">
                   <span>FLAT 10% OFF ALL PURCHASE</span>
                   </a>
                </div>
             </div> --}}
             <script type="text/javascript">
                $(document).ready(function () {
                  var list = new Array();
                  $('.offerstitle').each(function(i, obj) {
                      list.push($(this).html());
                  });

                  var myoffer = $('.offerstitle').length;
                  if(myoffer != 0){
                    var typed = new Typed('.typed', {
                      strings: list,
                      typeSpeed: 80,
                      backSpeed: 80,
                      loop: true,
                      contentType: 'html',
                      showCursor: false,
                    });
                  }
                });
              </script>
          </div>
       </div>
    </div>
 </div>
