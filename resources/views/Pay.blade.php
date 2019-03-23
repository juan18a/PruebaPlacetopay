@extends('layouts.main')

@section('content')

  <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Crear Pago</h1>
                    </div>
                </div>
            </div>
         
        </div>
<br>
<br>
<br>
<br>

             @if ($errors->any())
                           <div class="alert alert-danger">
                             <ul>
                                @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                          </div><br />
             @endif


         <div class="card">
                            <div class="card-header">
                             <strong>Formulario:</strong> Pago
                 </div>
                        <div class="card-body card-block">
                                  
                                  <?php 

                                   ?>
                    

  <form  action="/Payment" method="GET" enctype="multipart/form-data" class="form-horizontal">
                                                        
                   <div class="row form-group">
                                     @csrf
                      <div class="col col-md-3"><label for="text-input" class=" form-control-label">Monto</label></div>
                        <div class="col-12 col-md-9">

                           


              <input type="number" class="form-control" name="monto"  id="text-input" placeholder="Monto" autocomplete="off"  min="6000" required="required" >

                             <small class="form-text text-muted">Ingrese el monto a Pagar</small>
                        
                        </div>
                                
                    </div>
                                                                                            
                                                               
                                                      
                                                               
                                                  
                                                    </div>
                                                    <div class="card-footer">
                                                        <button type="submit" class="btn btn-primary btn-sm">
                                                            <i class="fa fa-dot-circle-o"></i> Guardar
                                                        </button>
                                                        <!--
                                                        <button type="reset" class="btn btn-danger btn-sm">
                                                            <i class="fa fa-ban"></i> Limpiar
                                                        </button>-->

                                              </form>
                                                    </div>
        </div>


@endsection