<?php

class Environment
{
    public static function generateHouse0($posXinit, $posYinit)
    { ?>
        <img src="<?=getenv('HOUSE0_0')?>"
             style="grid-column: <?=$posXinit?>/<?=$posXinit?>; grid-row: <?=$posYinit?>/<?=$posYinit?>;"
             alt="HOUSE=0;Tile=0">
        <img src="<?=getenv('HOUSE0_1')?>"
             style="grid-column: <?=$posXinit?>/<?=$posXinit?>; grid-row: <?=$posYinit+1?>/<?=$posYinit+1?>;"
             alt="HOUSE=0;Tile=1">
        <img src="<?=getenv('HOUSE0_2')?>"
             style="grid-column: <?=$posXinit+1?>/<?=$posXinit+1?>; grid-row: <?=$posYinit?>/<?=$posYinit?>;"
             alt="HOUSE=0;Tile=2">
        <img src="<?=getenv('HOUSE0_3')?>"
             style="grid-column: <?=$posXinit+1?>/<?=$posXinit+1?>; grid-row: <?=$posYinit+1?>/<?=$posYinit+1?>;"
             alt="HOUSE=0;Tile=3">
        <img src="<?=getenv('HOUSE0_4')?>"
             style="grid-column: <?=$posXinit+2?>/<?=$posXinit+2?>; grid-row: <?=$posYinit+0?>/<?=$posYinit+0?>;"
             alt="HOUSE=0;Tile=4">
        <img src="<?=getenv('HOUSE0_5')?>"
             style="grid-column: <?=$posXinit+2?>/<?=$posXinit+2?>; grid-row: <?=$posYinit+1?>/<?=$posYinit+1?>;"
             alt="HOUSE=0;Tile=5">
        <img src="<?=getenv('HOUSE0_6')?>"
             style="grid-column: <?=$posXinit+3?>/<?=$posXinit+3?>; grid-row: <?=$posYinit?>/<?=$posYinit?>;"
             alt="HOUSE=0;Tile=6">
        <img src="<?=getenv('HOUSE0_7')?>"
             style="grid-column: <?=$posXinit+3?>/<?=$posXinit+3?>; grid-row: <?=$posYinit+1?>/<?=$posYinit+1?>;"
             alt="HOUSE=0;Tile=7">
        <img src="<?=getenv('HOUSE0_8')?>"
             style="grid-column: <?=$posXinit-1?>/<?=$posXinit-1?>; grid-row: <?=$posYinit?>/<?=$posYinit?>;"
             alt="HOUSE=0;Tile=8">
        <img src="<?=getenv('HOUSE0_9')?>"
             style="grid-column: <?=$posXinit?>/<?=$posXinit?>; grid-row: <?=$posYinit-1?>/<?=$posYinit-1?>;"
             alt="HOUSE=0;Tile=9">
        <img src="<?=getenv('HOUSE0_10')?>"
             style="grid-column: <?=$posXinit?>/<?=$posXinit?>; grid-row: <?=$posYinit-2?>/<?=$posYinit-2?>;"
             alt="HOUSE=0;Tile=10">
        <img src="<?=getenv('HOUSE0_9')?>"
             style="grid-column: <?=$posXinit+3?>/<?=$posXinit+3?>; grid-row: <?=$posYinit-1?>/<?=$posYinit-1?>; transform: rotateY(180deg)"
             alt="HOUSE=0;Tile=9">
        <img src="<?=getenv('HOUSE0_10')?>"
             style="grid-column: <?=$posXinit+3?>/<?=$posXinit+3?>; grid-row: <?=$posYinit-2?>/<?=$posYinit-2?>; transform: rotateY(180deg)"
             alt="HOUSE=0;Tile=10">
        <img src="<?=getenv('HOUSE0_11')?>"
             style="grid-column: <?=$posXinit+1?>/<?=$posXinit+1?>; grid-row: <?=$posYinit-1?>/<?=$posYinit-1?>;"
             alt="HOUSE=0;Tile=11">
        <img src="<?=getenv('HOUSE0_11')?>"
             style="grid-column: <?=$posXinit+2?>/<?=$posXinit+2?>; grid-row: <?=$posYinit-1?>/<?=$posYinit-1?>;"
             alt="HOUSE=0;Tile=11">
        <img src="<?=getenv('HOUSE0_12')?>"
             style="grid-column: <?=$posXinit?>/<?=$posXinit?>; grid-row: <?=$posYinit-3?>/<?=$posYinit-3?>;"
             alt="HOUSE=0;Tile=12">
        <img src="<?=getenv('HOUSE0_12')?>"
             style="grid-column: <?=$posXinit+3?>/<?=$posXinit+3?>; grid-row: <?=$posYinit-3?>/<?=$posYinit-3?>; transform: rotateY(180deg)"
             alt="HOUSE=0;Tile=12">
        <img src="<?=getenv('HOUSE0_13')?>"
             style="grid-column: <?=$posXinit+1?>/<?=$posXinit+1?>; grid-row: <?=$posYinit-3?>/<?=$posYinit-3?>;"
             alt="HOUSE=0;Tile=13">
        <img src="<?=getenv('HOUSE0_13')?>"
             style="grid-column: <?=$posXinit+2?>/<?=$posXinit+2?>; grid-row: <?=$posYinit-3?>/<?=$posYinit-3?>; transform: rotateY(180deg)"
             alt="HOUSE=0;Tile=13">
        <img src="<?=getenv('HOUSE0_14')?>"
             style="grid-column: <?=$posXinit+1?>/<?=$posXinit+1?>; grid-row: <?=$posYinit-2?>/<?=$posYinit-2?>;"
             alt="HOUSE=0;Tile=14">
        <img src="<?=getenv('HOUSE0_14')?>"
             style="grid-column: <?=$posXinit+2?>/<?=$posXinit+2?>; grid-row: <?=$posYinit-2?>/<?=$posYinit-2?>; transform: rotateY(180deg)"
             alt="HOUSE=0;Tile=14">
    <?php }

    public static function generateWheat($posXinit, $posYinit, $size)
    {
        if ($size == 1) { ?>
            <img class="wheat"
                 src="<?=getenv('WHEAT_IMG')?>"
                 style="grid-row: <?=$posYinit?>/<?=$posYinit?>; grid-column: <?=$posXinit?>/<?=$posXinit?>;"
                 alt="wheat">
        <?php } else if ($size == 2) { ?>
            <img class="wheat"
                 src="<?=getenv('WHEAT_END_IMG')?>"
                 style="grid-row: <?=$posYinit?>/<?=$posYinit?>; grid-column: <?=$posXinit?>/<?=$posXinit?>; transform: rotateY(-180deg);"
                 alt="wheat">
            <img class="wheat"
                 src="<?=getenv('WHEAT_END_IMG')?>"
                 style="grid-row: <?=$posYinit?>/<?=$posYinit?>; grid-column: <?=$posXinit+1?>/<?=$posXinit+1?>;"
                 alt="wheat">
        <?php } else { ?>
            <img class="wheat"
                 src="<?=getenv('WHEAT_END_IMG')?>"
                 style="grid-row: <?=$posYinit?>/<?=$posYinit?>; grid-column: <?=$posXinit?>/<?=$posXinit?>; transform: rotateY(-180deg);"
                 alt="wheat">
        <?php
            for ($i = 1; $i < $size; $i++) { ?>
                <img class="wheat"
                     src="<?=getenv('WHEAT_IMG')?>"
                     style="grid-row: <?=$posYinit?>/<?=$posYinit?>; grid-column: <?=$posXinit+$i?>/<?=$posXinit+$i?>;"
                     alt="wheat">
            <?php } ?>
            <img class="wheat"
                 src="<?=getenv('WHEAT_END_IMG')?>"
                 style="grid-row: <?=$posYinit?>/<?=$posYinit?>; grid-column: <?=$posXinit+$i?>/<?=$posXinit+$i?>;"
                 alt="wheat">
        <?php }
    }

    public static function generateTree($posXinit, $posYinit, $size, $zIndex=0)
    { ?>
        <img src="<?=getenv('TREE_LOG_1')?>"
             style="grid-column: <?=$posXinit?>/<?=$posXinit?>; grid-row: <?=$posYinit?>/<?=$posYinit?>; z-index: <?=$zIndex?>;"
             alt="TREE_LOG=0;Tile=1">
        <?php
            for ($i = 1; $i < $size; $i++) { ?>
        <img src="<?=getenv('TREE_1')?>"
             style="grid-column: <?=$posXinit?>/<?=$posXinit?>; grid-row: <?=$posYinit-$i?>/<?=$posYinit-$i?>; z-index: <?=$zIndex?>;"
             alt="TREE=0;Tile=1">
        <?php } ?>
        <img src="<?=getenv('TREE_2')?>"
             style="grid-column: <?=$posXinit?>/<?=$posXinit?>; grid-row: <?=$posYinit-$i?>/<?=$posYinit-$i?>; z-index: <?=$zIndex?>;"
             alt="TREE=0;Tile=2">
    <?php }
}
