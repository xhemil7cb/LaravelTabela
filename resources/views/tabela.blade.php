
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<style>

.table{
    font-size: 10;
}

.my-custom-scrollbar {
position: relative;
height: 80%;
width:80%;
overflow: auto;
}
.table-wrapper-scroll-y {
display: 100%;
}
</style>

</head>
    <body>


        

        <div>
            <form action="{{url('/Raportet')}}" method="post">
                @csrf

                @foreach ($kolonat as $kolona)
                <input type="text" name="{{ $kolona }}" placeholder="{{ $kolona }}"/>
                @endforeach
                
                <input type="submit">
            </form>
        </div>


        <div style="margin: auto" class="table-wrapper-scroll-y my-custom-scrollbar">
        <table class="table table-bordered table-striped mb-0">
            <thead>
              <tr>
                  @foreach ($kolonat as $kolona)
                  <th scope="col">{{ $kolona }}</th>
                  @endforeach
              </tr>
            </thead>
            <tbody>

                @foreach ($raportet as $raport)
                <tr>
                @foreach ($raport as $key=>$value)

                <td> {{ $value }} </td>
               
                    
                @endforeach
                 </tr>
                
                @endforeach

              
              
            </tbody>
          </table>
        </div>
    </body>

</html>
