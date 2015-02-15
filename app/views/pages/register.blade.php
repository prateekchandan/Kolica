@extends ('pages.layout')

@section('body')
       

        <div class="css-sheet clearfix">
            <div class="css-layout-wrapper">
                <div class="css-content-layout">
                    <div class="css-content-layout-row">
                        <div class="css-layout-cell css-sidebar1">
                        </div>

                        <div class="css-layout-cell css-content">
                            <div class="css-block clearfix">
                                <div class="css-blockheader">
                                    <h3 class="t">Register</h3>
                                </div>

                                <div class="css-blockcontent">
                                    <form action="{{URL::Route('register')}}" id="form-login" method=
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
                                            type="text" required>
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
                                            "width:100%" type="password" required pattern=".{6,}" title="Please enter at least 5 characters">
                                             @if(Session::has('passwd'))
                                            <span style="color:red">{{Session::get('passwd')}}</span>
                                            @endif
                                            </p>
                                            
                                            <p id="form-login-username">
                                            <label for=
                                            "modlgn_username">First Name</label><br>
                                            <input alt="email" class=
                                            "inputbox" id="modlgn_email"
                                            name="name" style="width:100%"
                                            type="text" required>
                                            @if(Session::has('name'))
                                            <span style="color:red">{{Session::get('name')}}</span>
                                            @endif
                                            </p>

                                            <p id="form-login-username">
                                            <label for=
                                            "modlgn_username">Last Name</label><br>
                                            <input alt="email" class=
                                            "inputbox" id="modlgn_email"
                                            name="lname" style="width:100%"
                                            type="text" required>
                                            @if(Session::has('lname'))
                                            <span style="color:red">{{Session::get('lname')}}</span>
                                            @endif
                                            </p>

                                            <p id="form-login-username">
                                            <label for=
                                            "modlgn_username">Email</label><br>
                                            <input alt="email" class=
                                            "inputbox" id="modlgn_email"
                                            name="email" style="width:100%"
                                            type="email" required>
                                            @if(Session::has('email'))
                                            <span style="color:red">{{Session::get('email')}}</span>
                                            @endif
                                            </p>

                                            <p id="form-login-username">
                                            <label for=
                                            "modlgn_username">Phone</label><br>
                                            <input alt="email" class=
                                            "inputbox" id="modlgn_email"
                                            name="phone" style="width:100%"
                                            type="text" required >
                                            @if(Session::has('phone'))
                                            <span style="color:red">{{Session::get('phone')}}</span>
                                            @endif
                                            </p>

                                            
                                            <br>
                                            <p>
                                           <input class=
                                            "css-button" name="Submit" type=
                                            "submit" value="Register"></p>
                                        </fieldset>

                                        <ul>
                                           

                                            <li>
                                                <a href="{{URL::Route('login')}}">Login</a>
                                            </li>
                                        </ul>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="css-layout-cell css-sidebar2">
                            <div class="css-block clearfix">
                                <div class="css-blockheader">
                                    <h3 class="t">Reklame</h3>
                                </div>

                                <div class="css-blockcontent">
                                    <p>&nbsp;google</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="css-footer">
                <p>Copyright © 2011. All Rights Reserved.</p>
            </footer>
        </div>
@endsection