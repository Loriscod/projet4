<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de Pointage</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Pointage</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Tableau de bord</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Historique</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contenu principal -->
    <div class="container mt-4">
        <h2 class="text-center mb-4">Gestion de Pointage</h2>

        <!-- Tableau des présences -->
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>Employé</th>
                        <th>Date</th>
                        <th>Heure d'Arrivée</th>
                        <th>Heure de Départ</th>
                        <th>Statut</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Jean Dupont</td>
                        <td>2025-03-22</td>
                        <td>08:30</td>
                        <td>17:30</td>
                        <td><span class="badge bg-success">Présent</span></td>
                        <td>
                            <button class="btn btn-primary btn-sm">Pointer Arrivée</button>
                            <button class="btn btn-danger btn-sm">Pointer Départ</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Marie Curie</td>
                        <td>2025-03-22</td>
                        <td>09:00</td>
                        <td>—</td>
                        <td><span class="badge bg-warning">En cours</span></td>
                        <td>
                            <button class="btn btn-primary btn-sm">Pointer Arrivée</button>
                            <button class="btn btn-danger btn-sm">Pointer Départ</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Formulaire de pointage -->
        <div class="mt-4">
            <h4>Pointer votre présence</h4>
            <form action="#" method="POST">
                <div class="mb-3">
                    <label for="nom" class="form-label">Nom de l'employé</label>
                    <input type="text" class="form-control" id="nom" name="nom" placeholder="Entrez votre nom" required>
                </div>
                <button type="submit" class="btn btn-success">Pointer Arrivée</button>
                <button type="submit" class="btn btn-danger">Pointer Départ</button>
            </form>
        </div>
    </div>
</body>

</html>
