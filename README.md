# Select2 countries list <!-- omit in toc -->

Laravel package to select countries single or multiple using [select2](https://select2.org/).

- [Installation](#installation)
- [How to use](#how-to-use)
- [Events](#events)

## Installation

`composer require akhaled/select-country`

Then add `Akhaled\SelectCountry\ServiceProvider::class` to `config/app.php` providers

## How to use

### 1. Add the component to your view <!-- omit in toc -->

```blade
{{-- Single selection --}}
<div>
    <x-select-country name="selected_country"></x-select-country>
</div>

{{-- Multiple selection --}}
<div>
    <x-select-country name="countries[]" multiple="multiple"></x-select-country>
</div>
```

### 2. Add scripts <!-- omit in toc -->

```blade
{{-- link-to-jquery --}
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
@selectCountryScripts
```

### 3. Add select2 style <!-- omit in toc -->

```blade
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
```

## Events

You can use [select2 event](https://select2.org/programmatic-control/events) by listening to element class `.akhaled-select-country`

### example <!-- omit in toc -->

```blade
<div>
    <x-select-country name="selected_country"></x-select-country>
    <div id="country-code"></div>
</div>

<script>
    $(document).delegate('.akhaled-select-country', 'select2:select', function(e) {
        let country = $(e.params.data.element).data('country')
        $('#country-code').text(`+${country.calling_code}`);
    });
</script>
```

> The option is linked with data-country attribute that's contain more information about the country. [See more](https://github.com/rinvex/countries)
