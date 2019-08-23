<!DOCTYPE html>
<html>
<?php
$header = array();
$header [] = 'Authorisation: Token eyJhbGciOiJIUzUxMiJ9.eyJzdWIiOiJhZG1pbiIsInBhc3N3b3JkIjoiMTIzIn0.HF6Va3g3GkDBZjEOjjC91V3obrZlhXc_vUMax5rqRa8EzqBg96Rb8D7FZP5e4s-fP8ZfHRxWD_-D1zXnbpstrA';
 $client = curl_init();

// curl_setopt($client,CURLOPT_URL,'https://app.icraftsoft.net:9090/rest/user');
   curl_setopt($client,CURLOPT_HTTPHEADER,$header); ?>

  <style>
table {
  border-collapse: collapse;
  width: 80%;
  margin-top: 10em;
}

th, td {
  text-align: left;
  padding: 8px;

}

tr:nth-child(even){background-color: #f2f2f2}

tr {
 /* background-color: #4caf50;
  color: #4caf50;*/
  background-color: #4caf50;
  text-decoration-style: bold;
}
</style>
<head>
	<title></title>
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
 
</head>
<body>
<div>
 <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      
      <div class="logo">
      
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item  ">
            <a class="nav-link" href="#">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="#">
              <i class="material-icons">person</i>
              <p>My Profile</p>
            </a>
          </li>
         <li class=" ">
            <a class="nav-link" href="#">
              <i class="material-icons">content_paste</i>
              <p>User List</p>
            </a>
        
          <li class="nav-item ">
            <a class="nav-link" href="#">
              <i class="material-icons">notifications</i>
              <p>Notifications</p>
            </a>
          </li>
       
        </ul>
      </div>
    </div>
    </div>

<div id="mydiv" style="margin-left: 20em;">
	

        <script type="text/javascript">
  
  const request = new XMLHttpRequest();
 
request.open('GET', 'https://app.icraftsoft.net:9090/rest/user');
request.send(); 
 
request.onload = () => {
  if (request.status === 200) {
    console.log("Success"); // So extract data from json and create table
    
    //Extracting data
    var id = JSON.parse(request.response).value.id;
    var name = JSON.parse(request.response).value.name;
    var address = JSON.parse(request.response).value.address;
    var email= JSON.parse(request.response).value.email;
    
    //Creating table
    var table="<table>";
  table+="<tr><td>Id</td><td>Name</td><td>Address</td><td>Email</td></tr>"; 
  table+="<tr><td>"+id+"</td><td>"+name+"</td><td>"+email+"</td><td>"+address+"</td></tr>";
  table+="</table>";
 
    //Showing the table inside table
    document.getElementById("mydiv").innerHTML = table;   
  } 
};
 
request.onerror = () => {
  console.log("error")
};



</script>
</div>
</body>

</html>