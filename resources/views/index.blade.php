<div class="center">

    <header>
        <nav>
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a>
        </nav>
    </header>
    <div class="info">
        <h1>Bienvenido a nuesto sistema de gestion de empleados</h1>
        <p>Inicia sesion para comenzar</p>
    </div>
    <style>
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #f5f5f5;
            padding: 10px;
        }

        a:hover {
            background-color: #f9c109;
            transition: all 0.5s ease;
            cursor: pointer;
        }

        a {
            background-color: #007bff;
            /* Color de fondo del botón */
            color: #ffffff;
            /* Color del texto */
            padding: 12px 24px;
            /* Espaciado interno para darle tamaño */
            text-decoration: none;
            /* Elimina el subrayado */
            border-radius: 5.5px;
            /* Bordes redondeados */
            font-family: sans-serif;
            display: inline-block;
            /* Necesario para que el padding funcione correctamente */
            transition: background-color 0.6s ease-in-out;
        }
        .info{
            font-family: Arial, Helvetica, sans-serif;
            text-align: center
        }
        .center{
            display: grid;
            
        }
    </style>

</div>
