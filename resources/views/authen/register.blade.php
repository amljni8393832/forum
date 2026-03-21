<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .card {
            background: #ffffff;
            padding: 40px 36px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 440px;
        }

        .card h1 {
            font-size: 26px;
            color: #1a1a2e;
            margin-bottom: 6px;
        }

        .card p.subtitle {
            font-size: 14px;
            color: #6b7280;
            margin-bottom: 28px;
        }

        .form-group {
            margin-bottom: 16px;
        }

        label {
            display: block;
            font-size: 14px;
            font-weight: 600;
            color: #374151;
            margin-bottom: 6px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 11px 14px;
            border: 1.5px solid #d1d5db;
            border-radius: 8px;
            font-size: 14px;
            color: #111827;
            outline: none;
            transition: border-color 0.2s;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="password"]:focus {
            border-color: #4f46e5;
        }

        .row {
            display: flex;
            gap: 14px;
        }

        .row .form-group {
            flex: 1;
        }

        button[type="submit"] {
            width: 100%;
            padding: 12px;
            background: #4f46e5;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s;
            margin-top: 6px;
        }

        button[type="submit"]:hover {
            background: #4338ca;
        }

        .footer-link {
            text-align: center;
            margin-top: 22px;
            font-size: 13px;
            color: #6b7280;
        }

        .footer-link a {
            color: #4f46e5;
            text-decoration: none;
            font-weight: 600;
        }

        .footer-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <div class="card">
        <h1>Créer un compte</h1>
        <p class="subtitle">Rejoignez-nous dès aujourd'hui, c'est gratuit !</p>

        <form action="{{ route('register.post') }}" method="POST">
            @csrf

            <div class="row">

                <div class="form-group">
                    <label for="name">Nom Complet</label>
                    <input type="text" id="name" name="name" placeholder="Dupont" required>
                </div>
            </div>

            <div class="form-group">
                <label for="email">Adresse email</label>
                <input type="email" id="email" name="email" placeholder="exemple@mail.com" required>
            </div>

            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" placeholder="Min. 8 caractères" required>
            </div>

            <div class="form-group">
                <label for="password_confirm">Confirmer le mot de passe</label>
                <input type="password" id="password_confirm" name="password_confirmation" placeholder="••••••••"
                    required>
            </div>

            <button type="submit">S'inscrire</button>
        </form>

        <div class="footer-link">
            Déjà un compte ? <a href="{{ route('login') }}">login</a>
        </div>
    </div>

</body>

</html>