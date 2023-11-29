
@props(['listing'])
<div class="col">
    <div class="card">
      <div class="card-body">
        <img src="{{$listing->logo ? asset('storage/'. $listing->logo) : asset('images/no-logo.jpg')}}" class="mb-2" style="width: 100px;" alt="...">
        <h4 class="card-title"><a href="/listings/{{$listing->id}}" class="text-decoration-none">{{$listing->title}}</a></h4>
        <x-listing-tags :tagsdb="$listing->tags" />
 
        <h5 class="card-text">{{$listing->company}}</h5>
        <p class="card-text">{{$listing->description}}</p>
        <p class="card-text"><i class="fa-solid fa-location-dot"></i> {{$listing->location}}</p>
      </div>
    </div>
 
</div>