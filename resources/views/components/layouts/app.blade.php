<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        {{-- seo --}}
        <meta name="description" content="Ancaju Guest House à Lubumbashi offre un hébergement confortable avec des équipements modernes dans la province de Katanga, RDC. Réservez maintenant pour une expérience inoubliable." />
        <meta name="keywords" content="Ancaju Guest House, Lubumbashi, Katanga, RDC, hébergement, hôtel, guest house, chambres, réservation, Petit-déjeuner inclus, Wi-Fi gratuit, Parking sécurisé, Centre d'affaires, Spa, Gymnase, Restaurant, Bar, Lounge, Location de voitures, Navette aéroport, Accessibilité, Vue panoramique, Design moderne, Équipements de luxe, Emplacement central, Quartier des affaires, Proximité des attractions touristiques, Hospitalité congolaise, Expérience locale, Meilleur prix, Offres spéciales, Tarifs abordables, Tarifs réduits, Promotion, Séjour prolongé, Week-end escapade, Chambre simple, Chambre double, Suite de luxe, Suite exécutive, Chambre familiale, Service de blanchisserie, Animaux de compagnie acceptés, Chambres non-fumeurs, Accessibilité aux personnes à mobilité réduite, Événements spéciaux, Mariages, Réunions d'affaires, Conférences, Séminaires, Événements sociaux, Banquets, Services traiteur, Organisation d'excursions, Guide touristique, Exploration du Haut-Katanga, Découverte culturelle, Sites historiques, Parc national, Randonnée, Safari, Excursions en 4x4, Dégustation de vins, Activités sportives, Golf, Pêche, Cyclisme, Shopping, Marchés locaux, Artisanat, Galeries d'art, Vie nocturne, Casino, Musique live, Danse traditionnelle, Festival, Gastronomie locale, Cuisine internationale, Plats traditionnels congolais, Restaurants de fruits de mer, Bars animés, Cocktails, Divertissement, Cinéma, Théâtre, Musées, Galeries d'art, Architecture locale, Vie urbaine, Authenticité culturelle, Explorez Lubumbashi, Détente au bord du fleuve Congo, Histoire du Haut-Katanga, Charme de Lubumbashi, Ancaju Guest House, Lubumbashi, Congo-Kinshasa, Séjour mémorable, Destination idéale, Ambiance accueillante, Paisible, Chambres confortables, Délicieux repas, Espace commun convivial, Magnifique jardin, Parking spacieux, Réserver, Hospitalité exceptionnelle, Communauté annexe, Charmant, Nature environnante, Évasion, Ressourcement, Activités en plein air, Excursions, Aventures, Détente, Tranquillité, Montagnes majestueuses, Forêts verdoyantes, Cascades spectaculaires, Randonnées, Escalade, Rafting, Exploration de grottes, Nature préservée, Paysages à couper le souffle, Charme local, Marchés animés, Sites historiques, Culture congolaise, Gastronomie locale, Jus rafraîchissants, Petit-déjeuner revigorant, Dîners savoureux, Service attentionné, Moments de détente, Tranquillité d'esprit, Atmosphère relaxante, Accueil chaleureux, Vacances, Hébergement, Gîte, Équipe" />
        <meta name="author" content="Ancaju Guest House" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="canonical" href="https://www.google.com/maps/place/ANCAJU+GUEST+HOUSE/@-11.6572466,27.4430384,17z/data=!3m1!4b1!4m6!3m5!1s0x19723d43649d34ef:0x548115783cff5c18!8m2!3d-11.6572519!4d27.4456133!16s%2Fg%2F11kq2f7hyz?entry=ttu" />
        <meta property="og:title" content="Ancaju Guest House | Lubumbashi, Katanga, RDC" />
        <meta property="og:description" content="Ancaju Guest House à Lubumbashi offre un hébergement confortable avec des équipements modernes dans la province de Katanga, RDC. Réservez maintenant pour une expérience inoubliable." />
        <meta property="og:url" content="https://www.google.com/maps/place/ANCAJU+GUEST+HOUSE/@-11.6572466,27.4430384,17z/data=!3m1!4b1!4m6!3m5!1s0x19723d43649d34ef:0x548115783cff5c18!8m2!3d-11.6572519!4d27.4456133!16s%2Fg%2F11kq2f7hyz?entry=ttu" />
        <meta property="og:image" content="https://lh5.googleusercontent.com/p/AF1QipM8vhO50dHdG6cNbACOZ0w9e6N4sgDICadq8BSR=w408-h612-k-no" />
        <meta property="og:type" content="ancaju.org" />
        <meta property="og:locale" content="fr_CD" />
        <meta property="og:site_name" content="Ancaju Guest House" />
        <meta rel="canonical" href="https://lubumbashiancaju.netlify.app/" />
    <meta rel="robots" content="index,follow" />
    <meta property="article:publisher" content="https://www.facebook.com/ancaju243">
<meta property="article:author" content="https://www.linkedin.com/in/ancaju-guest-house-05b44827b/">
<meta property="article:section" content="Location">
<meta property="article:tag" content="Guest House">
<link rel="canonical" href="https://goo.gl/maps/M1s318teEZxjUdqbA">
        {{-- endseo --}}
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <!-- Scripts -->
        
        {{--  --}}
        @vite(['resources/css/style.css', 'resources/js/app.js'])
        <title>{{ env('APP_NAME') }}</title>
        <link rel="shortcurt icon" href="{{ asset('ancaju.svg') }}">
    </head>
    <body>
        {{ $slot }}
    </body>
</html>
