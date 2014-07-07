(function()
{
 "use strict";
 /*
   hook up event handlers 
 */
 function register_event_handlers()
 {
    
    
         $("#acct_btn").click(function(evt)
        {
         activate_subpage("#uib_page_accountant"); 
        });
        $("#bkp_btnr").click(function(evt)
        {
         activate_subpage("#uib_page_bookkeeper"); 
        });
        $("#staff_btn").click(function(evt)
        {
         activate_subpage("#uib_page_staff"); 
        });
        $("#admn_btn").click(function(evt)
        {
         activate_subpage("#uib_page_admin"); 
        });
        $("#maint_btn").click(function(evt)
        {
         activate_subpage("#uib_page_maintenance"); 
        });
        $("#left_hide").click(function(evt)
        {
         /* Other possible functions are: 
           uib_sb.open_sidebar($sb)
           uib_sb.close_sidebar($sb)
           uib_sb.toggle_sidebar($sb)
            uib_sb.close_all_sidebars()
          See js/sidebar.js for the full sidebar API */
        
         uib_sb.toggle_sidebar($(".uib_w_3"));  
        });
        $("#right_hide").click(function(evt)
        {
         /* Other possible functions are: 
           uib_sb.open_sidebar($sb)
           uib_sb.close_sidebar($sb)
           uib_sb.toggle_sidebar($sb)
            uib_sb.close_all_sidebars()
          See js/sidebar.js for the full sidebar API */
        
         uib_sb.toggle_sidebar($(".uib_w_4"));  
        });
        $("#coa_btn").click(function(evt)
        {
         activate_subpage("#uib_page_accounts"); 
        });
        $("#audit_btn").click(function(evt)
        {
         activate_subpage("#uib_page_audit"); 
        });
        $("#report_btn").click(function(evt)
        {
         activate_subpage("#uib_page_reports"); 
        });
        $("#process_btn").click(function(evt)
        {
         activate_subpage("#uib_page_process"); 
        });
}
 $(document).ready(register_event_handlers);
})();
