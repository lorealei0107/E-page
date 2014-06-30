(function()
{
 "use strict";
 /*
   hook up event handlers 
 */
 function register_event_handlers()
 {
    
    
         $(".uib_w_13").click(function(evt)
        {
         activate_subpage("#uib_page_signin"); 
        });
        $("#go_btn").click(function(evt)
        {
         activate_subpage("#uib_page_signin"); 
        });
        $(".uib_w_27").click(function(evt)
        {
         activate_subpage("#uib_page_signup"); 
        });
        $(".uib_w_28").click(function(evt)
        {
         activate_subpage("#uib_page_signin"); 
        });
}
 $(document).ready(register_event_handlers);
})();
