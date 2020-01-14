<!DOCTYPE html>
<html>
<style type="text/css">
	.po{
	display: inline-block;
	width: 24%;
	height: 13em;
	border: 0px solid black;
position: fixed;
	margin-right: 1em;
	margin-left: -2em;
	margin-top: 9em;
	font-size: 1.4em;
	text-align: left;
}
.roar ul ol{
	width: 60%;
	height: 1.5em;
	border-radius: 4px;
    margin-top: .5em;
}
.roar ul ol:hover{
	border-left: 5px solid orange;
	border-right: 5px solid orange;
}
.roar ul ol.pol{
	width: 80%;
}
.roar ul a{
	text-decoration: none;
	color: black;
} 
@media screen and (max-width: 700px ){
	.po{
		display: none;
	}
}
 
@media (min-width: 700px ) and (max-width: 924px){
	.roar ul ol{
		width: 120%;
	}
	.roar ul ol.pol{
		width:100%;
	}
}
@media (min-width: 925px ) and (max-width: 1271px){
	.roar ul ol{
		width: 80%;
	}
	.roar ul ol.pol{
		width:60%;
	}
}
</style>
<body>
<div class="po">
	<div class="roar">
	<ul>
		<ol><a href="#1" style="color: navy;">Introduction</a></ol>
        <ol><a href="#2" style="color: navy;">Theory</a></ol>
        <ol><a href="#3" style="color: navy;">Objective</a></ol>
        <ol><a href="#4" style="color: navy;">Manual</a></ol>
        <ol><a href="#5" style="color: navy;">Procedure</a></ol>
        <ol class="pol"><a href="#6" style="color: navy;">Further Reference</a></ol>
        <ol><a href="simulator\Math_sim.php" style="color: navy;">Simulator</a></ol>
	</ul>
</div>
</div>
</body>
</html>