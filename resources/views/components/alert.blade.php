<div
    class="border-l-4 p-4
@if ($type === 'success') bg-teal-100 border-teal-500 text-teal-700
@elseif ($type === 'warning') bg-orange-100 border-orange-500 text-orange-700
@else bg-blue-100 border-blue-500 text-blue-700 @endif
">
    <div><strong>{{ $title }}</strong></div>
    <div>{{ $slot }}</div>
</div>
