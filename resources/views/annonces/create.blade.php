<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Poster une annonce</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f9fafb;
            margin: 0;
        }

        nav {
            background: #4f46e5;
            padding: 15px;
            display: flex;
            justify-content: space-between;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
            font-weight: bold;
        }

        nav a:hover {
            color: #ffc107;
        }

        .container {
            max-width: 900px;
            margin: 30px auto;
            padding: 20px;
        }

        .form-card {
            background: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.05);
        }

        h1 {
            text-align: center;
            color: #4f46e5;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            margin-bottom: 15px;
            font-size: 14px;
        }

        input:focus, textarea:focus {
            border-color: #4f46e5;
            outline: none;
        }

        button {
            background: #4f46e5;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s;
        }

        button:hover {
            background: #3730a3;
        }
    </style>
</head>
<body>
    <nav>
        <div class="logo"></div>
        <div>
            <a href="{{ route('annonces.index') }}">Annonces</a>
            <a href="{{ route('annonces.create') }}">poster</a>
        </div>
    </nav>

    <div class="container">
        <div class="form-card">
            <h1>Créer une post</h1>
            <form action="{{ route('annonces.store') }}" method="POST">
                @csrf
                <label for="title">Sujet du projet</label>
                <input type="text" name="title" id="title" placeholder="Titre du projet" required>

                <label for="description">Description</label>
                <textarea name="description" id="description" rows="4" placeholder="Décrivez votre projet..." required></textarea>

                <label for="start">Date de début</label>
                <input type="datetime-local" name="start" id="start" required>

                <label for="end">Date de fin</label>
                <input type="datetime-local" name="end" id="end" required>

                <button type="submit">Publier</button>
            </form>
        </div>
    </div>
</body>
</html>

