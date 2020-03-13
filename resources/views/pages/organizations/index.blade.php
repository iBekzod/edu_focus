@extends('layouts.app')
@section('breadcrumb')
<li class="breadcrumb-item">
    organizations
</li>
@endsection
@section('header')
<h3><i class="fa fa-list"></i> organizations </h3>
@endsection
@section('tools')
<a class="btn btn-secondary" href="{{route('organizations.create')}}">
    <span class="fa fa-plus"></span>
</a>
@endsection

@section('content')
<div class="row">
    @foreach($records as $record)
    <div class="col-sm-6">
        @include('cards.organization')
    </div>
    @endforeach
</div>
{!! $records->render() !!}
@endSection