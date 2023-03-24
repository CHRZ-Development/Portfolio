<?php
class Environment
{
    public static function generateHouse0($posXinit, $posYinit)
    { ?>
        <img src="<?= getenv('HOUSE0_0') ?>"
             style="grid-column: <?= $posXinit ?>/<?= $posXinit ?>; grid-row: <?= $posYinit ?>/<?= $posYinit ?>;"
             alt="HOUSE=0;Tile=0">
        <img src="<?= getenv('HOUSE0_1') ?>"
             style="grid-column: <?= $posXinit ?>/<?= $posXinit ?>; grid-row: <?= $posYinit + 1 ?>/<?= $posYinit + 1 ?>;"
             alt="HOUSE=0;Tile=1">
        <img src="<?= getenv('HOUSE0_2') ?>"
             style="grid-column: <?= $posXinit + 1 ?>/<?= $posXinit + 1 ?>; grid-row: <?= $posYinit ?>/<?= $posYinit ?>;"
             alt="HOUSE=0;Tile=2">
        <img src="<?= getenv('HOUSE0_3') ?>"
             style="grid-column: <?= $posXinit + 1 ?>/<?= $posXinit + 1 ?>; grid-row: <?= $posYinit + 1 ?>/<?= $posYinit + 1 ?>;"
             alt="HOUSE=0;Tile=3">
        <img src="<?= getenv('HOUSE0_4') ?>"
             style="grid-column: <?= $posXinit + 2 ?>/<?= $posXinit + 2 ?>; grid-row: <?= $posYinit + 0 ?>/<?= $posYinit + 0 ?>;"
             alt="HOUSE=0;Tile=4">
        <img src="<?= getenv('HOUSE0_5') ?>"
             style="grid-column: <?= $posXinit + 2 ?>/<?= $posXinit + 2 ?>; grid-row: <?= $posYinit + 1 ?>/<?= $posYinit + 1 ?>;"
             alt="HOUSE=0;Tile=5">
        <img src="<?= getenv('HOUSE0_6') ?>"
             style="grid-column: <?= $posXinit + 3 ?>/<?= $posXinit + 3 ?>; grid-row: <?= $posYinit ?>/<?= $posYinit ?>;"
             alt="HOUSE=0;Tile=6">
        <img src="<?= getenv('HOUSE0_7') ?>"
             style="grid-column: <?= $posXinit + 3 ?>/<?= $posXinit + 3 ?>; grid-row: <?= $posYinit + 1 ?>/<?= $posYinit + 1 ?>;"
             alt="HOUSE=0;Tile=7">
        <img src="<?= getenv('HOUSE0_8') ?>"
             style="grid-column: <?= $posXinit - 1 ?>/<?= $posXinit - 1 ?>; grid-row: <?= $posYinit ?>/<?= $posYinit ?>;"
             alt="HOUSE=0;Tile=8">
        <img src="<?= getenv('HOUSE0_9') ?>"
             style="grid-column: <?= $posXinit ?>/<?= $posXinit ?>; grid-row: <?= $posYinit - 1 ?>/<?= $posYinit - 1 ?>;"
             alt="HOUSE=0;Tile=9">
        <img src="<?= getenv('HOUSE0_10') ?>"
             style="grid-column: <?= $posXinit ?>/<?= $posXinit ?>; grid-row: <?= $posYinit - 2 ?>/<?= $posYinit - 2 ?>;"
             alt="HOUSE=0;Tile=10">
        <img src="<?= getenv('HOUSE0_9') ?>"
             style="grid-column: <?= $posXinit + 3 ?>/<?= $posXinit + 3 ?>; grid-row: <?= $posYinit - 1 ?>/<?= $posYinit - 1 ?>; transform: rotateY(180deg)"
             alt="HOUSE=0;Tile=9">
        <img src="<?= getenv('HOUSE0_10') ?>"
             style="grid-column: <?= $posXinit + 3 ?>/<?= $posXinit + 3 ?>; grid-row: <?= $posYinit - 2 ?>/<?= $posYinit - 2 ?>; transform: rotateY(180deg)"
             alt="HOUSE=0;Tile=10">
        <img src="<?= getenv('HOUSE0_11') ?>"
             style="grid-column: <?= $posXinit + 1 ?>/<?= $posXinit + 1 ?>; grid-row: <?= $posYinit - 1 ?>/<?= $posYinit - 1 ?>;"
             alt="HOUSE=0;Tile=11">
        <img src="<?= getenv('HOUSE0_11') ?>"
             style="grid-column: <?= $posXinit + 2 ?>/<?= $posXinit + 2 ?>; grid-row: <?= $posYinit - 1 ?>/<?= $posYinit - 1 ?>;"
             alt="HOUSE=0;Tile=11">
        <img src="<?= getenv('HOUSE0_12') ?>"
             style="grid-column: <?= $posXinit ?>/<?= $posXinit ?>; grid-row: <?= $posYinit - 3 ?>/<?= $posYinit - 3 ?>;"
             alt="HOUSE=0;Tile=12">
        <img src="<?= getenv('HOUSE0_12') ?>"
             style="grid-column: <?= $posXinit + 3 ?>/<?= $posXinit + 3 ?>; grid-row: <?= $posYinit - 3 ?>/<?= $posYinit - 3 ?>; transform: rotateY(180deg)"
             alt="HOUSE=0;Tile=12">
        <img src="<?= getenv('HOUSE0_13') ?>"
             style="grid-column: <?= $posXinit + 1 ?>/<?= $posXinit + 1 ?>; grid-row: <?= $posYinit - 3 ?>/<?= $posYinit - 3 ?>;"
             alt="HOUSE=0;Tile=13">
        <img src="<?= getenv('HOUSE0_13') ?>"
             style="grid-column: <?= $posXinit + 2 ?>/<?= $posXinit + 2 ?>; grid-row: <?= $posYinit - 3 ?>/<?= $posYinit - 3 ?>; transform: rotateY(180deg)"
             alt="HOUSE=0;Tile=13">
        <img src="<?= getenv('HOUSE0_14') ?>"
             style="grid-column: <?= $posXinit + 1 ?>/<?= $posXinit + 1 ?>; grid-row: <?= $posYinit - 2 ?>/<?= $posYinit - 2 ?>;"
             alt="HOUSE=0;Tile=14">
        <img src="<?= getenv('HOUSE0_14') ?>"
             style="grid-column: <?= $posXinit + 2 ?>/<?= $posXinit + 2 ?>; grid-row: <?= $posYinit - 2 ?>/<?= $posYinit - 2 ?>; transform: rotateY(180deg)"
             alt="HOUSE=0;Tile=14">
    <?php }

    public static function generateWheat($posXinit, $posYinit, $size)
    {
        $html = "";
        if ($size == 1) {
            $html = $html.'<img class="wheat"
                                src="'.getenv('WHEAT_IMG').'"
                                style="grid-row: '.$posYinit.'/'.$posYinit.'; grid-column: '.$posXinit.'/'.$posXinit.';"
                                alt="wheat">';
        } else if ($size == 2) {
            $html = $html.'<img class="wheat"
                                src="'.getenv('WHEAT_END_IMG').'"
                                style="grid-row: '.$posYinit.'/'.$posYinit.'; grid-column: '.$posXinit.'/'.$posXinit.'; transform: rotateY(-180deg);"
                                alt="wheat">';
            $html = $html.'<img class="wheat"
                                src="'.getenv('WHEAT_END_IMG').'"
                                style="grid-row: '.$posYinit.'/'.$posYinit.'; grid-column: '.($posXinit+1).'/'.($posXinit+1).';"
                                alt="wheat">';
        } else {
            $html = $html.'<img class="wheat"
                                src="'.getenv('WHEAT_END_IMG').'"
                                style="grid-row: '.$posYinit.'/'.$posYinit.'; grid-column: '.$posXinit.'/'.$posXinit.'; transform: rotateY(-180deg);"
                                alt="wheat">';
            for ($i = 1; $i < $size; $i++) {
                $html = $html.'<img class="wheat"
                                src="'.getenv('WHEAT_IMG').'"
                                style="grid-row: '.$posYinit.'/'.$posYinit.'; grid-column: '.($posXinit+$i).'/'.($posXinit+$i).';"
                                alt="wheat">';
            }
            $html = $html.'<img class="wheat"
                                src="'.getenv('WHEAT_END_IMG').'"
                                style="grid-row: '.$posYinit.'/'.$posYinit.'; grid-column: '.($posXinit+$i).'/'.($posXinit+$i).';"
                                alt="wheat">';
        }

        return $html;
    }

    public static function generateTree($posXinit, $posYinit, $size, $zIndex = 0, $extraStyle = "")
    {
        $html = '<img src="'.getenv("TREE_LOG_1").'"
                      style="grid-column: '.$posXinit.'/'.$posXinit.'; grid-row: '.$posYinit.'/'.$posYinit.'; z-index: '.$zIndex.'; '.$extraStyle.'"
                      alt="TREE_LOG=0;Tile=1">';
        for ($i = 1; $size > 2 && $i < $size; $i++) {
            $html = $html.'<img src="'.getenv("TREE_1").'"
                                style="grid-column: '.$posXinit.'/'.$posXinit.'; grid-row: '.($posYinit-$i).'/'.($posYinit-$i).'; z-index: '.$zIndex.'; '.$extraStyle.'"
                                alt="TREE_LOG=0;Tile=1">';
        }
        return $html.'<img src="'.getenv("TREE_2").'"
                           style="grid-column: '.$posXinit.'/'.$posXinit.'; grid-row: '.($posYinit-$i).'/'.($posYinit-$i).'; z-index: '.$zIndex.'; '.$extraStyle.'"
                           alt="TREE_LOG=0;Tile=1">';
    }

    public static function generateMoulin($posXinit, $posYinit, $zIndex = 0)
    { ?>
        <div class="moulins"
             style="grid-column: <?= $posXinit ?>/<?= $posXinit ?>; grid-row: <?= $posYinit ?>/<?= $posYinit ?>; z-index: <?= $zIndex ?>">
            <?php for ($i = 1; $i < 3; $i++) {
                for ($j = 6; $j >= 1; $j--) {
                    if ($j == 5 && $i == 1 || $j == 4 && $i == 1) { ?>
                        <img src="<?= getenv("MOULIN_" . ($j + 5)) ?>"
                             style="grid-column: <?= $i ?>/<?= $i ?>; grid-row: <?= 6 - $j ?>/<?= 6 - $j ?>; position: relative; top: -20px; z-index: <?= $zIndex ?>"
                             alt="MOULIN_<?= $j + 5 ?>">
                    <?php } else { ?>
                        <img src="<?= getenv("MOULIN_" . (($i == 1) ? $j : $j + 5)) ?>"
                             style="grid-column: <?= $i ?>/<?= $i ?>; grid-row: <?= 6 - $j ?>/<?= 6 - $j ?>; z-index: <?= $zIndex ?>"
                             alt="MOULIN_<?= $j ?>">
                    <?php }
                }
            } ?>
            <img src="<?= getenv("MOULIN_11)") ?>"
                 style="grid-column: 3/3; grid-row: 5/5; z-index: <?= $zIndex ?>"
                 alt="MOULIN_11">
        </div>
    <?php }
}
