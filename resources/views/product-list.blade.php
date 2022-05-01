@extends('layout.app')
@section('title', 'Product Listing')
@push('style')
<style>
   .search-form {
   padding-bottom: 50px;
   }
</style>
@endpush
@section('content')
<div class="maincontent-area">
   <div class="zigzag-bottom"></div>
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="latest-product">
               <h2 class="section-title">Available Products</h2>
               <form id="js-search-form" class="search-form" action="{{route('product.list')}}">
                  @foreach($rules as $rule)
                  <label class="checkbox-inline">
                  <input type="checkbox" class="js-search-chkbox" value="{{$rule->id}}" name="rules[]" @if(in_array($rule->id, $filteredRules)) checked="checked" @endif>{{$rule->name}}
                  </label>
                  @endforeach
               </form>
               <div>
                  <a href="#" id="js-reset-filter">Reset Filter</a>
               </div>
               <div class="product-carousel">
                  @foreach($productList as $product)
                  <div class="single-product" >
                     <div class="product-f-image">
                        <img src="{{asset('img/broadband.png')}}" alt="Image">
                     </div>
                     <h2><a href="single-product.html">{{$product->name}}</a></h2>
                     <div class="product-carousel-price">
                        <ul>
                           @foreach($product->rules as $rule)
                           <li title="{{$rule->name}}">{{$rule->name}}</li>
                           @endforeach
                        </ul>
                     </div>
                  </div>
                  @endforeach
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- End main content area -->
@endsection
@push('script')
<script>
   $(document).ready(function () {
       $('.js-search-chkbox').on('change', function () {
           $('#js-search-form').submit();
       });
   
       $('#js-reset-filter').on('click', function (e) {
           e.preventDefault();
           $('.js-search-chkbox').attr('checked', false);
           $('#js-search-form').submit();
       });
   });
   
</script>
@endpush