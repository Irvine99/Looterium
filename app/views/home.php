<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Looterium - Accueil</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans text-gray-900">

    <!-- Header -->
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-4 py-6 flex justify-between items-center">
            <h1 class="text-2xl font-bold">🧪 Looterium</h1>
            <nav class="space-x-4">
                <a href="#" class="text-blue-600 hover:underline">Accueil</a>
                <a href="?controller=product&action=list" class="text-blue-600 hover:underline">Boutique</a>
                <a href="#" class="text-blue-600 hover:underline">Contact</a>
            </nav>
        </div>
    </header>

    <!-- Bandeau promo -->
    <div class="bg-yellow-100 text-yellow-800 text-center py-2 text-sm">
        🚚 Livraison offerte dès 60€ d’achat | 🔴 En direct sur WhatNot ! <a href="#" class="underline text-blue-700">Clique ici</a>
    </div>

    <!-- Contenu principal -->
    <main class="max-w-5xl mx-auto px-4 py-10">
        <h2 class="text-3xl font-semibold mb-6">Bienvenue sur Looterium</h2>

        <div class="grid md:grid-cols-3 gap-6">
            <div class="bg-white shadow rounded-xl p-4">
                <h3 class="text-xl font-semibold mb-2">🔥 Nouveautés</h3>
                <p>Découvre les dernières figurines et cartes disponibles.</p>
            </div>
            <div class="bg-white shadow rounded-xl p-4">
                <h3 class="text-xl font-semibold mb-2">🎁 Promotions</h3>
                <p>Profite des offres spéciales pendant les events geek !</p>
            </div>
            <div class="bg-white shadow rounded-xl p-4">
                <h3 class="text-xl font-semibold mb-2">📦 Suivi commandes</h3>
                <p>Accède à ton espace client pour voir l’historique et le suivi.</p>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-white mt-16 shadow-inner">
        <div class="max-w-7xl mx-auto px-4 py-6 text-sm text-center text-gray-500">
            © <?= date('Y') ?> Looterium. Tous droits réservés.
        </div>
    </footer>

</body>
</html>
