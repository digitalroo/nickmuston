jQuery(document).ready(function($) {
    if( acf.fields.color_picker ) {
        $(document).on('acf/setup_fields', function(e) {
            var palette = [#ffffff,#000000];
            $(acf.fields.color_picker.$input).iris('option', 'palettes', palette);
        });
    }
});