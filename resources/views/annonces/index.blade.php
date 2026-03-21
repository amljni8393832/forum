<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Annonces</title>
</head>

<body>
    <h1>Annonces</h1>

    @forelse ($annonces as $annonce)
        <div>
            <h2>{{ $annonce->title }}</h2>
            <p>{{ $annonce->description }}</p>
        </div>
    @empty
        <p>Aucune annonce disponible.</p>
    @endforelse
</body>

</html>