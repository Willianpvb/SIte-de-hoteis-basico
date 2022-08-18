<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link rel="icon" 
    href="https://i.pinimg.com/originals/72/41/40/724140ff247a6e922bcb45f534bab3bc.jpg">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Imobiliaria LMW</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
<body>   
    <header>
        @include('navbar')    
    </header>
    <div class="d-flex justify-content-center bg-secondary p-4 text-dark bg-opacity-25"">
            <h1>@yield('titulo')</h1>
    </div>
    <div class="container-fluid p-4">
        <div>
            @yield('conteudo')
        </div>
    </div>
    
    <footer>
        <div class="d-flex justify-content-between border-top">
            <p class="text-muted">© 2022 Company, Inc</p>
            <p class="d-flex justify-content-end ">Rua tarara</p>
        </div>
    </footer>
    
</body>
</html>