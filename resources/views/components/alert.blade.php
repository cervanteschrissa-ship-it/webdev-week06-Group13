@props(['type' => 'info'])

<div style="padding: 1rem; margin-bottom: 1rem; border-radius: 5px;
    background-color: {{ $type === 'success' ? '#d4edda' : ($type === 'warning' ? '#fff3cd' : '#d1ecf1') }};
    border: 1px solid {{ $type === 'success' ? '#c3e6cb' : ($type === 'warning' ? '#ffeeba' : '#bee5eb') }};">
    {{ $slot }}
</div>