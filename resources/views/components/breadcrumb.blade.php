<div class="container-fluid px-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb my-0">     
            @foreach ($items as $item)
                @if (isset($item['href']) && !$loop->last)
                    <li class="breadcrumb-item"><a href="{{ $item['href'] }}">{{ $item['label'] }}</a></li>
                @else
                    <li class="breadcrumb-item active"><span>{{ $item['label'] }}</span></li>
                @endif
            @endforeach
        </ol>
    </nav>
</div>