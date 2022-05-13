//Search
$(function () {


    $('#search1').bind("change keyup input click", function () {
        if (this.value.length >= 1) {
            $.ajax({
                type: "POST",
                url: "search/HideSeek.php",
                data: {'search': this.value},
                response: 'text',
                success: function (data) {
                    $(".display").html(data).fadeIn();
                    $(".display li").addClass(function (index, currentClassName) {
                        if (!currentClassName) {
                            return 'list-group-item';
                        }
                    });
                }
            })
        }
    })
})


$(document).ready(function(){
	$(".vkl").click(function(){
		$(".closeinfo").removeClass("closeinfo").addClass("openifo");
		$(".vkl").removeClass("vkl").addClass("closeinfo"); 
	});
});


