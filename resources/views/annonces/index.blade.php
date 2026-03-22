<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des projets</title>
    <style>
        body { font-family: Arial, sans-serif; background: #ffffffff; margin:0; 
        }
        nav { 
            background:#4f46e5; padding:15px; display:flex; justify-content:space-between; 
        }
        nav a {
             color:#fff; text-decoration:none; margin:0 10px; font-weight:bold;
             }
        nav a:hover { color:#ffc107; }
        .container {
             max-width:900px; margin:30px auto; padding:20px; 
            }
        .project { 
            background:#fff; border-radius:8px; padding:20px; margin-bottom:20px; box-shadow:0 4px 8px rgba(0,0,0,0.05); 
        }
        .project h2 { 
            margin:0; color:#007bff; 
        }
        .project p { 
            color:#555; 
        }
        .project small {
             color:#888; display:block; margin-top:10px;
             }
    </style>
</head>
<body>
    <nav>
        <div class="logo"> </div>
        <div>
            <a href="{{ route('annonces.index') }}">Annonces</a>
            <a href="{{ route('annonces.create') }}">poster</a>
        </div>
    </nav>

    <div class="container">
        <h1>Les Annonces </h1>

             @if(session('success'))
            <div style="background:#d4edda; color:#155724; padding:10px; border-radius:5px; margin-bottom:20px;">
                {{ session('success') }}
            </div>
        @endif


        @foreach($projects as $project)
            <div class="project">
                <h2>{{ $project->title }}</h2>
                <p>{{ $project->description }}</p>
                <small>Publié par : {{ $project->user->name ?? 'Utilisateur inconnu' }}</small>
                <small>Début : {{ $project->start }} | Fin : {{ $project->end }}</small>
            </div>
        @endforeach
    </div>
</body>
</html>