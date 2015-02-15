                        <div class="css-layout-cell css-sidebar1">
                        @if(!Auth::check())
                            <div class="css-block clearfix">
                                <div class="css-blockheader">
                                    <h3 class="t">Login Form</h3>
                                </div>

                                <div class="css-blockcontent">
                                    <form action="{{URL::Route('login')}}" id="form-login" method=
                                    "post" name="login">
                                        <fieldset class="input" style=
                                        "border: 0 none;">
                                            <p>
                                                @if(Session::has('error'))
                                                    <span style="color:red">{{Session::get('error')}}</span>
                                                @endif
                                            </p>
                                            <p id="form-login-username">
                                            <label for=
                                            "modlgn_username">Username</label><br>
                                            <input alt="username" class=
                                            "inputbox" id="modlgn_username"
                                            name="username" style="width:100%"
                                            type="text">
                                            @if(Session::has('userId'))
                                            <span style="color:red">{{Session::get('userId')}}</span>
                                            @endif
                                            </p>

                                            <p id="form-login-password">
                                            <label for=
                                            "modlgn_passwd">Password</label><br>
                                            <input alt="password" class=
                                            "inputbox" id="modlgn_passwd" name=
                                            "passwd" size="18" style=
                                            "width:100%" type="password">
                                             @if(Session::has('passwd'))
                                            <span style="color:red">{{Session::get('passwd')}}</span>
                                            @endif
                                            </p>

                                            <p id="form-login-remember">
                                            <label class=
                                            "css-checkbox"><input alt=
                                            "Remember Me" id="modlgn_remember"
                                            name="remember" type="checkbox"
                                            value="yes">Remember
                                            Me</label></p><input class=
                                            "css-button" name="Submit" type=
                                            "submit" value="Login">
                                        </fieldset>

                                        <ul>
                                            <li>
                                                <a href="#">Forgot your
                                                password?</a>
                                            </li>

                                            <li>
                                                <a href="#">Forgot your
                                                username?</a>
                                            </li>

                                            <li>
                                                <a href="{{URL::Route('register')}}">Create an
                                                account</a>
                                            </li>
                                        </ul>
                                    </form>
                                </div>
                            </div>
                        @else
                            <div class="css-block clearfix">
                                <div class="css-blockheader">
                                    <h3 class="t">Welcome {{Auth::user()->name}} , </h3>
                                </div>

                                <div class="css-blockcontent">
                                    <ul>
                                        <li><b><a href="{{URL::Route('myproducts')}}">View your products</a></b></li>
                                        <li><b><a href="{{URL::Route('add')}}">Add new product</a></b></li>
                                        <li><b><a href="{{URL::Route('logout')}}">Logout</a></b></li>
                                    </ul>
                                </div>
                            </div>
                        @endif
                        </div>