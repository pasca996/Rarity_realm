<form class="d-inline border-0 " action="{{ route('setLocale',$lang) }}" method="POST">
@csrf
<button class="" type="submit">
    <span class="fi fi-{{ $nation }}"></span>
</button>

</form>