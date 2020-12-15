<script>
    $(document).ready(function() {
        const selector = '.akhaled-select-country';

        $(selector).select2({
            placeholder: "Select a country",
        }).on('select2:opening', function(e) {
            $(this).data('select2').$dropdown.find(':input.select2-search__field').attr('placeholder', 'Search..')
        });
        // $(document).delegate(selector, 'select2:select', whenOptionSelected)
    });

    function whenOptionSelected(e) {
        if (!e || !e.params || !e.params.data || !e.params.data.element) return console.error(
            'Cannot find option element');

        // event.country = $(e.params.data.element).data('country');

        if ('createEvent' in document) {
            var event = new CustomEvent('country:change', {
                    country: $(e.params.data.element).data('country')
                })

            this.addEventListener('country:change', function (e) {
                console.log(e)
            }, false);

            this.dispatchEvent(event);
        }
    }

</script>
