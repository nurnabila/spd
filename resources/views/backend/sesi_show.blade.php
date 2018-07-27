@extends('backend.layout')

@section('content')
    <!-- Page Content -->
    <section class="py-5">
          <h1>Show Sesi: {{ $sesi->name }}</h1><br>

          @include('common.alert')

          <form method="POST" action="{{ route('sesi.store') }}">

            <p>Name : {{ $sesi->name }} </p>
            <p>Status : {{ $sesi->status }} </p>
            <p>Pingat : {{ $sesi->pingat }} </p>

            <br><br><rp><a href="{{ url()->previous() }}">Back to senarai</a>

@endsection

@push('css')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
@endpush

@push('js')
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
@endpush