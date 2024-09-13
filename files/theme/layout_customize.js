/* Added For the Custom Responsive Layout */
		(function(jQuery) {
				
			jQuery.noConflict();        
			$ = jQuery; 
			
			function replaceTable(){

					window_width = parseInt($(window).width()); 
					if (window_width <= 768) {
						if ( $("div.wsite-multicol-table-wrap > table.wsite-multicol-table").length > 0 ) {
							
							mine = $("div.wsite-multicol-table-wrap > table.wsite-multicol-table");
							
							mine.each(function(i){
								
								new_div = $("<div id='wsite-multicol-table_"+i+"' class='wsite-multicol-table'></div>"); 
							
								$(this).after(new_div);
							
								$(this).find("td").each(function(){
									contents = $(this).html(); 
									new_div.append ("<div class='wsite-multicol-col'>"+contents+"</div>");
								}); 
								$(this).remove();	
								
							});
							
							
						}
					}
					else {

						if ( $("div.wsite-multicol-table-wrap > div.wsite-multicol-table").length > 0 ) {
							
							mine = $("div.wsite-multicol-table-wrap > div.wsite-multicol-table");
							
							mine.each(function(i)	{
								
								var my_index = i; 
								
								current_wrapper = $(this); 
								
								var new_table  = $("<table id='new_table_"+my_index+"'></table>"); 
								
								current_wrapper.after(new_table);
								
								$("#new_table_"+i).append("<tbody class='wsite-multicol-tbody'></tbody>"); 
								
								$("#new_table_"+i).find("tbody").append("<tr class='wsite-multicol-tr'></tr>"); 
								
								$(this).find(">div").each(function(){
									contents = $(this).html(); 
									if (my_index == 1)	{ $("#new_table_" + my_index).find("tr").append ("<td class='wsite-multicol-col' style='width:50%;padding:0 15px' >"+contents+"</td>");}
									else 				{ $("#new_table_" + my_index).find("tr").append ("<td class='wsite-multicol-col' style='width:25%;padding:0 15px' >"+contents+"</td>");	 }
								}); 
								
								$("#new_table_"+i).after("<div style='clear:both'></div>") ; 
								
								current_wrapper.remove(); 
							}); 
						}
					}
					
				}
				$(window).resize(function(){replaceTable();});
				replaceTable(); 
			
		})(jQuery);
		/* End of the Custom Code For Responsive Layout */