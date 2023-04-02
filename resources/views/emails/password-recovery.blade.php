@extends('emails._layout')

@section('content')
<?php
  $url = config('angular.server').'/password-recovery/'.$user->remember_token
?>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin volutpat a velit sit amet accumsan. Duis placerat laoreet tellus finibus gravida. Duis lorem elit, pretium vel arcu at, cursus mattis mi. Donec vitae tincidunt nunc. Nam pharetra, leo id fringilla eleifend, diam velit molestie nunc, in luctus metus sapien id metus. Quisque tellus lacus, maximus a ante quis, blandit porttitor est. Quisque iaculis quam massa, eu ornare erat venenatis non. Nulla volutpat nisi purus, a tincidunt magna tempor vitae.</p>
<p align="center">
  <br><br><br><br><br><br>
  <a href="{{$url}}">{{$url}}</a>
  <br><br><br><br><br><br>
</p>
@endsection