<h1>{{$heading}}</h1>

 @php
     $test = 0;
 @endphp

@if(count($listings) == 0)
   <p>NO listings Found</p>
@endif

{{-- All Listings --}}
@foreach($listings as $listing)
  <h2> <a href="/listing/{{$listing['id']}}">  {{++$test}} {{$listing['title']}} </a> </h2>
   <p>{{$listing['description']}}</p>
@endforeach
