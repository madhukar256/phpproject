<div class="row">
	<div class="col-xs-12">
		<article>
			<h1>Dashboard</h1>
			<h2>Welcome to hotel leo group admin panel</h2>			
		</article>
		
		
	</div>
</div>
<script>
function formvalidate(){
	var oldpass =  document.getElementById("oldp").value;
	var newpass =  document.getElementById("newp").value;
	var conpass =  document.getElementById("conp").value;
	if(oldpass != ""){
		document.getElementById("newp").required = true;
		document.getElementById("conp").required = true;
		if(newpass != conpass){
			alert("New and Confirm password does not match !!!!");
			return false;
		}
		else
		{
			document.getElementById("myForm").submit();
		}
	}
	else
	{
		document.getElementById("myForm").submit();
	}
}
</script>
			
		