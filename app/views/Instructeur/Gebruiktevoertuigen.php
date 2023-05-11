<?php require APPROOT . '/views/include/head.php'; ?>

<body>
    

<h5>Naam: <?= $data['VoorNaam'] . ' ' . $data['Tussenvoegsel'] . ' ' . $data['Achternaam']; ?></h5>
<h5>Datum in dienst: <?= $data   ['DatumInDienst'];  ?></h5>
<h5>AantalSterren: <?= $data   ['AantalSterren'];  ?></h5>


<table border= "1">
    <thead>
        <th>TypeVoertuig</th>
        <th>Type</th>
        <th>Kenteken</th>
        <th>Bouwjaar</th>
        <th>Brandstof</th>
        <th>Rijbewijscategorie</th>

    </thead>
    <tbody>
        <?= $data['rows']; ?>
    </tbody>
</table>





</body>
</html>