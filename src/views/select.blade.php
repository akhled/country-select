<div>
    <select {{ $attributes->merge([
        'class' => 'akhaled-select-country',
    ]) }} placeholder="Select a country">
        <option></option>
        @foreach (countries() as $country_code => $country)
            <option value="{{ $country['name'] }}"
                data-country='@json($country)'>{{ $country['name'] }}</option>
        @endforeach
    </select>
</div>
