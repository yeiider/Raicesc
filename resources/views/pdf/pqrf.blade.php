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
    .p-title{
    	text-transform: capitalize;
    }
    body{
    	font-family:'proxima_novablack' ,sans-serif
    }

  </style>
</head>
<body>

  <div class="col-1"></div>
  <div class=" mt-3" >
      <div class="container">
      	<div class="row">
      		<div class="col-8" style="margin-left: -18px">
      			 {{date('d-M-y    h:m A')}}
      		</div>
      		<div class="col-4" style="margin-top: -3rem">
      				<img src="assets/img/logo.png" width="200" alt="">
      		</div>
      	</div>
    
     <div class="row" style="margin-top: -5rem">
     	<div class="col-7" style="margin-left: -18px">
     		<p class="p-title " style="margin-top: 6rem ">Sr: {{$contenido['nombre']}}</p>
     	</div>
     	<div class="col-5" >
     		<p class="p-title " style="margin-top: 6rem ">Radicado: <span style="color: red">{{$contenido['radicado']}}</span></p>
     	</div>
     </div>
     <div class="row" style="margin-top: 3rem">
     	<p style="text-align: justify;">Para <strong>GLOABAL RAICESC S.A.S.</strong> es muy importante dar respuesta a tu solicitud de manera pertinente,  así podemos mejorar la calidad de nuestros servicios generando oportunidades tanto para la empresa como para nuestros clientes, por lo tanto se responderá a tu requerimiento  en los datos de contactos dados en el formulario.</p>
     </div>

     <div class="row" style="margin-top: 2rem">
     	<p style="margin: 0; text-transform: capitalize;">Motivo: <strong>{{$contenido['motivo']}}</strong></p>
     	<p style="margin: 0; text-transform: ;">E-mail: {{$contenido['email']}}</p>
        <p style="margin: 0; text-transform: capitalize;">Teléfono fijo: {{$contenido['telefono']}}  Ext: {{$contenido['extension']}}</p>
        <p style="margin: 0; text-transform: capitalize;">Teléfono: {{$contenido['celular']}}</p>
        <p style="margin: 0; text-transform: capitalize;">Dirección: {{$contenido['direccion']}}</p>
     </div>

     <div class="row" style="margin-top:  2rem">
     	<p style="text-align: justify;">Si uno de estos datos fueron ingresados de manera incorrecta enviá un correo a admin@raicesc.net con el numero de radicado correspondiente a tu solicitud para modificar la información.</p>
     </div>
     <div class="row" style="">
     	<p style="text-align: justify;">No olvides que ahora en nuestra pagina web <a href="https://www.raicesc.net">https://www.raicesc.net</a> puedes consultar tu saldo y realizar el pago de tu factura de manera virtual fácil y rápido. </p> 
     </div>
     

    
</div>

</div>
</body>
</html>