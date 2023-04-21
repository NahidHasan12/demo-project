

<div class="ibox bg-light">
    <div class="ibox-body mb-3 px-3 py-2 d-flex align-items-center justify-content-between">
    <ul class="mb-0 pl-0 breadcrumb-nav">
      @isset($breadcrumb)
        @foreach ($breadcrumb as $key => $value)
            <li class="{{ $loop->last ? '' : 'active' }}"> 
                @if ($loop->last)
                   {{ $key }}
                @else
                   <a href="{{ $value }}"> {{ $key }}</a>
                @endif 
            </li>
        @endforeach
      @endisset
    </ul>
     <div class="active-btn">
         @yield('action')
    </div>
    </div>
</div>