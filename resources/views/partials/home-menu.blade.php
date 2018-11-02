<div class="d-block d-md-none">
    <div class="row">
        <div class="col-6">
            <a href="#" class="toggle-burger">
                <span class="patty"></span>
            </a>
        </div>
        <div class="col-6">
            <a href="/" class="d-block text-right menu-avatar">
                <img src="{{ asset('img/avatar.png') }}" class="img-avatar-mini mb-3" alt="">
            </a>
        </div>
    </div>
</div>
<div class="d-none d-md-table mh-100v ml-auto mobile-menu">
    <div class="d-table-cell align-middle py-5">

        @if (isset($active))
            <a href="/" class="d-block text-right">
                <img src="{{ asset('img/brand.png') }}" class="img-avatar-mini mb-3" alt="">
            </a>
        @else
            @php
            $active = '';
            @endphp
        @endif


        <ul id="main-menu" class="nav flex-column text-right">
            <li class="nav-item">
                <a class="nav-link {{ $active == 'about' ? 'active' : '' }}" href="/about">about</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ $active == 'work' ? 'active' : '' }}" href="/work">work</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ $active == 'journal' ? 'active' : '' }}" href="/journal">journal</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ $active == 'contact' ? 'active' : '' }}" href="/contact">contact</a>
            </li>
        </ul>

    </div>
</div>
