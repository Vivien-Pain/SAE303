async function fetchRevenues() {
  try {
    console.log("Début de la récupération des revenus...");

    // Appel pour les revenus totaux
    const totalResponse = await fetch('https://mmi.unilim.fr/~pain11/SAE303/client/revenues/total');
    console.log("Réponse totale :", totalResponse);
    if (!totalResponse.ok) throw new Error(`Erreur HTTP : ${totalResponse.status}`);
    const totalData = await totalResponse.json();
    console.log("Données totales reçues :", totalData);

    document.getElementById('total-sales').textContent = `Total Ventes : ${totalData.total_sales} €`;
    document.getElementById('total-rentals').textContent = `Total Locations : ${totalData.total_rentals} €`;

    // Appel pour les revenus mensuels
    const month = new Date().getMonth() + 1; // Mois courant
    const year = new Date().getFullYear(); // Année courante
    const monthlyResponse = await fetch(`http://127.0.0.1:8080/revenues/monthly?month=${month}&year=${year}`);
    console.log("Réponse mensuelle :", monthlyResponse);
    if (!monthlyResponse.ok) throw new Error(`Erreur HTTP : ${monthlyResponse.status}`);
    const monthlyData = await monthlyResponse.json();
    console.log("Données mensuelles reçues :", monthlyData);

    document.getElementById('monthly-sales').textContent = `Ventes Mensuelles : ${monthlyData.total_sales} €`;
    document.getElementById('monthly-rentals').textContent = `Locations Mensuelles : ${monthlyData.total_rentals} €`;
  } catch (error) {
    console.error('Erreur lors de la récupération des revenus :', error);
    document.getElementById('error').textContent = 'Impossible de récupérer les données.';
  }
}

document.addEventListener('DOMContentLoaded', fetchRevenues);