@foreach(\Somatik\Model\SocialLink::VALUES as $linkName)
    @if($socialLinks[$linkName])
        <a class="social-link" target="_blank"
           href="{{ $socialLinks[$linkName] }}">
            <svg width="32" height="32">
                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                     xlink:href="/icon/bundle.min.svg#{{ $linkName }}"></use>
            </svg>
        </a>
    @endif
@endforeach


