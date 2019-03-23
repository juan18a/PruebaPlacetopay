@extends('layouts.main')

@section('content')

 <strong class="card-title">Lista de Transaciones</strong>

                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Referencia</th>
                                            <th>Descripción</th>
                                            <th>Moneda</th>
                                            <th>Monto</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      
                                       @foreach($Pagos as $Pago)
                                             <tr>
                                                 <td>{{$Pago->reference}}</td>
                                                 <td>{{$Pago->description}}</td>
                                                 <td>{{$Pago->moneda}}</td>
                                                 <td>{{$Pago->monto}}</td>
                                                 <td>{{$Pago->status}}</td>
                               
                                             </tr>
                                     @endforeach
                                       
                                    </tbody>
    </table>
@endsection