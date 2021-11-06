<figure class="figure {{ $class ?? '' }} " {{ $extra ?? '' }}>
    {{ $slot }}

    @isset($caption)
        <figcaption class="figure-caption" {{@$extrafig}}>{!! $caption !!}</figcaption>
    @endisset
</figure>
