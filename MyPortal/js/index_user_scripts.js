(function()
{
 "use strict";
 /*
   hook up event handlers 
 */
 function register_event_handlers()
 {
    
    
         
        
        
        
        
        $("#home_btn").click(function(evt)
        {
         activate_subpage("#mainsub"); 
        });
        $(".uib_w_21").click(function(evt)
        {
         /* Other possible functions are: 
           uib_sb.open_sidebar($sb)
           uib_sb.close_sidebar($sb)
           uib_sb.toggle_sidebar($sb)
            uib_sb.close_all_sidebars()
          See js/sidebar.js for the full sidebar API */
        
         uib_sb.toggle_sidebar($(".uib_w_10"));  
        });
        $("#accountant_btn").click(function(evt)
        {
        /* your code goes here */ 
        });
        $("#bookkeeper_btn").click(function(evt)
        {
        /* your code goes here */ 
        });
        $("#admin_btn").click(function(evt)
        {
        /* your code goes here */ 
        });
        $("#staff_btn").click(function(evt)
        {
        /* your code goes here */ 
        });
        $("#email_us").click(function(evt)
        {
         /* Other options: .modal("show")  .modal("hide")  .modal("toggle")
         See full API here: http://getbootstrap.com/javascript/#modals 
            */
        
         $("#bs-modal-0").modal("toggle");  
        });
}
 $(document).ready(register_event_handlers);
})();
