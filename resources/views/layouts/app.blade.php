<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>.:Ingreso / Registro:.</title>

    {!! Html::style('css/bootstrap.min.css') !!}
    {!! Html::style('css/metisMenu.min.css') !!}
    {!! Html::style('css/sb-admin-2.css') !!}
    {!! Html::style('css/font-awesome.min.css') !!}
</head>

<body>

    <div id="wrapper">
        
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Login</a>
            </div>
           

            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <a href="/auth/register"><i class="fa fa-btn fa-heart"></i>&nbsp;Register</a>
                </li>
                <li>
                    <a href="/"><i class="fa fa-btn fa-sign-in"></i>&nbsp;Login</a>
                </li>
            </ul>
        </nav>

        <div id="page-wrapper">
            @yield('content')
        </div>

    </div>

    {!! Html::script('js/jquery.min.js') !!}
    {!! Html::script('js/bootstrap.min.js') !!}
    {!! Html::script('js/metisMenu.min.js') !!}
    {!! Html::script('js/sb-admin-2.js') !!}

    @section('scripts')
    @show

     <script type="text/javascript">
        $(document).ready(function(){
            $("#user_email").focus();
        });
    </script>
</body>

</html>
