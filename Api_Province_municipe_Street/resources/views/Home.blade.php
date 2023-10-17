
<x-app-layout>
  



    <p>
 

  <div class="col-10 mb-3 container mt-4">

  <a class="btn  btn-primary btn-sm btn-block" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
  Provincias
  </a>
 </div>
 
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
  <h2 class="text-center mt-2">Provincias</h2>
  <div class="container jumbotron jumbotron-fluid mt-5 bg-secondary">
       
       <div class="container">
         
           <table class="table">
               <thead>
                 <tr>
                   <th scope="col">id</th>
                   <th scope="col">Provincias</th>
                   <th scope="col">Acção</th>
                 </tr>
               </thead>
             
              
               
               <tbody>
              @if(isset($Province))
                @foreach($Province as $pro)
                 <tr>
                   <td scope="row" class="text-white">{{$pro->id}}</td>
                   <td class="text-white" >{{$pro->provincia}}</td>
                    <td>
                    <a href="#" class="btn btn-success">Editar</a>
                    </td>
                    <td>
                    <a href="#" class="btn btn-danger">Apagar</a>
                    </td>
                    <td>
                    <a href="#" class="btn btn-info">Info</a>
                    </td>
                 </tr>
                 
                 @endforeach
                 @endif
              
               </tbody>
          
          
             </table>
       </div>
     </div>
  </div>
</div>




<div class="col-10 mb-3 container">

<a class="btn  btn-primary btn-sm btn-block" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
Municipios
</a>
</div>

</p>
<div class="collapse" id="collapseExample1">
<div class="card card-body">

      <h2 class="text-center mt-2">Municipios</h2>
      <div class="container jumbotron jumbotron-fluid mt-5 bg-secondary">
         
          <div class="container">
            
              <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">id</th>
                      <th scope="col">Provincias</th>
                      <th scope="col">Municipios</th>
                      <th scope="col">Acção</th>
                    </tr>
                  </thead>
                  <tbody>
                  @if(isset($municipe))
                  @foreach($municipe as $mun)
                 <tr>

                 <td scope="row" class="text-white">{{$mun->id}}</td>
                
                   <td class="text-white" >{{$mun->provincia}}</td>
              
                   <td class="text-white" >{{$mun->municipio}}</td>
                   
                    <td>
                    <a href="#" class="btn btn-success">Editar</a>
                    </td>
                    <td>
                    <a href="#" class="btn btn-danger">Apagar</a>
                    </td>
                    <td>
                    <a href="#" class="btn btn-info">Info</a>
                    </td>
                 </tr>
                 
                 @endforeach
                 @endif
                  </tbody>
                </table>
          </div>
        </div>
        </div>
        </div>
        <div class="col-10 mb-3 container">

<a class="btn  btn-primary btn-sm btn-block" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
Distritos / Comunas
</a>
</div>

</p>
<div class="collapse" id="collapseExample2">
<div class="card card-body">
        <h2 class="text-center mt-2">Distritos / Comunas</h2>
        <div class="container jumbotron jumbotron-fluid mt-5 bg-secondary">
           
            <div class="container">
              
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">id</th>
                        <th scope="col">Provincia</th>
                        <th scope="col">Municipios</th>
                        <th scope="col">Distrito/Comuna</th>
                        <th scope="col">Acção</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                      @if(isset($distrito))
                  @foreach($distrito as $dist)
                      
                 <td scope="row" class="text-white">{{$dist->id}}</td>
                 <td class="text-white" >{{$dist->provincia}}</td>
                   <td class="text-white" >{{$dist->municipio}}</td>
                 
             
                   <td class="text-white" >{{$dist->bairro}}</td>
                   
                    <td>
                    <a href="#" class="btn btn-success">Editar</a>
                    </td>
                    <td>
                    <a href="#" class="btn btn-danger">Apagar</a>
                    </td>
                    <td>
                    <a href="#" class="btn btn-info">Info</a>
                    </td>
                 </tr>
                      @endforeach
                 @endif
                    </tbody>
                  </table>
            </div>
          </div>
          </div>
          </div>
</x-app-layout>

