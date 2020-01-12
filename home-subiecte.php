
<html>
 <head>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <title>Olimpiada nationala la matematica</title>
  &nbsp&nbsp&nbsp<center><body onload="startTime()">
<div id="txt"></div></center>
</head>
  <meta charset ="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1 ">
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 70%;
  text-align: center;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

body {font-family: Arial;
height :100%;
margin: 0;}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  display: inline-block;
  margin-top: 20px;
 
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;

}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 0px solid #ccc;
  border-top: none;
  height:100%;

}
.list-group-item {
    position: relative;
    display: inline;
    padding: .75rem 1.25rem;
    margin-bottom: -1px;
    background-color: #fff;
    border: 1px solid rgba(0,0,0,.125);
}

</style>

 <body background="imagini/onpic1.jpg" style="text-align: center">


<div name="subiecte">
<div class="container" style="margin-top: 50px" >
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-2">
			<div class="vertical-menu" style="min-width: 0; padding: 0; margin: 0;">
				<button type="button" class="btn btn-secondary aria-haspopup="true" aria-expanded="false" style="width:150px; height:50px; font-size:20px; background-color:#3498DB; border-color:#ffffff; min-width: 0; padding: 0; margin: 0;">
					Matematica
				</button>
						<button type="submit" id="matematica_clasa5" name="matematica_clasa5" class="list-group-item" style="width:150px; color:#3498DB;">
							<a href="subiecte/matematica/clasa5.pdf">
							<style type="text/css">
								#matematica_clasa5:hover{cursor:pointer;}
							</style>
							Clasa a 5-a
							</a>
						</button>
						
						<button type="submit" id="matematica_clasa6" name="matematica_clasa6" class="list-group-item" style="width:150px; color:#3498DB;">
							<a href="subiecte/matematica/clasa6.pdf">
							<style type="text/css">
								#matematica_clasa6:hover{cursor:pointer;}
							</style>
							Clasa a 6-a
							</a>
						</button>
						
						<button type="submit" id="matematica_clasa7" name="matematica_clasa7" class="list-group-item" style="width:150px; color:#3498DB;">
							<a href="subiecte/matematica/clasa7.pdf">
							<style type="text/css">
								#matematica_clasa7:hover{cursor:pointer;}
							</style>
							Clasa a 7-a
							</a>
						</button>
					
						<button type="submit" id="matematica_clasa8" name="matematica_clasa8" class="list-group-item" style="width:150px; color:#3498DB;">
							<a href="subiecte/matematica/clasa8.pdf">
							<style type="text/css">
								#matematica_clasa8:hover{cursor:pointer;}
							</style>
							Clasa a 8-a
							</a>
						</button>
						
						<button type="submit" id="matematica_clasa9" name="matematica_clasa9" class="list-group-item" style="width:150px; color:#3498DB;">
							<a href="subiecte/matematica/clasa9.pdf">
							<style type="text/css">
								#matematica_clasa9:hover{cursor:pointer;}
							</style>
							Clasa a 9-a
							</a>
						</button>
						
						<button type="submit" id="matematica_clasa10" name="matematica_clasa10" class="list-group-item" style="width:150px; color:#3498DB;">
							<a href="subiecte/matematica/clasa10.pdf">
							<style type="text/css">
								#matematica_clasa10:hover{cursor:pointer;}
							</style>
							Clasa a 10-a
							</a>
						</button>
						
						<button type="submit" id="matematica_clasa11" name="matematica_clasa11" class="list-group-item" style="width:150px; color:#3498DB;">
							<a href="subiecte/matematica/clasa11.pdf">
							<style type="text/css">
								#matematica_clasa11:hover{cursor:pointer;}
							</style>
							Clasa a 11-a
							</a>
						</button>
						
						<button type="submit" id="matematica_clasa12" name="matematica_clasa12" class="list-group-item" style="width:150px; color:#3498DB;">
							<a href="subiecte/matematica/clasa12.pdf">
							<style type="text/css">
								#matematica_clasa12:hover{cursor:pointer;}
							</style>
							Clasa a 12-a
							</a>
						</button>
				</div>
			</div>
	
			
			<div class="col-md-2">
			<div class="vertical-menu" style="min-width: 0; padding: 0; margin: 0;">
				<button type="button" class="btn btn-secondary aria-haspopup="true" aria-expanded="false" style="width:150px; height:50px; font-size:20px; background-color:#3498DB; border-color:#ffffff; min-width: 0; padding: 0; margin: 0;">
					Romana
				</button>
						<button type="submit" id="Romana_clasa5" name="Romana_clasa5" class="list-group-item" style="width:150px; color:#3498DB;">
							<a href="subiecte/romana/clasa5.pdf">
							<style type="text/css">
								#Romana_clasa5:hover{cursor:pointer;}
							</style>
							Clasa a 5-a
							</a>
						</button>
						
						<button type="submit" id="Romana_clasa6" name="Romana_clasa6" class="list-group-item" style="width:150px; color:#3498DB;">
							<a href="subiecte/romana/clasa6.pdf">
							<style type="text/css">
								#Romana_clasa6:hover{cursor:pointer;}
							</style>
							Clasa a 6-a
							</a>
						</button>
						
						<button type="submit" id="Romana_clasa7" name="Romana_clasa7" class="list-group-item" style="width:150px; color:#3498DB;">
							<a href="subiecte/romana/clasa7.pdf">
							<style type="text/css">
								#Romana_clasa7:hover{cursor:pointer;}
							</style>
							Clasa a 7-a
							</a>
						</button>
					
						<button type="submit" id="Romana_clasa8" name="Romana_clasa8" class="list-group-item" style="width:150px; color:#3498DB;">
							<a href="subiecte/romana/clasa8.pdf">
							<style type="text/css">
								#Romana_clasa8:hover{cursor:pointer;}
							</style>
							Clasa a 8-a
							</a>
						</button>
						
						<button type="submit" id="Romana_clasa9" name="Romana_clasa9" class="list-group-item" style="width:150px; color:#3498DB;">
							<a href="subiecte/romana/clasa9.pdf">
							<style type="text/css">
								#Romana_clasa9:hover{cursor:pointer;}
							</style>
							Clasa a 9-a
							</a>
						</button>
						
						<button type="submit" id="Romana_clasa10" name="Romana_clasa10" class="list-group-item" style="width:150px; color:#3498DB;">
							<a href="subiecte/romana/clasa10.pdf">
							<style type="text/css">
								#Romana_clasa10:hover{cursor:pointer;}
							</style>
							Clasa a 10-a
							</a>
						</button>
						
						<button type="submit" id="Romana_clasa11" name="Romana_clasa11" class="list-group-item" style="width:150px; color:#3498DB;">
							<a href="subiecte/romana/clasa11.pdf">
							<style type="text/css">
								#Romana_clasa11:hover{cursor:pointer;}
							</style>
							Clasa a 11-a
							</a>
						</button>
						
						<button type="submit" id="Romana_clasa12" name="Romana_clasa12" class="list-group-item" style="width:150px; color:#3498DB;">
							<a href="subiecte/romana/clasa12.pdf">
							<style type="text/css">
								#Romana_clasa12:hover{cursor:pointer;}
							</style>
							Clasa a 12-a
							</a>
						</button>
				</div>
				</div>
			
			<div class="col-md-2">
			<div class="vertical-menu" style="min-width: 0; padding: 0; margin: 0;">
				<button type="button" class="btn btn-secondary aria-haspopup="true" aria-expanded="false" style="width:150px; height:50px; font-size:20px; background-color:#3498DB; border-color:#ffffff; min-width: 0; padding: 0; margin: 0;">
					Biologie
				</button>
						<button type="submit" id="Biologie_clasa5" name="Biologie_clasa5" class="list-group-item" style="width:150px; color:#3498DB;">
							<a href="subiecte/biologie/clasa5.pdf">
							<style type="text/css">
								#Biologie_clasa5:hover{cursor:pointer;}
							</style>
							Clasa a 5-a
							</a>
						</button>
						
						<button type="submit" id="Biologie_clasa6" name="Biologie_clasa6" class="list-group-item" style="width:150px; color:#3498DB;">
							<a href="subiecte/biologie/clasa6.pdf">
							<style type="text/css">
								#Biologie_clasa6:hover{cursor:pointer;}
							</style>
							Clasa a 6-a
							</a>
						</button>
						
						<button type="submit" id="Biologie_clasa7" name="Biologie_clasa7" class="list-group-item" style="width:150px; color:#3498DB;">
							<a href="subiecte/biologie/clasa7.pdf">
							<style type="text/css">
								#Biologie_clasa7:hover{cursor:pointer;}
							</style>
							Clasa a 7-a
							</a>
						</button>
					
						<button type="submit" id="Biologie_clasa8" name="Biologie_clasa8" class="list-group-item" style="width:150px; color:#3498DB;">
							<a href="subiecte/biologie/clasa8.pdf">
							<style type="text/css">
								#Biologie_clasa8:hover{cursor:pointer;}
							</style>
							Clasa a 8-a
							</a>
						</button>
						
						<button type="submit" id="Biologie_clasa9" name="Biologie_clasa9" class="list-group-item" style="width:150px; color:#3498DB;">
							<a href="subiecte/biologie/clasa9.pdf">
							<style type="text/css">
								#Biologie_clasa9:hover{cursor:pointer;}
							</style>
							Clasa a 9-a
							</a>
						</button>
						
						<button type="submit" id="Biologie_clasa10" name="Biologie_clasa10" class="list-group-item" style="width:150px; color:#3498DB;">
							<a href="subiecte/biologie/clasa10.pdf">
							<style type="text/css">
								#Biologie_clasa10:hover{cursor:pointer;}
							</style>
							Clasa a 10-a
							</a>
						</button>
						
						<button type="submit" id="Biologie_clasa11" name="Biologie_clasa11" class="list-group-item" style="width:150px; color:#3498DB;">
							<a href="subiecte/biologie/clasa11.pdf">
							<style type="text/css">
								#Biologie_clasa11:hover{cursor:pointer;}
							</style>
							Clasa a 11-a
							</a>
						</button>
						
						<button type="submit" id="Biologie_clasa12" name="Biologie_clasa12" class="list-group-item" style="width:150px; color:#3498DB;">
							<a href="subiecte/biologie/clasa12.pdf">
							<style type="text/css">
								#Biologie_clasa12:hover{cursor:pointer;}
							</style>
							Clasa a 12-a
							</a>
						</button>
				</div>
			</div>
			
</div>
</div>
</div>
</body>
</html> 

