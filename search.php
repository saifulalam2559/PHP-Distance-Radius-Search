<?php
require 'config.php';

if (!isset($_GET['lat'], $_GET['lng'], $_GET['radius'])) {
    die('Please provide latitude, longitude, and radius.');
}

$lat = (float)$_GET['lat'];
$lng = (float)$_GET['lng'];
$radius = (float)$_GET['radius'];

// Haversine formula for distance calculation
$sql = "
SELECT id, name, latitude, longitude,
(6371 * acos(
    cos(radians(:lat)) * cos(radians(latitude)) *
    cos(radians(longitude) - radians(:lng)) +
    sin(radians(:lat)) * sin(radians(latitude))
)) AS distance
FROM locations
HAVING distance <= :radius
ORDER BY distance ASC
";

$stmt = $pdo->prepare($sql);
$stmt->execute(['lat' => $lat, 'lng' => $lng, 'radius' => $radius]);
$results = $stmt->fetchAll();

if ($results) {
    echo "<h2>Locations within $radius km:</h2><ul>";
    foreach ($results as $row) {
        echo "<li>{$row['name']} - " . round($row['distance'], 2) . " km</li>";
    }
    echo "</ul>";
} else {
    echo "No locations found within $radius km.";
}
