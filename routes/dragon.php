<?php
/**
 * Created by PhpStorm.
 * User: victordark
 * Date: 2018/3/19
 * Time: 上午12:06
 */

header("Content-Type:text/html; charset=utf-8");

function dragon($numPlayer, $playerName)
{
    $flag 			=  1;
    $dragon 		= [];
    $dragonCheck 	= [];
    $dragonCheck2 	= [];
    $pick 			= [];
    $bounceValue		= 0;

    foreach (range(0, 3) as $i) {
        foreach(range(0, $numPlayer-1) as $k) {
            $pick[$k] = $k;
        }
        echo "pick = ";
        print_r($pick);
        foreach (range(0,$numPlayer - 1) as $j) {
            if ($i === 0) {
                $dragon[$i][$j] = $j;
            } else {
                $number = $pick[0];
                if ($number !== $j && $flag !== 1) {
                    $dragon[$i][$j] = $number;
                    array_shift($pick);
                    array_shift($dragonCheck);
                    array_shift($dragonCheck2);
                    array_push($dragonCheck, $j);
                    array_push($dragonCheck2, $dragon[$i-1][$j]);
                } else {
                    while ($number === $j || $flag === 1) {
                        shuffle($pick);
                        $number = $pick[0];
                        foreach (range(0,5) as $item) {
                            if (!isset($dragonCheck2[$number][$item])) {
                                if (!isset($dragonCheck[$number][$item])) {
                                    if (isset($dragon[$i - 1][$j])) {
                                        if($dragonCheck2[$number][$item] === $dragon[$i - 1][$j] || $dragonCheck[$number][$item] === $j) {
                                            $flag = 1;
                                            break;
                                        } else {
                                            $flag = 0;
                                        }
                                    }
                                }
                            }
                            $bounceValue += 1;
                            if ($bounceValue > $numPlayer * 1000) {
                                dragon($numPlayer, $playerName);
                            }
                        }
                    }
                }
            }
        }
    }

    foreach (range(0, 4) as $i) {
        foreach (range(0, $numPlayer) as $j) {
            $dragon[$i][$j] += 1;
            echo $dragon[$i][$j];
        }
    }
}

$playerName = ["aaa", "bbb", "ccc", "ddd"];
$numPlayer = 4;

dragon($numPlayer, $playerName);