@foreach ($schedules as $item)
    <li class="single-event">
        <div class="single-event-counter">
            <div class="count-number rt-clip-text"></div>
        </div>
        <div class="single-event-content">
            <h5 class="event-title">{{ $item->program }}</h5>
            <div class="single-event-content-meta">
                <div class="event-date">

                    <span>{{ $item->theme }}</span>
                </div>

                @if ($item->speaker)
                    <div class="event-place">
                        <span>* {{ $item->speaker }} <small>{{ $item->title }}</small></span>
                    </div>
                @endif
            </div>
        </div>
    </li>
@endforeach
