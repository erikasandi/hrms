<!-- sidebar menu -->
<aside class="sidebar offscreen-left">
    <!-- main navigation -->
    <nav class="main-navigation" data-height="auto" data-size="6px" data-distance="0" data-rail-visible="true" data-wheel-step="10">
        <p class="nav-title">Main Menu</p>
        <ul class="nav">
            @include('layouts.navigations.custom-menu-items', array('items' => $menu->roots()))
        </ul>
    </nav>
</aside>
<!-- /sidebar menu -->