<!DOCTYPE html>

<html dir="ltr" lang="en-US">
<head>
    <meta charset="utf-8">

    <title></title>
    <meta content=
    "initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width"
    name="viewport">
    <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link href="{{URL::asset('style.css')}}" media="screen" rel="stylesheet">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <link href="{{URL::asset('style.responsive.css')}}" media="all" rel="stylesheet">
    <link href="{{URL::asset('favicon.ico')}}" rel="shortcut icon" type="image/x-icon">
    <script src="{{URL::asset('jquery.js')}}"></script>
    <script src="{{URL::asset('script.js')}}"></script>
    <script src="{{URL::asset('script.responsive.js')}}"></script>
    <meta content=
    "Sve za bebu, protal namenjen mladim roditeljima da razmene i prodaju bebi opremu kada ih njihove bebe prerastu :)"
    name="description">
    <meta content="beba, bebi oprema," name="keywords">
    <style>
.css-content .css-postcontent-0 .layout-item-0 { border-spacing: 5px 0px; border-collapse: separate;  }
    .css-content .css-postcontent-0 .layout-item-1 { border-top-style:solid;border-right-style:solid;border-bottom-style:solid;border-left-style:solid;border-width:3px;border-color:#328DBD; padding-top: 10px;padding-right: 10px;padding-bottom: 10px;padding-left: 10px; border-radius: 10px;  }
    .css-content .css-postcontent-0 .layout-item-2 { margin-top: 5px;margin-bottom: 5px;  }
    .css-content .css-postcontent-0 .layout-item-3 { padding-right: 10px;padding-left: 10px;  }
    .ie7 .css-post .css-layout-cell {border:none !important; padding:0 !important; }
    .ie6 .css-post .css-layout-cell {border:none !important; padding:0 !important; }

    </style>
</head>

<body>
    <div id="css-main">
        <header class="css-header">
            <div class="css-shapes">
                <div class="css-object0" data-left="97.6%"></div>

                <div class="css-object2089478270" data-left="29.47%"></div>
            </div>

            <h1 class="css-headline" data-left="27.72%"><a href="#">Online shop
            bebi opreme</a></h1>
        </header>

         <nav class="css-nav">
            <div class="css-nav-inner">
                <ul class="css-hmenu">
                    <li>
                        <a class="" href=
                        "{{URL::to('/')}}">Početna</a>
                    </li>

                    <li>
                        <a href="{{URL::to('/')}}/category/Oprema">Oprema</a>

                        <ul>
                            <li>
                                <a href=
                                "{{URL::to('/')}}/category/Oprema/Kolica">Kolica</a>
                            </li>

                            <li>
                                <a href=
                                "{{URL::to('/')}}/category/Oprema/Auto%20sedista%20za%20bebe">Auto
                                sedišta za bebe</a>
                            </li>

                            <li>
                                <a href=
                                "{{URL::to('/')}}/category/Oprema/Nostilice">Nosilice</a>
                            </li>

                            <li>
                                <a href=
                                "{{URL::to('/')}}/category/Oprema/Stolice%20za%20hranjenje">
                                Stolice za hranjenje</a>
                            </li>

                            <li>
                                <a href=
                                "#">Ostalo</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="{{URL::to('/')}}/category/Soba">Soba</a>

                        <ul>
                            <li>
                                <a href=
                                "{{URL::to('/')}}/category/Soba/Krevetici">Krevetici</a>
                            </li>

                            <li>
                                <a href=
                                "{{URL::to('/')}}/category/Soba/Ogradice%20za%20igru">Ogradice
                                za igru</a>
                            </li>

                            <li>
                                <a href=
                                "{{URL::to('/')}}/category/Soba/Stolice%20za%20ljuljanje">Stolice
                                za ljuljanje</a>
                            </li>

                            <li>
                                <a href=
                                "{{URL::to('/')}}/category/Soba/Namestaj">Nameštaj</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="{{URL::to('/')}}/category/Odeca">Odeća</a>
                    </li>
                    @if(Auth::check())
                    <li>
                        <a href="{{URL::Route('add')}}">Postavite oglas</a>
                    </li>
                    @endif
                    <li>
                        <a href="#">Kontakt</a>
                    </li>
                </ul>
            </div>
        </nav>

        @yield('body')
    </div>
</body>
</html>