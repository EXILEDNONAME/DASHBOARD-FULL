@extends('layouts.pages.index', ['header' => 'true'])
@push('title', 'Management Roles')

@push('content-head')
<th> Access </th>
<th> Name </th>
<th> Description </th>
@endpush

@push('content-body')
{ data: 'accesses.name' },
{ data: 'name' },
{ data: 'description' },
@endpush
