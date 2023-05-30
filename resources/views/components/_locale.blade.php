<form class="d-inline" action="{{ route('setLocale', $lang) }}" method="post">
@csrf
<button type="submit" class="btnlingua">
    <img src="{{ asset('vendor/blade-flags/language-' . $lang . '.svg') }}" width="16" height="16" />
</button>
</form>
