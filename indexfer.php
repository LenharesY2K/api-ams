<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acessando materiais</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/5f670eb272.js" crossorigin="anonymous"></script>
</head>

<body>
    <style>
        body {
            height: 100%;
            margin: 0;
            background: black;
            overflow: auto;
            background-repeat: no-repeat;
            background-size: cover;
            /* cobre toda a área */
            background-position: center;
            /* centraliza a imagem */
            background-attachment: fixed;
        }

        .image {

            transition: transform 0.3s ease;/
        }

        .image:hover {
            transform: scale(1.1);
        }

        .icon2 {

            transition: transform 0.3s ease;/
        }

        .icon2:hover {
            transform: scale(1.1);
        }

        .align_center {
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .navbar {
            background-color: rgb(12, 12, 12);
            height: 75px;
        }

        /* Define a cor laranja para o ícone */
        .navbar-brand svg {
            fill: orange;
            width: 30px;
            height: 30px;
        }

        .navbar-center {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
        }

        /* Ajusta para telas pequenas para não sobrepor */
        @media (max-width: 991px) {
            .navbar-center {
                position: static;
                transform: none;
                margin-top: 0.5rem;
                margin-bottom: 0.5rem;
            }
        }

        .navbar-center img {
            height: 80px;
        }

        .navbar-right-icons a {
            color: white;
            font-size: 1.5rem;
            margin-left: 1rem;
            text-decoration: none;
        }
    </style>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar">
            <div class="container-fluid">
                <a class="navbar-brand" href="#" aria-label="Menu">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" role="img" aria-hidden="true" class="icon2"
                        focusable="false">
                        <rect y="4" width="24" height="2" rx="1" />
                        <rect y="11" width="24" height="2" rx="1" />
                        <rect y="18" width="24" height="2" rx="1" />
                    </svg>
                </a>
                <a href="https://exemplo.com" class="navbar-center" aria-label="Página Principal">
                    <img src="fernandogracianp.png" alt="Logo central" class="image" />
                </a>
                <div class="navbar-right-icons">
                    <a href="#" aria-label="Buscar">
                        <i class="fas fa-search icon2"></i>
                    </a>
                    <a href="#" aria-label="Usuário">
                        <i class="fas fa-user icon2"></i>
                    </a>
                </div>
            </div>
        </nav>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</body>

</html>