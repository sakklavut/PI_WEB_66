$(document).ready(function() {
     $("#small").click(function() {
         $("div,a,p,button,ol,ul,li,h1,h2,h3,h4,h5,h6,form,input,label,iframe,table,tr,td,textarea,span")
             .children().each(function() {
                 var fontsize = parseInt($(this).css("font-size"));
                 fontsize = fontsize - 2 + "px";
                 $(this).css({
                     'font-size': fontsize
                 });
             }
         );
     });
 });
 $(document).ready(function() {
     $("#normal").click(function() {
         $("div,a,p,button,ol,ul,li,h1,h2,h3,h4,h5,h6,form,input,label,iframe,table,tr,td,textarea,span")
             .children().each(function() {
                 var fontsize = parseInt($(this).css("font-size"));
                 fontsize = "" 
                 $(this).css({
                     'font-size': fontsize
                 });
             }
         );
     });
 });
 $(document).ready(function() {
     $("#large").click(function() {
         $("div,a,p,button,ol,ul,li,h1,h2,h3,h4,h5,h6,form,input,label,iframe,table,tr,td,textarea,span")
             .children().each(function() {
                 var fontsize = parseInt($(this).css("font-size"));
                 fontsize = fontsize + 2 + "px";
                 $(this).css({
                     'font-size': fontsize
                 });
             }
         );
     });
 });