

{{-- <div class="row row-cols-1 row-cols-md-2 g-4 mx-auto p-2 ">
{{$slot}}
</div> --}}


<div {{$attributes->merge(['class'=>'row row-cols-1 row-cols-md-2 g-4 mx-auto p-2'])}}>
    {{$slot}}
    </div>