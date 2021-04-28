@extends('layouts.base')
@section('content')
@livewire('finance.create-account', ['uuid' => $uuid])
@endsection
