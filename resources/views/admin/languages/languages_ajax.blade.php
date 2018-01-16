<script>
    (function () {
        var language = $('#mainTable tr td');

        language.bind("change", function() {
            var changed_value = $(this).text();
            var type = $(this).data('tttype');
            var language_id = $(this).parent().data('ttlanguageid');
            $.ajax({
                method: "POST",
                dataType: 'json',
                url: '{{ route('admin_languages_update') }}',
                data: {
                    id: language_id,
                    key: type,
                    value: changed_value
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (response) {
                    console.log(response);
                },
                error: function (response) {
                    console.log(response);
                }
            });
        });
    })();
</script>
