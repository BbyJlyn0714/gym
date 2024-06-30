@extends('adminlte::page')

@section('title', 'Member')

@section('content_header')
    <h1>Member List</h1>
@stop

@section('content')
    @livewire('member.member-list')
@stop

@section('css')
    @livewireStyles
    @stack('styles')
@stop

@section('js')
    @livewireScripts
    @stack('scripts')
@stop