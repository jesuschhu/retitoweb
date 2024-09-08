<?php
// URL de la API de memes (ejemplo de API de memes)
$api_url = 'https://api.imgflip.com/get_memes';

// Obtén los datos de la API
$response = file_get_contents($api_url);
$data = json_decode($response, true);

// Verifica si la respuesta es válida
if (isset($data['data']['memes'])) {
    $memes = $data['data']['memes'];
} else {
    $memes = [];
}

//llegaste a la primera parte pillín, flag: CiberSecUNASAM{
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Memes Divertidos(pronto en español)</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>¡Bienvenido a la Página de Memes!</h1>
    </header>
    <main>
        <section class="meme-gallery">
            <?php foreach ($memes as $meme): ?>
                <div class="meme">
                    <img src="<?php echo $meme['url']; ?>" alt="<?php echo htmlspecialchars($meme['name']); ?>">
                    <p><?php echo htmlspecialchars($meme['name']); ?></p>
                </div>
            <?php endforeach; ?>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Gustavo Rojo. Todos los derechos reservados.</p>
        
    </footer>
</body>
</html>
