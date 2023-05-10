<div class="menu-links">
    <ul>
        @foreach($menus->where('position', $position) as $menu)
            @if($menu)
                <li><a href="{{ route('pages.index', ['category_id' => $menu->category_id]) }}">{{ $menu->name }}</a></li>
            @else
                <li>&nbsp;</li>
            @endif
        @endforeach
        
        
        {{--}}
        @foreach($menus as $menu)
            @if($menu)
                <li><a href="{{ route('pages.index', ['category_id' => $menu->category_id]) }}">{{ $menu->name }}</a></li>
            @else
                <li>&nbsp;</li>
            @endif
        @endforeach
        --}}
    </ul>
</div>