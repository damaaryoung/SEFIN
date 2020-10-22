$(document).ready(function(){
    $(".preloader").fadeOut(1000);
    
    $('.menuClick').click(function (){
        var data = $(this).data('id');
        console.log('CLICK MENU: '+data);
        $.ajax({
            type: "post",
            url: "bi_checking",
            data: "menu_akses="+data,
            dataType: "json",
            success: function (response) {
                
            }
        });
    })
})