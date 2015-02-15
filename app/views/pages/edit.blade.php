@extends ('pages.layout')

@section('body')
        

        <div class="css-sheet clearfix">
            <div class="css-layout-wrapper">
                <div class="css-content-layout">
                    <div class="css-content-layout-row">
                        @include('pages.login')

                        <div class="css-layout-cell css-content">
                            <div class="css-block clearfix">
                                <div class="css-blockheader">
                                    <h3 class="t">Edit {{$p->name}}</h3>
                                </div>
                                @if(Session::has('success'))
                                    <h4><span style="color:green">{{Session::get('success')}}</span></h4>
                                @endif
                                <div class="css-blockcontent">
                                    <form action="" id="form-login" method=
                                    "post" name="login" enctype="multipart/form-data">
                                        <fieldset class="input" style=
                                        "border: 0 none;">
                                            <p>
                                                @if(Session::has('error'))
                                                    <span style="color:red">{{Session::get('error')}}</span>
                                                @endif
                                            </p>
                                            <p id="form-login-username">
                                            <label for=
                                            "modlgn_username">Name of Product</label><br>
                                            <input alt="name" class=
                                            "inputbox" id="modlgn_username"
                                            name="name" style="width:100%"
                                            type="text" value="{{$p->name}}" required>
                                            @if(Session::has('name'))
                                            <span style="color:red">{{Session::get('name')}}</span>
                                            @endif
                                            </p><br>

                                            <p id="form-login-password">
                                            <label>Description</label><br>
                                            <textarea alt="password" class="inputbox"  name="desc"  style=
                                            "width:100%" required>{{$p->desc}}</textarea>
                                             @if(Session::has('desc'))
                                            <span style="color:red">{{Session::get('desc')}}</span>
                                            @endif
                                            </p><br>
                                            
                                            <p id="form-login-username">
                                            <label>Product Image</label><br>
                                            <input alt="image" class=
                                            "inputbox"    name="image" style="width:100%"
                                            type="file" accept="image/*">
                                            <div><i>Leave blank for no change in image</i></div>
                                            @if(Session::has('image'))
                                            <span style="color:red">{{Session::get('image')}}</span>
                                            @endif
                                            </p><br>

                                            <p id="form-login-username">
                                            <label>Price (in RSD)</label><br>
                                            <input alt="price" class=
                                            "inputbox" name="price" style="width:100%"
                                            type="text" value="{{$p->price}}" required pattern="[0-9]{1,}" title="Only numbers Allowed" required>
                                            @if(Session::has('price'))
                                            <span style="color:red">{{Session::get('price')}}</span>
                                            @endif
                                            </p><br>

                                            <p id="form-login-username">
                                            <label for=
                                            "modlgn_username">Email</label><br>
                                            <input alt="email" class=
                                            "inputbox" id="modlgn_email"
                                            name="email" style="width:100%"
                                            type="email" value="{{$p->email}}" required>
                                            @if(Session::has('email'))
                                            <span style="color:red">{{Session::get('email')}}</span>
                                            @endif
                                            </p><br>

                                            <p id="form-login-username">
                                            <label for=
                                            "modlgn_username">Phone</label><br>
                                            <input alt="email" class=
                                            "inputbox" id="modlgn_email"
                                            name="phone" style="width:100%"
                                            type="text" value="{{$p->phone}}" required >
                                            @if(Session::has('phone'))
                                            <span style="color:red">{{Session::get('phone')}}</span>
                                            @endif
                                            </p><br>

                                            <p id="form-login-username">
                                            <label for=
                                            "modlgn_username">Category</label><br>
                                            <select name="category" id="category" onchange="select_subcat()" required>
                                                <option value="">Select Category</option>
                                                <option {{($p->category=="Pocetna")?"selected":""}}>Pocetna</option>
                                                <option {{($p->category=="Oprema")?"selected":""}}>Oprema</option>
                                                <option {{($p->category=="Soba")?"selected":""}}>Soba</option>
                                                <option {{($p->category=="Odeca")?"selected":""}}>Odeca</option>
                                            </select>
                                            @if(Session::has('category'))
                                            <span style="color:red">{{Session::get('category')}}</span>
                                            @endif
                                            </p><br>

                                            <p id="subcat">
                                            </p>
                                            @if(Session::has('sub-category'))
                                            <span style="color:red">{{Session::get('sub-category')}}</span>
                                            @endif
                                            
                                            <br>
                                            <p>
                                           <input class=
                                            "css-button" name="Submit" type=
                                            "submit" value="Edit"></p>
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
        <script type="text/javascript">

        function select_subcat() {
            document.getElementById('subcat').innerHTML = "";
            var val = document.getElementById('category').value;
            var text = "<label>Sub Category</label><br>";
            text = text + '<select name="sub-category" id="sub-category" required>';
            text = text + '<option value="">Select Sub Category</option>';
            if(val == "Oprema"){
                text = text + "<option {{($p->sub_category=='Kolica')?'selected':''}}>Kolica</option>";
                text = text + "<option {{($p->sub_category=='Auto sedista za bebe')?'selected':''}}>Auto sedista za bebe</option>";
                text = text + "<option {{($p->sub_category=='Nosilice')?'selected':''}}>Nosilice</option>";
                text = text + "<option {{($p->sub_category=='Stolice za hranjenje')?'selected':''}}>Stolice za hranjenje</option>";
                text = text + "<option {{($p->sub_category=='Ostalo')?'selected':''}}>Ostalo</option></select>";
                document.getElementById('subcat').innerHTML = text;
            }
            if(val=="Soba"){
                text = text + "<option {{($p->sub_category=='Krevetici')?'selected':''}}>Krevetici</option>";
                text = text + "<option {{($p->sub_category=='Ogradice za igru')?'selected':''}}>Ogradice za igru</option>";
                text = text + "<option {{($p->sub_category=='Stolice za ljuljanje')?'selected':''}}>Stolice za ljuljanje</option>";
                text = text + "<option {{($p->sub_category=='Namestaj')?'selected':''}}>Namestaj</option>";
                document.getElementById('subcat').innerHTML = text;
            }
        }
        select_subcat();
        </script>
@endsection