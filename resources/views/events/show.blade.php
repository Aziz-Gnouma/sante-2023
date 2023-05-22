<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.thymeleaf.org">
<head>
    <meta charset="ISO-8859-1">
    <title>Employee Management System</title>
    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        body {
            margin:  0;
        }
        .page-content {
            width: 100%;
            margin:  0 auto;
            background-image: -moz-linear-gradient( 136deg, rgb(0,0,70) 0%, rgb(28,181,224) 100%);
            background-image: -webkit-linear-gradient( 136deg, rgb(0,0,70) 0%, rgb(28,181,224) 100%);
            background-image: -ms-linear-gradient( 136deg, rgb(0,0,70) 0%, rgb(28,181,224) 100%);
            display: flex;
            display: -webkit-flex;
            justify-content: center;
            -o-justify-content: center;
            -ms-justify-content: center;
            -moz-justify-content: center;
            -webkit-justify-content: center;
            align-items: center;
            -o-align-items: center;
            -ms-align-items: center;
            -moz-align-items: center;
            -webkit-align-items: center;
        }
        .form-v6-content  {
            background: #fff;
            width: 968px;

            border-radius: 8px;
            -o-border-radius: 8px;
            -ms-border-radius: 8px;
            -moz-border-radius: 8px;
            -webkit-border-radius: 8px;
            margin: 90px 0;
            font-family: 'Nunito', sans-serif;
            color: #fff;
            font-weight: 700;
            position: relative;
            display: flex;
            display: -webkit-flex;

        }
        .form-v6-content .form-left {
            margin-bottom: -6px;
            height: 5%;
        }
        .form-v6-content .form-left img {
            width: 600px;
            height: 675px;

            border-top-left-radius: 8px;
            border-bottom-left-radius: 8px;
        }
        .form-v6-content .form-detail {
            padding: 30px 40px;
            position: relative;
            width: 200%;

        }
        .form-v6-content .form-detail h2 {
            color: #333;
            font-size: 35px;
            text-align: center;
            position: relative;
            padding: 6px 0 0;
            margin-bottom: 47px;
        }
        .form-v6-content .form-row {
            width: 100%;

        }
        .form-v6-content .form-detail .form-row-last {
            text-align: center;
        }
        .form-v6-content .form-detail .input-text {
            margin-bottom: 35px;
        }
        .form-v6-content .form-detail input {
            width: 92%;
            padding: 0px 15px 10px 15px;
            border: 2px solid transparent;
            border-bottom: 2px solid #e5e5e5;
            appearance: unset;
            -moz-appearance: unset;
            -webkit-appearance: unset;
            -o-appearance: unset;
            -ms-appearance: unset;
            outline: none;
            -moz-outline: none;
            -webkit-outline: none;
            -o-outline: none;
            -ms-outline: none;
            font-family: 'Nunito', sans-serif;
            font-size: 16px;
            font-weight: 700;
            color: #333;
        }
        .form-v6-content .form-detail .form-row input:focus {
            border-bottom: 2px solid #fe892a;
        }
        .form-v6-content .form-detail .register {
            background: #fe892a;
            border-radius: 6px;
            -o-border-radius: 6px;
            -ms-border-radius: 6px;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            width: 160px;
            box-shadow: 0px 3px 10px 0px rgba(0, 0, 0, 0.15);
            -o-box-shadow: 0px 3px 10px 0px rgba(0, 0, 0, 0.15);
            -ms-box-shadow: 0px 3px 10px 0px rgba(0, 0, 0, 0.15);
            -moz-box-shadow: 0px 3px 10px 0px rgba(0, 0, 0, 0.15);
            -webkit-box-shadow: 0px 3px 10px 0px rgba(0, 0, 0, 0.15);
            border: none;
            margin: 11px 0 50px 0px;
            cursor: pointer;
            font-family: 'Nunito', sans-serif;
            color: #fff;
            font-weight: 700;
            font-size: 18px;
        }
        .form-v6-content .form-detail .register:hover {
            background: #e37b27;
        }
        .form-v6-content .form-detail .form-row-last input {
            padding: 13px;
        }
        input::-webkit-input-placeholder { /* Chrome/Opera/Safari */
            color: #666;
            font-size: 16px;
        }
        input::-moz-placeholder { /* Firefox 19+ */
            color: #666;
            font-size: 16px;
        }
        input:-ms-input-placeholder { /* IE 10+ */
            color: #666;
            font-size: 16px;
        }
        input:-moz-placeholder { /* Firefox 18- */
            color: #666;
            font-size: 16px;
        }


    </style>
</head>
<body>
            <div class="container my-5">
    <div class="bg-body-tertiary p-5 rounded">
      <div class="col-sm-8 py-5 mx-auto">
      <a href = "{{ route('admin.events.index')}}"  class="btn btn-primary" style="margin-left:800px"> Back <i class="bi bi-arrow-left-circle-fill"></i></a>
            
      <h2 class="text-center display-5 fw-normal">Evenement details </h2>
      
      @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <br><br>
        <div class="card mx-2 px-5 py:5 my-2 w-5 " style="padding:20px" >
        <p class="fs-5">Nom Evenement : <span class=" text-success" >{{ $event->Nom_Evenement }} </span></p> 
        <p class="fs-5">Description : <span class="text-success">{{ $event->description }}</span></p>
        <p class="fs-5">Nom du Club : <span class="text-success">{{ $event->Nom_club }}</span></p>
        <p class="fs-5">Email :<span class="text-success"> {{ $event->Email }}</span></p>
        <p class="fs-5">Statut Publication :<small class="text-body-secondary text-success">  @if  ($event->publish == 0) Non publié @else Publié @endif</small></p>
        <p class="fs-5">Date Evenement :<small class="text-body-secondary text-success"> {{ $event->date }}</small></p>
      
        </div>
    </div>
    </div>
  </div>
        
    </div>
</div>

</body>


</html>