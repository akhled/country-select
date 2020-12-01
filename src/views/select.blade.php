<div>
    <select {{ $attributes->merge([
        'class' => 'akhaled-select-country',
    ]) }}>
        @foreach (countries() as $country_code => $country)
            <option value="{{ $country_code }}" data-country='@json($country)'>{{ $country['name'] }}</option>
        @endforeach
    </select>
</div>
