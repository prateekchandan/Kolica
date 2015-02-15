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
                                    <h3 class="t">Search</h3>
                                </div>

                                <div class="css-blockcontent">
                                    <div>
                                        <form action="#" class="css-search" id=
                                        "searchform" method="get" name=
                                        "searchform">
                                            <input name="s" type="text" value=
                                            ""> <input class=
                                            "css-search-button" name="search"
                                            type="submit" value="Search">
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <article class="css-post css-article">
                                <h2 class="css-postheader"></h2>

                                <div class=
                                "css-postcontent css-postcontent-0 clearfix">
                                    <div class=
                                    "css-content-layout layout-item-0">
                                        <div class="css-content-layout-row">
                                            <div class=
                                            "css-layout-cell layout-item-1"
                                            style="width: 33%">
                                                <p><span style=
                                                "font-weight: bold;">1</span><br>
                                                </p>

                                                <p><br></p>

                                                <p><br></p>
                                            </div>

                                            <div class=
                                            "css-layout-cell layout-item-1"
                                            style="width: 34%">
                                                <p>2</p>
                                            </div>

                                            <div class=
                                            "css-layout-cell layout-item-1"
                                            style="width: 33%">
                                                <p>3</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=
                                    "css-content-layout-wrapper layout-item-2">
                                        <div class="css-content-layout">
                                            <div class=
                                            "css-content-layout-row">
                                                <div class=
                                                "css-layout-cell layout-item-3"
                                                style="width: 100%">
                                                    <p>Najnoviji oglasi :</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=
                                    "css-content-layout layout-item-0">
                                        <div class="css-content-layout-row">
                                            <div class=
                                            "css-layout-cell layout-item-3"
                                            style="width: 33%">
                                                <p>4</p>
                                            </div>

                                            <div class=
                                            "css-layout-cell layout-item-3"
                                            style="width: 34%">
                                                <p>5</p>
                                            </div>

                                            <div class=
                                            "css-layout-cell layout-item-3"
                                            style="width: 33%">
                                                <p>6</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
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