@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'text-sm text-green']) }}>
        {{ $status }}
    </div>
@endif
