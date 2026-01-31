<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Distance Radius Search</title>
</head>
<body>
    <h1>Distance Radius Search</h1>
    <form action="search.php" method="get">
        <label>Latitude: <input type="text" name="lat" required></label><br>
        <label>Longitude: <input type="text" name="lng" required></label><br>
        <label>Radius (km): <input type="number" name="radius" required></label><br>
        <button type="submit">Search</button>
    </form>
</body>
</html>
