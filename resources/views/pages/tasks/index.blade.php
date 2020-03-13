@extends('layouts.app')
@section('breadcrumb')
<li class="breadcrumb-item">
    tasks
</li>
@endsection
@section('header')
<h3><i class="fa fa-list"></i> tasks </h3>
@endsection
@section('tools')
<a class="btn btn-secondary" href="{{route('tasks.create')}}">
    <span class="fa fa-plus"></span>
</a>
@endsection

@section('content')
<div class="row">
    @foreach($records as $record)
    <div class="col-sm-6">
        @include('cards.task')
    </div>
    @endforeach
</div>
{!! $records->render() !!}
@endSection