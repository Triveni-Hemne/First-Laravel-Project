<x-header data="Contact Component Header" />
<h1>Contact Page</h1>


@if(!$user)
    <h3>Hi {{$user}}</h3>
    1
@endif

@if($user == 'Triveni')
    <h3>Hi {{$user}}</h3>
    2
@endif

@if($user == 'Triveni')
<h3>Good Morning {{$user}}</h3>
@elseif($user == 'Rupali')
<h3>Good Morning {{$user}}</h3>
@else
<h3>Unknown User</h3>
@endif

@for($i=1; $i<=10; $i++)
<h4>{{$i}}</h4>
@endfor

@while($i == 11)
<h1>Finished</h1>
@endwhile



<x-footer/>