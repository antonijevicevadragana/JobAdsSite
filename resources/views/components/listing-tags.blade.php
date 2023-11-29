@props(['tagsdb'])

@php
    $tags = explode(',', $tagsdb);
@endphp

<ul class="list-inline">
    @foreach ($tags as $tag)
        <li class="list-inline-item"><a href="/?tag={{ $tag }}"
                class="text-decoration-none text-light bg-dark p-1 rounded">{{$tag  }}</a></li>
    @endforeach


</ul>
