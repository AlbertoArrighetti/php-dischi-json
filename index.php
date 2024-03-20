<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Dischi</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- style -->
    <link rel="stylesheet" href="./style/style.css">
</head>
<body>

    <div id="app">
        <main>
            <div class="container py-5">    
    
                <ul class="my_list">
    
                    <li v-for="currentDisc in discsList" class="my_list_item">
                    <div class="card my_card">
                        <img :src="currentDisc.poster" class="card-img-top" :alt="currentDisc.title">
                        
                        <div class="card-body">
                            <h5 class="card-title">{{ currentDisc.title }}</h5>
                            <p class="card-text">{{ currentDisc.author }}</p>
                            <div class="fw-bold">{{ currentDisc.year }}</div>
                        </div>
                    </div>
                    </li>
    
                </ul>
            </div>
        </main>
    </div>


    <!-- JS -->
    <script src="./js/main.js"></script>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>