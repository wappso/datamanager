<!DOCTYPE html>
<html>
<head>
    <link href="{{asset('components/metro-ui/css/metro.min.css')}}" rel="stylesheet">
    <script type="text/javascript" src="{{asset('components/jquery/jquery-3.2.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('components/metro-ui/js/metro.min.js')}}"></script>
</head>
<body>
    <div class="app-bar" data-role="appbar">
        <a class="app-bar-element" href="...">WAppSo Datamanager</a>
        <span class="app-bar-divider"></span>
        <ul class="app-bar-menu">
            <li><a href="">Home</a></li>
            <li>
                <a href="" class="dropdown-toggle">Products</a>
                <ul class="d-menu" data-role="dropdown">
                    <li><a href="">Windows 10</a></li>
                    <li><a href="">Spartan</a></li>
                    <li><a href="">Outlook</a></li>
                    <li><a href="">Office 2015</a></li>
                    <li class="divider"></li>
                    <li><a href="" class="dropdown-toggle">Other Products</a>
                        <ul class="d-menu" data-role="dropdown">
                            <li><a href="">Internet Explorer 10</a></li>
                            <li><a href="">Skype</a></li>
                            <li><a href="">Surface</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="">Support</a></li>
            <li><a href="">Help</a></li>
        </ul>
    </div>   
   @yield('content')
</body>
</html>