<header class="intro-header" style="background-image: url(@yield('url_header'))">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading">
                    <h1>@yield('header_title')</h1>
                    <hr class="small">
                    <span class="subheading">@yield('header_content')</span>
                    <span class="meta">@yield('header_author')</span>
                </div>
            </div>
        </div>
    </div>
</header>