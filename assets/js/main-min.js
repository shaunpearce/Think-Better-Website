$(document).ready(function(){function o(){var o=$(window).width(),e=$(".services-container");o>991&&void 0!==e.data("owlCarousel")?(e.removeClass("owl-carousel"),$(".services-container").each(function(){var o="#"+this.id;$(o).data("owlCarousel").destroy()})):o<991&&e.owlCarousel({loop:!1,margin:10,nav:!1,dots:!0,autoHeight:!0,responsive:{0:{items:1},767:{items:1},768:{items:1}}})}$(".mobile-menu-button").click(function(){$(".mobile-menu-container").toggleClass("open")}),$(".better-points-container").owlCarousel({loop:!1,margin:10,nav:!1,dots:!0,responsive:{0:{items:1},767:{items:1},768:{items:3}}}),$("a").on("click",function(o){if(""!==this.hash&&$(this.hash).offset()){o.preventDefault();var e=this.hash;$("html, body").animate({scrollTop:$(e).offset().top},800,function(){window.location.hash=e})}}),jQuery.fn.exists=function(){return this.length>0},$(".services-container").exists()&&($(document).ready(o),$(window).resize(o)),$(".events-container").owlCarousel({loop:!1,margin:10,nav:!1,dots:!0,responsive:{0:{items:1},600:{items:1},1e3:{items:1}}}),$("#home-header-video").magnificPopup({type:"inline"});var e=function o(e){var t=decodeURIComponent(window.location.search.substring(1)),s=t.split("&"),i,n;for(n=0;n<s.length;n++)if(i=s[n].split("="),i[0]===e)return void 0===i[1]||i[1]},t=e("fc");$("#contact-form-fields").show(),$("#contact-form-perch-success").hide(),"phs"===t?($("#contact-form-fields").hide(),$("#contact-form-perch-success").show()):($("#contact-form-fields").show(),$("#contact-form-perch-success").hide());var s=e("fb");$("#booking-form-fields").show(),$("#booking-form-pay-success").hide(),$("#booking-form-perch-success").hide(),"pls"===s?($("#booking-form-fields").hide(),$("#booking-form-pay-success").show(),$("#booking-form-perch-success").hide()):"phs"===s?($("#booking-form-fields").hide(),$("#booking-form-pay-success").hide(),$("#booking-form-perch-success").show()):($("#booking-form-fields").show(),$("#booking-form-pay-success").hide(),$("#booking-form-perch-success").hide()),$("#pay-button-full").show(),$("#pay-button-half").hide(),$("#pay-button-pod").hide(),$(".perch-form-people-select").prepend('<option selected="selected" disabled value="">Number of people</option>'),$("#workshop-selection").on("change",function(){$(".quantity-select").val($(".quantity-select option:first").val()),$(".total-amount").html("0"),"full"===this.value?($("#pay-button-full").show(),$("#pay-button-half").hide(),$("#pay-button-pod").hide(),$("#workshop-details-full").val($("#workshop-selection option:selected").text())):"half"===this.value?($("#pay-button-full").hide(),$("#pay-button-half").show(),$("#pay-button-pod").hide(),$("#workshop-details-half").val($("#workshop-selection option:selected").text())):"pod"===this.value&&($("#pay-button-full").hide(),$("#pay-button-half").hide(),$("#pay-button-pod").show())}),$(".quantity-select").on("change",function(){$(".total-amount").html(this.value)}),$(".reset-form-button").click(function(){var o=window.location.href.split("?")[0];window.location.href=o+window.location.hash})});