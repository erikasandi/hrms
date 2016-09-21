@foreach($items as $item)
    <li @if($item->data('activated')) class="open" @endif>
        <a href="{!! $item->url() !!}" @if($item->data('activated')) class="active" @endif>{!! $item->title !!}</a>
        @if($item->hasChildren())
            <ul class="sub-menu" >
                @include('layouts.navigations.custom-menu-items', array('items' => $item->children()))
            </ul>
        @endif
    </li>
@endforeach