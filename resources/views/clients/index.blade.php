@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="_container">
        <div class="_table-container">
            <x-table.table :clients='$clients'/>
        </div>
    </div>
</div>
@endsection