<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Actualidad</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap');

        body, html {
            height: 100%;
            margin: 0;
            font-family: 'Montserrat', sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: auto;
            padding: 40px 20px;
            box-sizing: border-box;
        }

        .container {
            text-align: center;
            animation: fadeIn 2s ease-in-out;
            max-width: 800px;
            width: 100%;
        }

        .title {
            font-size: 2.5rem;
            font-weight: 700;
            color: #5c677d;
            margin-bottom: 30px;
            position: relative;
            display: inline-block;
            padding-bottom: 10px;
        }

        .title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 70%;
            height: 2px;
            background-color: #5c677d;
        }
        
        .content {
            font-size: 1.2rem;
            font-weight: 300;
            color: #333;
            line-height: 1.8;
            text-align: justify;
            opacity: 0;
            transform: translateY(20px);
            animation: slideUp 1s ease-out 0.5s forwards;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .title {
                font-size: 2rem;
            }
            .content {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="title">Mi Actualidad</h1>
        <p class="content">
            Después del colegio, fui a trabajar a una mina de carbón por un año mientras me inscribía en gastronomía. Terminé mis estudios de gastronomía e hice mis prácticas en España durante 3 años. Luego, regresé al país y me inscribí en la UNAB en la carrera de Ingeniería de Sistemas. Hasta la fecha, sigo estudiando y voy cursando quinto semestre de Sistemas.
        </p>
    </div>
</body>
</html>