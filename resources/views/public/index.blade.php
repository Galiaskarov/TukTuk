@extends('layouts.app')

@section('content')
    @include('public.components.navbar', ['logo' => $logo, 'menu' => $menu])
    @include('public.components.hero', ['hero' => $hero])
    @include('public.components.advantages', ['advantages' => $advantages])
    @include('public.components.we', ['we' => $we])
    @include('public.components.products', ['products' => $products])
    @include('public.components.footer')
@endsection

