<x-header data="for each loop"/>
@foreach($users as $user)
<h1>{{$user}}</h1>
@endforeach
<x-footer/>


