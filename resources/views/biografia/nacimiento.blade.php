<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biografía</title>
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
            padding: 20px;
        }

        .container {
            text-align: center;
            animation: fadeIn 2s ease-in-out;
            max-width: 800px;
            width: 100%;
        }

        .info-section {
            margin-bottom: 30px;
            opacity: 0;
            transform: translateY(20px);
            animation: slideUp 1s ease-out forwards;
        }

        .info-section:nth-child(1) { animation-delay: 0.5s; }
        .info-section:nth-child(2) { animation-delay: 1s; }
        .info-section:nth-child(3) { animation-delay: 1.5s; }
        .info-section:nth-child(4) { animation-delay: 2s; }

        .label {
            font-size: 1.5rem;
            font-weight: 700;
            color: #5c677d;
            letter-spacing: 1px;
            margin-bottom: 10px;
            position: relative;
            display: inline-block;
            padding-bottom: 5px;
        }

        .label::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: #5c677d;
        }

        .value {
            font-size: 1.2rem;
            font-weight: 300;
            color: #333;
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
            .label {
                font-size: 1.2rem;
            }
            .value {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="info-section">
            <h2 class="label">Lugar de Nacimiento</h2>
            <p class="value">Tunja, Boyacá</p>
        </div>
        <div class="info-section">
            <h2 class="label">Padres</h2>
            <p class="value">Abner Chia & Nancy Cifuentes</p>
        </div>
        <div class="info-section">
            <h2 class="label">Hermanos</h2>
            <p class="value">Monica Chia Cifuentes</p>
        </div>
        <div class="info-section">
            <h2 class="label">Fecha de Nacimiento</h2>
            <p class="value">12 de febrero de 1999</p>
        </div>
    </div>
</body>
</html>