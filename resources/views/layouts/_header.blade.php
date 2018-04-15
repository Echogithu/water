    <header>
    <!-- 导航条 -->
        <nav class="navbar navbar-inverse" role="navigation">
            <div class="container">
                <div class="row">
                    <!-- logo -->
                    <div class="navbar-header col-lg-4 ">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target="#example-navbar-collapse">
                            <span class="sr-only">切换导航</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="{{route('home')}}}" id="logo">Water App</a>
                    </div>
                    <!-- 导航 -->
                    <div class="collapse navbar-collapse" id="example-navbar-collapse">
                        <ul class="nav navbar-nav navbar-right ">
                          <li><a href="{{route('help')}}">帮助</a></li>
                          <li><a href="#">登录</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>