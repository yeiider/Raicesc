<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Radicado</title>
  <style>
    * {
      box-sizing: border-box;
    }
    .row::after {
      content: "";
      clear: both;
      display: table;
    }

    [class*="col-"] {
      float: left;
      padding: 15px;
    }

    .col-1 {width: 8.33%;}
    .col-2 {width: 16.66%;}
    .col-3 {width: 25%;}
    .col-4 {width: 33.33%;}
    .col-5 {width: 41.66%;}
    .col-6 {width: 50%;}
    .col-7 {width: 58.33%;}
    .col-8 {width: 66.66%;}
    .col-9 {width: 75%;}
    .col-10 {width: 83.33%;}
    .col-11 {width: 91.66%;}
    .col-12 {width: 100%;}

    html {
      font-family: "Lucida Sans", sans-serif;
    }

    .container {
      width: 100%;
      padding-right: 55px;
      padding-left: 55px;
      background-color: white;
      padding-top: 20px;
      padding-bottom: 20px;
      

    }

    @media (min-width: 576px) {
      .container {
        max-width: 540px;
      }
    }

    @media (min-width: 768px) {
      .container {
        max-width: 720px;
      }
    }

    @media (min-width: 992px) {
      .container {
        max-width: 960px;
      }
    }

    @media (min-width: 1200px) {
      .container {
        max-width: 1140px;
      }
    }

    .container-fluid {
      width: 100%;
      padding-right: 15px;
      padding-left: 15px;
      margin-right: auto;
      margin-left: auto;
    }

    h1, h2, h3, h4, h5, h6 {
      margin-top: 0;
      margin-bottom: 0.5rem;
    }

    p {
      margin-top: 0;
      margin-bottom: 1rem;
    }
    .mt-4,
    .my-4 {
      margin-top: 1.5rem !important;
    }

    .mr-4,
    .mx-4 {
      margin-right: 1.5rem !important;
    }

    .mb-4,
    .my-4 {
      margin-bottom: 1.5rem !important;
    }

    .ml-4,
    .mx-4 {
      margin-left: 1.5rem !important;
    }

    .m-5 {
      margin: 3rem !important;
    }
    .mt-3{
      margin: 1.5rem !important;
    }

    .mt-5,
    .my-5 {
      margin-top: 10rem !important;
    }

    .mr-5,
    .mx-5 {
      margin-right: 3rem !important;
    }

    .mb-5,
    .my-5 {
      margin-bottom: 3rem !important;
    }

    .ml-5,
    .mx-5 {
      margin-left: 3rem !important;
    }

    .p-0 {
      padding: 0 !important;
    }

    .pt-0,
    .py-0 {
      padding-top: 0 !important;
    }

    .pr-0,
    .px-0 {
      padding-right: 0 !important;
    }

    .pb-0,
    .py-0 {
      padding-bottom: 0 !important;
    }

    .pl-0,
    .px-0 {
      padding-left: 0 !important;
    }

    .p-1 {
      padding: 0.25rem !important;
    }

    .pt-1,
    .py-1 {
      padding-top: 0.25rem !important;
    }

    .pr-1,
    .px-1 {
      padding-right: 0.25rem !important;
    }
   
    .text-red{
      color: red;
    }
    .title{
      font-weight: 600;
      font-style: 25px;
      text-transform: capitalize;
    }
    h2{
      text-transform: capitalize;
    }
    .text{
      margin-top: 10px;
      border-bottom: solid 3px #ccc;
    } 
    .bg-info{
      background: #7FEEEB;
    }
    .conte{
      font-weight: 300;
    }

  </style>
</head>
<body>

  <div class="col-1"></div>
  <div class=" mt-3 ">
         <div class="container">
     {{date('d/M/y - h:m A')}}
     <div class="row">
      <div class="col-8">
        <h2>Nombre: <br><strong>{{$contenido['nombre']}}</strong></h2>
      </div>
      <div class="col-4"><h1>Radicado</h1> 
        <h3 class="text-red">{{$contenido['radicado']}}</h3>
      </div>
    </div>

    <div class="text">
      <p class="title">Tipo de Solicitud: <span class="conte bg-info">{{$contenido['motivo']}}</span></p>
    </div>
    <div class="text">
      <p class="title">Municipio: <span class="conte">{{$contenido['municipio']}}</span></p>
    </div>
    <div class="text">
      <p class="title">Ciudad o Municipio: <span class="conte">{{$contenido['razon']}}</span></p>
    </div>
    <div class="text">
      <p class="title">Razón Social: <span class="conte">{{$contenido['razon']}}</span></p>
    </div>
    <div class="text">
      <p class="title">Numero de documento de identidad: <span class="conte">{{$contenido['documento']}}</span></p>
    </div>
     <div class="text">
      <p class="title">Nombre de Contacto: <span class="conte">{{$contenido['nombre']}}</span></p>
    </div>
    <div class="text">
      <p class="title">Dirección de notificación: <span class="conte">{{$contenido['direccion']}}</span></p>
    </div>
    <div class="text">
      <div class="row">
        <div class="col-5">
         <p class="title">Teléfono fijo: <span class="conte">{{$contenido['telefono']}}</span></p>
       </div>

       <div class="col-7">
        <p class="title">Ext: <span class="conte">{{$contenido['extension']}}</span></p>
      </div>
    </div>
  </div>
    <div class="text">
      <div class="row">
        <div class="col-5">
         <p class="title">Celular: <span class="conte">{{$contenido['celular']}}</span></p>
       </div>

       <div class="col-7">
        <p class="title">E-Mail: <span class="conte">{{$contenido['email']}}</span></p>
      </div>
    </div>
  </div>

     <div class="text">
       
      <p class="title">Hechos en que se fundamenta la Petición, Queja o Recurso:</p><br>
      <p class="conte">{{$contenido['message']}}</p>
    </div>
    <div class="mt-3 bg-info">
      <h3>Este mensaje se ha envido a Global Raices, Junto con tu documento abjunto si lo has cargado </h3>
    </div>

  </div>

</div>

</div>
</body>
</html>