<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade de JavaScript</title>
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
    crossorigin="anonymous"
  >

</head>
<body>
    <center><h1>Revisão de Variaveis</h1></center>
    <script>
        let idade = 35
        var numero = 11 
        const name = "Fernando"

        let meninas = [
            "Luana",
            "Maryellen",
            "Maria Eduarda",
            "Maria Clara",
            "Manuela",
            "Nathally",
            "Shaden"
        ]
        
    for(let i = 0; i < meninas.length; i++)
    {
        document.write(meninas[i]+"<br/>")
    }

    let marcelo = {
        "nome" : "Marcelo",
        "idade" : "17",
        "altura" : "1.61",
        "peso"   : "62",

        }
    
    let pedro = {
        "nome" : "Pedro",
        "idade" : "17",
        "altura" : "1.76",
        "peso" : "80",
    }

    let yago = {
        "nome" : "Yago",
        "idade" : "18",
        "altura" : "1.52",
        "peso" : "43",
    }

    let meninos = [marcelo, pedro, yago]

    for(let i = 0; i < meninos.length; i++)
    {
        document.write(meninos[i].nome+"<br/>")
    }


    </script>
    



    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

</body>
</html>