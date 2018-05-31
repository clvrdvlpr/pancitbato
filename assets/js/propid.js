$(document).ready(function(){

	$("#searchresults").hide(function(){
		$("#searchbtn").click(function(){
			$("#dashboard").fadeOut(function(){
				$("#searchresults").fadeIn();
					var searchval = $('#searchval').val();
					
					$.ajax({
							type: "GET",
							url: "search_p", 
							data: {"searchval":searchval},
							dataType: 'json',
							success: function(data){

								if(data.datap == ""){
									$('#loader').show();
									// $("#searchresults").fadeIn(function(){
									$("#psearchnum").html("No record found!");
									$("#propresultbodyno").html("<h4>No Results</h4>");
									// });
									
								}
								else {
									$('#loader').show();
									for ( var i = 0; i < Object.keys(data.datap).length + 1; i++ ) {
										if(i == 1){
											$("#propresultbody").attr("href", function(i, href) {
												  return 'http://localhost/ria/resmain/resviewclick/' + data.datap[i].proposal_id;
											});
											// $("#propresultbody").attr("href","http://localhost/ria/resmain/resviewclick/");
											$("#psearchnum").html(Object.keys(data.datap).length + " record found!");
											$("#propresultbody").append("<a><b>" + data.datap[i].proposal_id + "</b> : " + data.datap[i].p_title + "</a><br />");

											
											// var titleurl = "http://localhost/ria/resmain/resviewclick/" + data.datap[i].proposal_id;
											

										}
										else{
											$("#propresultbody a").attr("href", function(i, href) {
												  return 'http://localhost/ria/resmain/resviewclick/' + data.datap[i].proposal_id;
											});
											$("#psearchnum").html(Object.keys(data.datap).length + " records found!");
											$("#propresultbody").append("<a><b>" + data.datap[i].proposal_id + "</b> : " + data.datap[i].p_title + "</a><br />")
										}
									}
								}
								// alert(data.datap[i].p_title);
								// alert(Object.keys(data.datap).length);
								
							}
							

					});
			});
			
		});
	});
	
	// $("#maincont").hide();
	// $("#propyearval").change(function(){
	// 	// var year = $(this).val();
	// });

});