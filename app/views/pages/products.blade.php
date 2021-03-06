@extends ('pages.layout')

@section('body')
        
<style type="text/css">
	.img{
        width: 140px;
        height: 140px;
	}
    .own-block{
        width: 30%;
    }
</style>

        <div class="css-sheet clearfix">
            <div class="css-layout-wrapper">
                <div class="css-content-layout">
                    <div class="css-content-layout-row">
                        @include('pages.login')

                        <div class="css-layout-cell css-content">
                            <div class="css-block clearfix">
                                <div class="css-blockheader">
                                    <h3 class="t">{{$heading}}</h3>
                                </div>
                            </div>

                            <article class="css-post css-article">
                                <h2 class="css-postheader"></h2>

                                @if(sizeof($products)==0)
                                	<blockquote>Sorry! No product Found</blockquote>
                                @else
                                 <div class=
                                "css-postcontent css-postcontent-0 clearfix">
                                @foreach($products as $key => $product)
                                @if($key%3==0)
                                <?php $i=1; ?>
                               
                                <div class=
                                    "css-content-layout layout-item-0">
                                    <div class="css-content-layout-row">
                                @endif
                                	<div class="css-layout-cell layout-item-1 own-block" {{(sizeof($products)%3 !=0 && $key == sizeof($products) -1)?'style="display:block"':""}}>
                                        <p>
                                            <a href="{{URL::to('/')}}/Product/{{$product->product_id}}">
                                        	   <img class="img" src="{{URL::asset($product->img)}}">
                                            </a>
                                        </p>
                                        <p><b><a href="{{URL::to('/')}}/Product/{{$product->product_id}}">{{$product->name}}</a></b></p>
                                        <p><b>Price (in RSD) : {{$product->price}}</b></p>
										<p><br></p>
                                    </div>
                                 @if(($key+1)%3 == 0)
                                 	<?php $i=0; ?>
                                    </div>
                                    </div>
                                 @endif
                                @endforeach
                                </div>
                                 @if($i ==1)
                                 </div>
                                 </div>
                                 @endif
                                @endif
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