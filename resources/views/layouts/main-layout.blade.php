<html>
    <!-- meta contains meta taga, css and fontawesome icons etc -->
    <head>
        @include('includes.head')
        @yield('extra-css')
        @yield('custom-script')
    </head>
    <body dir="ltr">
        <!-- header -->
        @include('includes.header')
        @yield('content')
        @include('includes.sections.banner-content')
        @include('includes.footer')
        <!--notification-->
        <div id="message_content"></div>
        <!--color panel-->

        <!-- <div class="color-panel">
            <button type="button" class="btn slide-toggle"><i class="fa fa-cogs" aria-hidden="true"></i></button>
            <ul class="list-colors">
                <h3>Website Skins</h3>
                <li>
                    <a href="http://demo.laravelcommerce.com/settheme?theme=app">
                        <span class="color"></span>
                        <span>Default</span>
                    </a>
                </li>
                <li>
                    <a href="http://demo.laravelcommerce.com/settheme?theme=app.theme.1">
                        <span class="color color-1"></span>
                        <span>Black</span>
                        <span class="color color-1-1"></span>
                        <span>Red</span>
                    </a>
                </li>
                <li>
                    <a href="http://demo.laravelcommerce.com/settheme?theme=app.theme.2">
                        <span class="color color-2"></span>
                        <span>White</span>
                        <span class="color color-2-2"></span>
                        <span>Blue</span>
                    </a>
                </li>
                <li>
                    <a href="http://demo.laravelcommerce.com/settheme?theme=app.theme.3">
                        <span class="color color-3"></span>
                        <span>White</span>
                        <span class="color color-3-3"></span>
                        <span>Parrot</span>
                    </a>
                </li>
                <li>
                    <a href="http://demo.laravelcommerce.com/settheme?theme=app.theme.4">
                        <span class="color color-4"></span>
                        <span>Cyan </span>
                        <span class="color color-4-4"></span>
                        <span>Blue</span>
                    </a>
                </li>
                <li>
                    <a href="http://demo.laravelcommerce.com/settheme?theme=app.theme.5">
                        <span class="color color-5"></span>
                        <span>Brown</span>
                        <span class="color color-5-5"></span>
                        <span>Skin</span>
                    </a>
                </li>
                <li>
                    <a href="http://demo.laravelcommerce.com/settheme?theme=app.theme.6">
                        <span class="color color-6"></span>
                        <span>White</span>
                        <span class="color color-6-6"></span>
                        <span>Yellow</span>
                    </a>
                </li>
                <li>
                    <a href="http://demo.laravelcommerce.com/settheme?theme=app.theme.7">
                        <span class="color color-7"></span>
                        <span>White</span>
                        <span class="color color-7-7"></span>
                        <span>Red</span>
                    </a>
                </li>
                <li>
                    <a href="http://demo.laravelcommerce.com/settheme?theme=app.theme.8">
                        <span class="color color-8"></span>
                        <span>Baby Pink</span>
                        <span class="color color-8-8"></span>
                        <span>Purple</span>
                    </a>
                </li>
                <li>
                    <a href="http://demo.laravelcommerce.com/settheme?theme=app.theme.9">
                        <span class="color color-9"></span>
                        <span>Black</span>
                        <span class="color color-9-9"></span>
                        <span>White</span>
                    </a>
                </li>
            </ul>
        </div> -->

        <!-- loader content -->
        <div class="loader" id="loader" style="display: none;">
            <img src="{{ asset('img/ecom/loader.gif') }}">
        </div>
        <!-- all js scripts including custom js -->
        <div class="ui-selectmenu-menu ui-front">
            <ul aria-hidden="true" aria-labelledby="change_language-button" id="change_language-menu" role="listbox" tabindex="0" class="ui-menu ui-corner-bottom ui-widget ui-widget-content ui-menu-icons customicons"></ul>
        </div>
        <div class="ui-selectmenu-menu ui-front">
            <ul aria-hidden="true" aria-labelledby="category_id-button" id="category_id-menu" role="listbox" tabindex="0" class="ui-menu ui-corner-bottom ui-widget ui-widget-content"></ul>
        </div>
        @yield('extra-js')
    </body>
</html>