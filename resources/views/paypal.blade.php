@extends('layouts.master')

@section('content')



<form id="target" action="https://www.paypal.com/cgi-bin/webscr" method="post">
	
	<input type="hidden" name="cmd" value="_cart">
	<input type="hidden" name="upload" value="1">
	<input type="hidden" name="business" value="jahidulpathan@gmail.com">
	<input type="hidden" name="image_url" value="https://www.elimkaadda.com/image/favi.png">


	
	@php $i=0; @endphp
	 @foreach($tests as $test)

		@php $i++; @endphp
	

	<input type="hidden" name="item_name_<?php echo $i;?>" value="{{$test->Name}}">
	<input type="hidden" name="amount_<?php echo $i;?>" value="{{$test->Price}}">
	<input type="hidden" name="quantity_<?php echo $i;?>" value="{{$test->Quantity}}">


	<?php 


	 ?>

	
@endforeach

<input type="submit" name="PayPal">
</form>

@endsection