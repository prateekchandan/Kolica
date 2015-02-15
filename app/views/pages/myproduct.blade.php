@extends ('pages.layout')

@section('body')
        
<style type="text/css">
	.img{
		max-width: 500px;
		width:auto;
	}
    #mt tr td{
        border:0px;
        padding-bottom: 2px;
        border-bottom: 1px solid #f9f9f9;
    }
    #mt{
        width: 100%;
    }
</style>

        <div class="css-sheet clearfix">
            <div class="css-layout-wrapper">
                <div class="css-content-layout">
                    <div class="css-content-layout-row">
                        @include('pages.login')

                        @if(sizeof($p1)==0)
                        <blockquote>
                            <h3>No products Added by you</h3>
                        </blockquote>
                        @else
                        <div class="css-layout-cell css-content">
                            <div class="css-block clearfix">
                                <div class="css-blockheader">
                                    <h1 class="t">List of Products added by you</h1>
                                </div>
                            </div>

                            <article class="css-post css-article">
                               <table id="mt">
                                    @foreach($p1 as $key => $p)
                                   <tr> <td>{{$key+1}}</td>
                                        <td><a href="{{URL::to('/')}}/Product/{{$p->product_id}}">{{$p->name}}</a></td>
                                        <td><span style="margin-left:10px"><a href="{{URL::to('/')}}/edit/{{$p->product_id}}">Edit</a></span></td>
                                    </tr>
                                   @endforeach
                               </table>
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