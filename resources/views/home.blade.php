@extends('layouts.app')
<div id="cover"></div>
@include('layouts.navbar')

@section('home-content')

	<transition enter-active-class="animated fadeIn" leave-active-class="animated fadeOut" mode="out-in">
		    <router-view name="homeIndex" key="fade"></router-view>
		    <router-view key="out"></router-view>
	</transition>

@endsection {{-- end of section home content --}}