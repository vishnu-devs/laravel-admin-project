@props(["route"=>"", "icon"=>"fas fa-desktop", "title", "small"=>"", "class"=>""])

@if($route)
<a href='{{$route}}'
    class='btn btn-success {{($small=='true')? 'btn-sm' : ''}} {{$class}}'
    data-toggle="tooltip"
    title="{{ $title }}">
    <i class="{{$icon}}"></i>
    {{ $slot }}
    View
</a>
@else
<button type="submit"
    class='btn btn-success {{($small=='true')? 'btn-sm' : ''}} {{$class}}'
    data-toggle="tooltip"
    title="{{ $title }}">
    <i class="{{$icon}}"></i>
    {{ $slot }}
</button>
@endif