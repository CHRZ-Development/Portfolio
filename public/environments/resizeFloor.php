<?php
$html = "";
$width = $_POST['width'];

$html = $html.'<img src="'.getenv('CORNER_LEFT').'"
                    id="corner-left"
                    style="grid-row: 2/2"
                    alt="corner-left">';
$html = $html.'<img src="'.getenv('DIRT_LEFT').'"
                    class="dirt-left"
                    style="grid-row: 3/3"
                    alt="dirt-left">';
$html = $html.'<img src="'.getenv('ROCK_BOTTOM').'"
                    id="rock-bottom-right"
                    class="rock-bottom"
                    style="grid-row: 4/4"
                    alt="rock-bottom-left">';
for($i = 2; $i < $width/48; $i++) {
    $html = $html.'<img src="'.getenv('FLOOR_TOP').'"
                        style="grid-column-start: '.$i.'; 
                               grid-column-end: '.$i.';
                               grid-row-start: 2;
                               width: 100%;
                               height: 100%;"
                        alt="floor-top">';
    $html = $html.'<img src="'.getenv('ROCK_BOTTOM').'"
                        class="rock-bottom"
                        style="grid-column-start: '.$i.'; 
                               grid-column-end: '.$i.';
                               grid-row-start: 4;
                               width: 100%;
                               height: 100%;"
                        alt="rock-bottom">';
    $html = $html.'<img src="'.getenv('ROCK_TOP_'.rand(0, 3)).'"
                        style="grid-column-start: '.$i.'; 
                               grid-column-end: '.$i.';
                               grid-row-start: 3;
                               width: 100%;
                               height: 100%;"
                        alt="rock-top">';

    $grass_must_be_spawn = rand(0, 5);
    if ($grass_must_be_spawn == 2 || $grass_must_be_spawn == 3) {
        $html = $html.'<img src="'.getenv('GRASS_IMG').'"
                        style="grid-column-start: '.$i.'; 
                               grid-column-end: '.$i.';
                               grid-row-start: 1;
                               width: 100%;
                               height: 100%;"
                        alt="rock-top">';
    }
}
$html = $html.'<img src="'.getenv('CORNER_RIGHT').'"
                    id="corner-right"
                    style="grid-row: 2/2"
                    alt="corner-right">';
$html = $html.'<img src="'.getenv('DIRT_LEFT').'"
                    id="rock-corner"
                    style="grid-row: 3/3"
                    alt="corner-right">';
$html = $html.'<img src="'.getenv('ROCK_BOTTOM').'"
                    id="rock-bottom-right"
                    class="rock-bottom"
                    style="grid-row: 4/4"
                    alt="rock-bottom-right">';

echo $html;
