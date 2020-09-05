<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<!-- <img src="{{asset('images/feeds-logo-violet.png')}}" class="logo" alt="Feeds Logo"> -->
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
