<?php
class Environment
{
    public static function generateHouse0($x, $y)
    { ?>
        <img src="<?= getenv('HOUSE0_0') ?>"
             style="grid-column: <?= $x ?>/<?= $x ?>; grid-row: <?= $y ?>/<?= $y ?>;"
             alt="HOUSE=0;Tile=0">
        <img src="<?= getenv('HOUSE0_1') ?>"
             style="grid-column: <?= $x ?>/<?= $x ?>; grid-row: <?= $y + 1 ?>/<?= $y + 1 ?>;"
             alt="HOUSE=0;Tile=1">
        <img src="<?= getenv('HOUSE0_2') ?>"
             style="grid-column: <?= $x + 1 ?>/<?= $x + 1 ?>; grid-row: <?= $y ?>/<?= $y ?>;"
             alt="HOUSE=0;Tile=2">
        <img src="<?= getenv('HOUSE0_3') ?>"
             style="grid-column: <?= $x + 1 ?>/<?= $x + 1 ?>; grid-row: <?= $y + 1 ?>/<?= $y + 1 ?>;"
             alt="HOUSE=0;Tile=3">
        <img src="<?= getenv('HOUSE0_4') ?>"
             style="grid-column: <?= $x + 2 ?>/<?= $x + 2 ?>; grid-row: <?= $y + 0 ?>/<?= $y + 0 ?>;"
             alt="HOUSE=0;Tile=4">
        <img src="<?= getenv('HOUSE0_5') ?>"
             style="grid-column: <?= $x + 2 ?>/<?= $x + 2 ?>; grid-row: <?= $y + 1 ?>/<?= $y + 1 ?>;"
             alt="HOUSE=0;Tile=5">
        <img src="<?= getenv('HOUSE0_6') ?>"
             style="grid-column: <?= $x + 3 ?>/<?= $x + 3 ?>; grid-row: <?= $y ?>/<?= $y ?>;"
             alt="HOUSE=0;Tile=6">
        <img src="<?= getenv('HOUSE0_7') ?>"
             style="grid-column: <?= $x + 3 ?>/<?= $x + 3 ?>; grid-row: <?= $y + 1 ?>/<?= $y + 1 ?>;"
             alt="HOUSE=0;Tile=7">
        <img src="<?= getenv('HOUSE0_8') ?>"
             style="grid-column: <?= $x - 1 ?>/<?= $x - 1 ?>; grid-row: <?= $y ?>/<?= $y ?>;"
             alt="HOUSE=0;Tile=8">
        <img src="<?= getenv('HOUSE0_9') ?>"
             style="grid-column: <?= $x ?>/<?= $x ?>; grid-row: <?= $y - 1 ?>/<?= $y - 1 ?>;"
             alt="HOUSE=0;Tile=9">
        <img src="<?= getenv('HOUSE0_10') ?>"
             style="grid-column: <?= $x ?>/<?= $x ?>; grid-row: <?= $y - 2 ?>/<?= $y - 2 ?>;"
             alt="HOUSE=0;Tile=10">
        <img src="<?= getenv('HOUSE0_9') ?>"
             style="grid-column: <?= $x + 3 ?>/<?= $x + 3 ?>; grid-row: <?= $y - 1 ?>/<?= $y - 1 ?>; transform: rotateY(180deg)"
             alt="HOUSE=0;Tile=9">
        <img src="<?= getenv('HOUSE0_10') ?>"
             style="grid-column: <?= $x + 3 ?>/<?= $x + 3 ?>; grid-row: <?= $y - 2 ?>/<?= $y - 2 ?>; transform: rotateY(180deg)"
             alt="HOUSE=0;Tile=10">
        <img src="<?= getenv('HOUSE0_11') ?>"
             style="grid-column: <?= $x + 1 ?>/<?= $x + 1 ?>; grid-row: <?= $y - 1 ?>/<?= $y - 1 ?>;"
             alt="HOUSE=0;Tile=11">
        <img src="<?= getenv('HOUSE0_11') ?>"
             style="grid-column: <?= $x + 2 ?>/<?= $x + 2 ?>; grid-row: <?= $y - 1 ?>/<?= $y - 1 ?>;"
             alt="HOUSE=0;Tile=11">
        <img src="<?= getenv('HOUSE0_12') ?>"
             style="grid-column: <?= $x ?>/<?= $x ?>; grid-row: <?= $y - 3 ?>/<?= $y - 3 ?>;"
             alt="HOUSE=0;Tile=12">
        <img src="<?= getenv('HOUSE0_12') ?>"
             style="grid-column: <?= $x + 3 ?>/<?= $x + 3 ?>; grid-row: <?= $y - 3 ?>/<?= $y - 3 ?>; transform: rotateY(180deg)"
             alt="HOUSE=0;Tile=12">
        <img src="<?= getenv('HOUSE0_13') ?>"
             style="grid-column: <?= $x + 1 ?>/<?= $x + 1 ?>; grid-row: <?= $y - 3 ?>/<?= $y - 3 ?>;"
             alt="HOUSE=0;Tile=13">
        <img src="<?= getenv('HOUSE0_13') ?>"
             style="grid-column: <?= $x + 2 ?>/<?= $x + 2 ?>; grid-row: <?= $y - 3 ?>/<?= $y - 3 ?>; transform: rotateY(180deg)"
             alt="HOUSE=0;Tile=13">
        <img src="<?= getenv('HOUSE0_14') ?>"
             style="grid-column: <?= $x + 1 ?>/<?= $x + 1 ?>; grid-row: <?= $y - 2 ?>/<?= $y - 2 ?>;"
             alt="HOUSE=0;Tile=14">
        <img src="<?= getenv('HOUSE0_14') ?>"
             style="grid-column: <?= $x + 2 ?>/<?= $x + 2 ?>; grid-row: <?= $y - 2 ?>/<?= $y - 2 ?>; transform: rotateY(180deg)"
             alt="HOUSE=0;Tile=14">
    <?php }

    public static function generateWheat($x, $y, $size)
    {
        $html = "";
        if ($size == 1) {
            $html = $html.'<img class="wheat"
                                src="'.getenv('WHEAT_IMG').'"
                                style="grid-row: '.$y.'/'.$y.'; grid-column: '.$x.'/'.$x.';"
                                alt="wheat">';
        } else if ($size == 2) {
            $html = $html.'<img class="wheat"
                                src="'.getenv('WHEAT_END_IMG').'"
                                style="grid-row: '.$y.'/'.$y.'; grid-column: '.$x.'/'.$x.'; transform: rotateY(-180deg);"
                                alt="wheat">';
            $html = $html.'<img class="wheat"
                                src="'.getenv('WHEAT_END_IMG').'"
                                style="grid-row: '.$y.'/'.$y.'; grid-column: '.($x+1).'/'.($x+1).';"
                                alt="wheat">';
        } else {
            $html = $html.'<img class="wheat"
                                src="'.getenv('WHEAT_END_IMG').'"
                                style="grid-row: '.$y.'/'.$y.'; grid-column: '.$x.'/'.$x.'; transform: rotateY(-180deg);"
                                alt="wheat">';
            for ($i = 1; $i < $size; $i++) {
                $html = $html.'<img class="wheat"
                                src="'.getenv('WHEAT_IMG').'"
                                style="grid-row: '.$y.'/'.$y.'; grid-column: '.($x+$i).'/'.($x+$i).';"
                                alt="wheat">';
            }
            $html = $html.'<img class="wheat"
                                src="'.getenv('WHEAT_END_IMG').'"
                                style="grid-row: '.$y.'/'.$y.'; grid-column: '.($x+$i).'/'.($x+$i).';"
                                alt="wheat">';
        }

        return $html;
    }

    public static function generateTree($x, $y, $size, $zIndex = 0, $extraStyle = "")
    {
        $html = '<img src="'.getenv("TREE_LOG_1").'"
                      style="grid-column: '.$x.'/'.$x.'; grid-row: '.$y.'/'.$y.'; z-index: '.$zIndex.'; '.$extraStyle.'"
                      alt="TREE_LOG=0;Tile=1">';
        for ($i = 1; $size > 2 && $i < $size; $i++) {
            $html = $html.'<img src="'.getenv("TREE_1").'"
                                style="grid-column: '.$x.'/'.$x.'; grid-row: '.($y-$i).'/'.($y-$i).'; z-index: '.$zIndex.'; '.$extraStyle.'"
                                alt="TREE_LOG=0;Tile=1">';
        }
        return $html.'<img src="'.getenv("TREE_2").'"
                           style="grid-column: '.$x.'/'.$x.'; grid-row: '.($y-$i).'/'.($y-$i).'; z-index: '.$zIndex.'; '.$extraStyle.'"
                           alt="TREE_LOG=0;Tile=1">';
    }

    public static function generateMoulin($x, $y, $zIndex = 0)
    {
        $html = '<div class="moulins" 
                      style="grid-column: '.$x.'/'.$x.'; grid-row: '.$y.'/'.$y.'; z-index: '.$zIndex.'">';
        for ($i = 1; $i < 3; $i++) {
            for ($j = 6; $j >= 1; $j--) {
                if ($i == 1 && $j == 5 || $i == 1 && $j == 4) {
                    $html = $html.'<img src="'.getenv("MOULIN_".($j+5)).'"
                                        style="grid-column: '.$i.'/'.$i.'; grid-row: '.(6-$j).'/'.(6-$j).'; position: relative; top: -20px; z-index:'.$zIndex.'
                                        alt="MOULIN_'.($j + 5).'">';
                } else {
                    $html = $html.'<img src="'.getenv("MOULIN_".(($i == 1) ? $j : $j + 5)).'"
                                        style="grid-column: '.$i.'/'.$i.'; grid-row: '.(6-$j).'/'.(6-$j).'; z-index:'.$zIndex.'
                                        alt="MOULIN_'.$j.'">';
                }
            }
        }
        $html = $html.'<img src="'.getenv("MOULIN_11").'"
                            style="grid-column: 3/3; grid-row: 5/5; z-index: '.$zIndex.'"
                            alt="MOULIN_11">';

        return $html.'</div>';
    }

    public static function generateTorch($x, $y, $extraStyle)
    {
        $html = '<div class="torch" 
                      style="left: '.$x.'px; top: '.$y.'px; '.$extraStyle.'">';
        $html = $html.'<div class="hexagon  light-torch" 
                            style="position: relative; left: -5px; top: -10px; opacity: 25%;"></div>';
        $html = $html.'<div class="first-torch" 
                            style="grid-column: 1/1; grid-row: 1/1; position: absolute; left: 20px; width: 48px; height: 48px"></div>';
        $html = $html.'<img src="res/torch-sticks.png" 
                            style="grid-column: 1/1; grid-row: 2/2; position: absolute; left: 20px;" 
                            alt="torch">';
        $html = $html.'<img src="res/torch-sticks-end.png" 
                            style="grid-column: 1/1; grid-row: 3/3; position: absolute; left: 20px;" 
                            alt="torch">';
        return $html.'</div>';
    }

    public static function spawnBird($y=0, $frameSpeed=500, $moveSpeed=30, $zIndex=1)
    {
        return '<div class="birds-brun-fly" 
                     style="z-index: '.$zIndex.';
                            top: '.$y.'px;
                            animation: birds-fly-frames '.$frameSpeed.'ms linear infinite, 
                                       birds-fly-move '.$moveSpeed.'s linear infinite;"></div>';
    }
}
