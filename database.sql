-- Database: distance_search

CREATE TABLE locations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    latitude DOUBLE NOT NULL,
    longitude DOUBLE NOT NULL
);

-- Sample data
INSERT INTO locations (name, latitude, longitude) VALUES
('Berlin', 52.5200, 13.4050),
('Munich', 48.1351, 11.5820),
('Hamburg', 53.5511, 9.9937),
('Cologne', 50.9375, 6.9603);
