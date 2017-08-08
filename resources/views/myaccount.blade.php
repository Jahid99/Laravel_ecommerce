@extends('layouts.master')

@section('content')

<?php 
echo '<center><h2>Your name : '.Auth::user()->name.'</h2></center>';
echo '<center><h2>Your email : '.Auth::user()->email.'</h2></center>';	

?>

@endsection