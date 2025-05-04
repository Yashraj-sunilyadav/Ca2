<?php
header('Content-Type: application/json');

$response = array (
  'labels' => 
  array (
    0 => 'Biomass',
    1 => 'Solar',
    2 => 'Wind',
    3 => 'Hydro',
    4 => 'Geothermal',
  ),
  'data' => 
  array (
    0 => 12,
    1 => 55,
    2 => 25,
    3 => 21,
    4 => 18,
  ),
);

echo json_encode($response);
?>