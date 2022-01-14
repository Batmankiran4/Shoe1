(function($) {
  $.fn.savy = function(order,fn) {
    const sv = "savy-";
    if (order == "load") {
      $(this).each(function() {
        if ($(this).is(":radio")) {
          if(localStorage.getItem(sv+$(this).attr("name"))){
            if (localStorage.getItem(sv+$(this).attr("name")) == this.id) {
              this.checked = true;
            }else{
              this.checked = false
            }
          }
          
          }
        }
      };
      if ($.isFunction(fn)){fn();}
      if ($.isFunction(fn)){fn();}
    }else{
      console.error("savy action not defined please use $('.classname').savy('load') to trigger savy to save all inputs")
    }
  };
})(jQuery);
