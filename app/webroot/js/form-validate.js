$(document).ready
 (
 	 function()
 	 {
 	 	
 	 	 $("#PostAddForm").validate
 	 	 ( 
 	 	 	 {
 	 			 errorPlacement: function(error, element) 
 	 			 {
				 	if ( element.is(":radio") )
					error.appendTo( element.parent().next().next() );
					else if ( element.is(":checkbox") )
					error.appendTo ( element.next() );
					else
					error.appendTo( element.parent());
			     }
			   
			 }
			 
			 			 
		  );
		  
		  $("#phone").mask("(999) 999-9999");
		  
 	 } 
 	 ); 
 	 
 	 //"Accept terms" form submission- By Dynamic Drive
			//For full source code and more DHTML scripts, visit http://www.dynamicdrive.com
			//This credit MUST stay intact for use

			var checkobj

			function agreesubmit(el){
				checkobj=el
				if (document.all||document.getElementById){
					for (i=0;i<checkobj.form.length;i++){  //hunt down submit button
						var tempobj=checkobj.form.elements[i]
						if(tempobj.type.toLowerCase()=="submit")
							tempobj.disabled=!checkobj.checked
					}
				}
			}

			function defaultagree(el){
				if (!document.all&&!document.getElementById){
					if (window.checkobj&&checkobj.checked)
						return true
					else{
						alert("Please read/accept terms to submit form")
						return false
					}
				}
			}