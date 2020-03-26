<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
      </head>
    <body>

        <div class="container" style="background-color: white">
            <nav class="navbar navbar-dark bg-primary">
                <a class="navbar-brand" href="#">Pangkalanbun-Dev created with &hearts;</a>
            </nav>
            <div class="jumbotron">
                <h1 class="display-4">Informasi Kasus Corona virus(covid-19) Indonesia</h1>
                <p class="lead">
                  @foreach ($total as $item)
                  
                    <div class="alert alert-light" role="alert" style="width: 100%">
                      <marquee width="">
                      <h4> <b>Total Kasus   <i class="alert alert-warning" role="alert"> Positif  : {{$item['positif']}} </i> &nbsp;&nbsp;<i class="alert alert-success" role="alert"> Sembuh : {{$item['sembuh']}} </i> &nbsp;&nbsp; <i class="alert alert-danger" role="alert"> Meninggal : {{$item['meninggal']}}</i></b></h4>
                    </marquee>
                    </div>
                  
                  @endforeach
                 
              </p>
                <hr class="my-4">
                <div class="container" >
                  <table id="myTable" class="table" >
                          <thead>
                            <tr>
                              
                              <th>Provinsi</th>
                              <th>Positif</th>
                              <th>Sembuh</th>
                              <th>Meninggal</th>
                            </tr>
                          </thead>
                          <tbody>
                          @foreach ($data as $datas)   
                            <tr>
                             
                              <td>{{ $datas['attributes']['Provinsi'] }}</td>
                              <td>{{ $datas['attributes']['Kasus_Posi'] }}</td>
                              <td>{{ $datas['attributes']['Kasus_Semb'] }}</td>
                              <td>{{ $datas['attributes']['Kasus_Meni'] }}</td>
                            </tr>
                          @endforeach 
                          </tbody>
                        </table>
          </div>
            </div>
        </div>

       

        <!-- jQuery -->
        <script src="//code.jquery.com/jquery.js"></script>
        <!-- DataTables -->
        <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>


        <script>
          $(document).ready( function () {
    $('#myTable').DataTable({
      responsive: true,
      columnDefs: [
        { responsivePriority: 1, targets: 0 },
        { responsivePriority: 2, targets: -1 }
    ]});
} );
          </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>