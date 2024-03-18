<form class="d-inline" action="{{ route('setLocale',$lang) }}" method="POST">
@csrf
<button type="submit">
    <span class="fi fi-{{ $nation }}"></span>
</button>

</form>