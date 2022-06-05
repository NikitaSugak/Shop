$(function () {
    $('#productType').on('change', function () {
        var value = $(this).val();
        $('#attributesItem').text("");
        switch (value) {
            case 'disc':
                $('#attributesItem').append("Size (MB)<input required type='number' name='size' id='size'><br />");
                $('#attributesItem').append("Please, provide size");
                break;
            case 'book':
                $('#attributesItem').append("Weight (KG)<input required type='number' name='weight' id='weight'><br />");
                $('#attributesItem').append("Please, provide weight");
                break;
            case 'furniture':
                $('#attributesItem').append("Height (CM)<input required type='number' min='1' name='height' id='height'><br />");
                $('#attributesItem').append("Width (CM)<input required type='number' min='1' name='width' id='width'><br />");
                $('#attributesItem').append("Lenght (CM)<input required type='number' min='1' name='length' id='length'><br />");
                $('#attributesItem').append("Please, provide dimensions");
                break;
        }
    });
});