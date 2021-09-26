@extends('E-com.layouts.master')
@Section('content')
	<!-- Main Container  -->
	<div class="main-container container">
		<ul class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i></a></li>
			<li><a href="#">Smartphone & Tablets</a></li>
		</ul>
		
		<div class="row">
			<!--Left Part Start -->
			<aside class="col-sm-4 col-md-3" id="column-left">
				
			</aside>
			<!--Left Part End -->
			
			<!--Middle Part Start-->
			<div id="content" class="col-md-9 col-sm-8">
				<div class="products-category">
					<div class="category-derc">
						<div class="row">
							<div class="col-sm-12">
								<div class="banners">
									<div>
										<a  href="#"><img src="image/demo/shop/category/electronic-cat.png" alt="Apple Cinema 30&quot;"><br></a>
									</div>
								</div>
							
							</div>
						</div>
					</div>
					<!-- Filters -->
					<div class="product-filter filters-panel">
						<div class="row">
							<div class="col-md-2 visible-lg">
								<div class="view-mode">
									<div class="list-view">
										<button class="btn btn-default grid active" data-view="grid" data-toggle="tooltip"  data-original-title="Grid"><i class="fa fa-th"></i></button>
										<button class="btn btn-default list" data-view="list" data-toggle="tooltip" data-original-title="List"><i class="fa fa-th-list"></i></button>
									</div>
								</div>
							</div>
							<div class="short-by-show form-inline text-right col-md-7 col-sm-8 col-xs-12">
								<div class="form-group short-by">
									<label class="control-label" for="input-sort">Sort By:</label>
									<select id="input-sort" class="form-control"
									onchange="location = this.value;">
										<option value="" selected="selected">Default</option>
										<option value="">Name (A - Z)</option>
										<option value="">Name (Z - A)</option>
										<option value="">Price (Low &gt; High)</option>
										<option value="">Price (High &gt; Low)</option>
										<option value="">Rating (Highest)</option>
										<option value="">Rating (Lowest)</option>
										<option value="">Model (A - Z)</option>
										<option value="">Model (Z - A)</option>
									</select>
								</div>
								<div class="form-group">
									<label class="control-label" for="input-limit">Show:</label>
									<select id="input-limit" class="form-control" onchange="location = this.value;">
										<option value="" selected="selected">9</option>
										<option value="">25</option>
										<option value="">50</option>
										<option value="">75</option>
										<option value="">100</option>
									</select>
								</div>
							</div>
							<div class="box-pagination col-md-3 col-sm-4 col-xs-12 text-right">
								<ul class="pagination">
									<li class="active"><span>1</span></li>
									<li><a href="">2</a></li><li><a href="">&gt;</a></li>
									<li><a href="">&gt;|</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- //end Filters -->
					<!--changed listings-->


<div class="products-list row grid">
@foreach($products as $key => $values)
	@foreach($values as $anotherkey => $product)


	<div class="product-layout col-md-4 col-sm-6 col-xs-12 ">

    <div class="product-item-container">
	
    <div class="left-block">
	
				<div class="product-image-container lazy second_img ">
					<img data-src="{{asset('/uploads/products/'.$product->image)}}" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"  alt="Apple Cinema 30&quot;" class="img-responsive" />
				</div>
	
				<!--Sale Label-->

				<!--countdown box-->
				<!--end countdown box-->
				
				<!--full quick view block-->
				<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="{{url('/quick_view/'.$product->id)}}">  Quickview</a>
				<!--end full quick view block-->
			</div>

			<div class="right-block">
				<div class="caption">
					<h4><a href="{{url('/products/'.$product->id)}}">{{$product->name}}</a></h4>		
					
										
					<div class="price">
						<span class="price-new">Price-{{$product->price}}</span> 
	 					</div>
					<div class="description item-desc hidden">
						<p>{{$product->description}}</p>
					</div>
				</div>
			</div><!-- right block -->
            
		</div>

    </div>
    @endforeach

    @endforeach

</div>
</form>
<!--// End Changed listings-->
					<!-- Filters -->
					<div class="product-filter product-filter-bottom filters-panel" >
						<div class="row">
							<div class="col-md-2 hidden-sm hidden-xs">
							</div>
						   <div class="short-by-show text-center col-md-7 col-sm-8 col-xs-12">
								<div class="form-group" style="margin: 7px 10px">Showing 1 to 9 of 10 (2 Pages)</div>
							</div>
							<div class="box-pagination col-md-3 col-sm-4 text-right"><ul class="pagination"><li class="active"><span>1</span></li><li><a href="#">2</a></li><li><a href="#">&gt;</a></li><li><a href="#">&gt;|</a></li></ul></div>
									
						 </div>
					</div>
					<!-- //end Filters -->
					
				</div>
				
			</div>
			
			
		</div>
		<!--Middle Part End-->
	</div>
	<!-- //Main Container -->

    </body>
@endsection