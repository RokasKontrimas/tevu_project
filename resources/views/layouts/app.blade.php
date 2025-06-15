<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="keywords"
          content="vištiena, vistiena, vistienos krutinele, vištienos krutinėlė, šlaunelės, slauneles, sparneliai, broilerių skerdiena, broileriu skerdiena, skerdiena, pauksciu ukis, paukščių ūkis">
    <title>K. Kontrimienės ūkis</title>
    <link rel="icon" type="image/png" href="{{asset('images/favc.png')}}">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    @vite(['resources/scss/app.scss'])

</head>


<body class="produktai d-flex flex-column min-vh-100">
<div class="top-header">
    <header class="d-flex flex-wrap justify-content-center container">
        @include('layouts.header')
    </header>
</div>
<div class="container">
    <main>
        <div class="description text-center">
            Naminė broilerių skerdiena <br> užauginta su natūraliais pašarais
        </div>
        @yield('content')
    </main>
</div>


@include('layouts.footer')

<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
        crossorigin="anonymous"></script>

<script type="text/javascript" src="{{ URL::asset('components/load.js') }}"></script>
@vite(['resources/js/app.js'])
</body>

</html>