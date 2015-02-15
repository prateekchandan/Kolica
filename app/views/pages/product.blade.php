@extends ('pages.layout')

@section('body')
        
<style type="text/css">
	.img{
		max-width: 500px;
		width:auto;
	}
</style>

        <div class="css-sheet clearfix">
            <div class="css-layout-wrapper">
                <div class="css-content-layout">
                    <div class="css-content-layout-row">
                        @include('pages.login')

                        @if(is_null($p))
                        <blockquote>
                            <h3>Invalid Product Code</h3>
                        </blockquote>
                        @else
                        <div class="css-layout-cell css-content">
                            <div class="css-block clearfix">
                                <div class="css-blockheader">
                                    <h1 class="t">{{$p->name}}</h1>
                                </div>
                            </div>

                            <article class="css-post css-article">
                                <h2 class="css-postheader"></h2>
                                <div>
                                    <img class="img" src="{{$p->img}}">
                                </div>
                                <b>Category : </b><a href="{{URL::to('/')}}/category/{{$p->category}}">{{$p->category}}</a><br>
                                @if($p->sub_category!="")
                                <b>Sub-Category : </b><a href="{{URL::to('/')}}/category/{{$p->category}}/{{$p->sub_category}}">{{$p->sub_category}}</a> <br>
                                @endif
                                <hr>
                                <h3>Description</h4><br>
                                <p style="font-size:14px">
                                    {{$p->desc}}
                                </p>
                                <hr>
                                <h3>Contact</h4><br>
                                <b>Email : </b>{{$p->email}} <br>
                                <b>Phone : </b>{{$p->phone}} <br>
                            </article>
                        </div>
                        @endif
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