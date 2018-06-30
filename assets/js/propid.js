$(document).ready(function(){

	$("#searchresults").hide(function(){
		$("#searchbtn").click(function(){
			$("#dashboard").fadeOut(function(){
				$("#searchresults").fadeIn();
					var psearchval = $('#searchval').val();
					var rsearchval = $('#searchval').val();
					// alert(psearchval);
					// alert(rsearchval);
					$.ajax({
						type: "GET",
						url: "search_p", 
						data: {"psearchval":psearchval},
						dataType: 'json',
						success: function(data){
							// alert(data.datap[0].proposal_id);
							if(data.datap == ""){
								// $("#searchresults").fadeIn(function(){
								$("#psearchnum").html("No record found!");
								$("#propresultbodyno").html("<h4>No Results</h4>");
								// });
								
							}
							else {
								for ( var i = 0; i < Object.keys(data.datap).length + 1; i++ ) {
									if(i == 1){
										$("#propresultbody a").attr("href", function(i, href) {
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
										$("#propresultbody").append("<a><b>" + data.datap[i].proposal_id + "</b>: " + data.datap[i].p_title + "</a><br />");
									}
								}
							}
						}
					});
					$.ajax({
						type: "GET",
						url: "search_r", 
						data: {"rsearchval":rsearchval},
						dataType: 'json',
						success: function(data){
							// alert(data.datar[0].researcher_id);
							if(data.datar == ""){
								$("#rsearchnum").html("No record found!");
								$("#resresultbodyno").html("<h4>No Results</h4>");
							}
							else {
								for ( var i = 0; i < Object.keys(data.datar).length + 1; i++ ) {
									if(i == 1){
										$("#resresultbody a").attr("href", function(i, href) {
											  return 'http://localhost/ria/resmain/profileview/' + data.datar[i].researcher_id;
										});
										// $("#propresultbody").attr("href","http://localhost/ria/resmain/resviewclick/");
										$("#rsearchnum").html(Object.keys(data.datar).length + " record found!");
										$("#resresultbody").append("<a><b>" + data.datar[i].tup_id + "</b> : " + data.datar[i].fname + " " + data.datar[i].mi + " " + data.datar[i].lname + "</a><br />");
									}
									else{
										alert("YES");
										$("#resresultbody a").attr("href", function(i, href) {
											  return 'http://localhost/ria/resmain/profileview/' + data.datar[i].researcher_id;
										});
										$("#rsearchnum").html(Object.keys(data.datar).length + " records found!");
										$("#resresultbody").append("<a><b>" + data.datar[i].tup_id + "</b> : " + data.datar[i].fname + " " + data.datar[i].mi + " " + data.datar[i].lname + "</a><br />");
									}
								}
							}
						}
					});
					
			});
			
		});
	});

});