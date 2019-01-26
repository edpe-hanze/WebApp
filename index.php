<!DOCTYPE html>
<html>

<head>
    <title>Raspberry pi - Azure</title>

    <!--Jquey 3.2.1 min-->
  	 <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!--Bootstrap-->
  	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!--Google API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <!--Style sheet-->
     <link rel="stylesheet" type="text/css" href="style.css">


</head>

<body>
  <div class="container-fluid w-100">
    <!--Top LOGO-->
    <div class="justify-content-center">
      <img id="logo-main"src="[image path]" class="img-fluid" alt="">
    </div>
    <!--Nav bar-->
    <div class="container w-75">
      <nav class="navbar navbar-light navbar-expand-md justify-content-center w-100">
        <div class="navbar justify-content-between align-items-center w-100">
          <ul class="navbar-nav nav-justified text-center w-100">
            <li class="nav-item gageli">
              <a class="nav-link gage" href="">CURRENT</a>
            </li>
            <li class="nav-item graphli">
              <a class="nav-link graph" href="">GRAPH</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <!--Gages-->
    <div class="container" id="gage_div">
      <div class="row justify-content-center">
        <div id="gage"></div>
      </div>
      <div class="row justify-content-center">
        <h3 id="time"></div>
      </div>
    </div>
    <!--Graphs-->
    <div class="container" id="graph_div">
      <div class="row justify-content-center">
        <div id="chart"></div>
      </div>
    </div>
  </div>

      <!--Navigation and Charts javascript-->
    <!--Navigation and charts are all being done is separete .JS files-->
      <script type="text/javascript" src="charts.js"></script>
       <script type="text/javascript" src="navigation.js"></script>

</body>

</html>
