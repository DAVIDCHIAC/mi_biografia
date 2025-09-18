<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abner David Chia Cifuentes</title>
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
            overflow: hidden;
        }

        .container {
            text-align: center;
            animation: fadeIn 2s ease-in-out;
        }

        .name {
            font-size: 4rem;
            font-weight: 300;
            color: #333;
            letter-spacing: 2px;
            margin: 0;
            position: relative;
            padding-bottom: 10px;
        }

        .name::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 2px;
            background-color: #5c677d;
            animation: expandLine 1.5s ease-in-out 1s forwards;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes expandLine {
            from {
                width: 0;
            }
            to {
                width: 80%;
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .name {
                font-size: 2.5rem;
            }
        }

        @media (max-width: 480px) {
            .name {
                font-size: 1.8rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="name">Abner David Chia Cifuentes</h1>
    </div>
</body>
</html>