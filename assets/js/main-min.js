$(document).ready(function(){$(".maf_element").on("click",function(){let e={action:"open_details",maf_id:$(this).data("id")};$.ajax({type:"POST",url:"/wp-admin/admin-ajax.php",data:e,beforeSend:function(){},success:function(e){e.success&&($("#popup-details .content").html(e.html),$("#popup-details").show())}})}),$("#popup_details .close").on("click",function(){$("#popup-details").hide()}),$(".header__burger").click(function(e){$(".header__burger").toggleClass("active"),$(".header").toggleClass("active"),$("body").toggleClass("hidden"),$(".main_nav").slideToggle()}),$("body").on("click",".link-to",function(e){e.preventDefault();var t=$(this).attr("href"),n=$(t).offset().top;$("body,html").animate({scrollTop:n},900)}),document.addEventListener("wpcf7mailsent",function(e){setTimeout(()=>{location="/thank-you"},300)},!1)});