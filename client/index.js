import anychart from 'anychart';

// Créer un graphique
const chart = anychart.pie();

// Ajouter des données
chart.data([
    ['Chrome', 64],
    ['Firefox', 20],
    ['Safari', 10],
    ['Edge', 6]
]);

// Associer à un conteneur HTML
chart.container('container');

// Afficher le graphique
chart.draw();