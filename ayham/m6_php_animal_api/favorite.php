<?php $animal = json_decode(file_get_contents('./animal.json'));
$animal_id = isset($_GET['id']) ? $_GET['id'] : null;


// var_dump($animal);
if (!empty($animal_id)) {
    $animal_arr = array_filter($animal, function ($item) use ($animal_id) {
        return $item->id == $animal_id;
    });
}



$json_animal = json_encode($animal_arr);
// rewrite the courses.json file with the new courses array. 
file_put_contents('./favourit.json', $json_animal);
