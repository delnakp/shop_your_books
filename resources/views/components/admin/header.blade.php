@props([
    'heading',
    'sub_heading',
    'url'
])

<div class="container-fluid px-4">
    <h1 class="mt-4">{{$heading}}</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"><a href="{{route($url)}}">{{$sub_heading}}</a></li>
    </ol>
