 $(document).ready(function() {

    $('select[name="product"]').on('change', function(){
        var productId = $(this).val();
        if(productId) {
            $.ajax({
                url: '/states/get/'+productId,
                type:"GET",
                dataType:"json",
                beforeSend: function(){
                    $('#loader').css("visibility", "visible");
                },

                success:function(data) {

                    $('select[name="category"]').empty();

                    $.each(data, function(key, value){

                        $('select[name="category"]').append('<option value="'+ key +'">' + value + '</option>');

                    });
                },
                complete: function(){
                    $('#loader').css("visibility", "hidden");
                }
            });
        } else {
            $('select[name="category"]').empty();
        }

    });

});