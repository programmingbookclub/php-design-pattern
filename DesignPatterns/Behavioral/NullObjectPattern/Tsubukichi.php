<?php

namespace DesignPatterns\Behavioral\NullObjectPattern;

/**
 * Class Tsubukichi.
 */
class Tsubukichi implements NPC
{
    /**
     * @param int $price
     * @param int $count
     */
    public function buyTurnips(int $price, int $count)
    {
        echo "[粒狸] 我是粒狸，我沒有在賣大頭菜狸。";
        echo "[豆狸] 沒有在賣。";
    }

    /**
     * @param int $price
     * @param int $count
     */
    public function sellTurnips(int $price, int $count)
    {
        $total = $price * $count;
        echo "[粒狸] 現在的大頭菜價格是 1 棵 $price 鈴錢！";
        echo "[豆狸] 鈴錢！";
        echo "[粒狸] 好了！那麼，一共是 $total 鈴錢，確定要賣掉嗎？";
        echo "[豆狸] 賣掉嗎？";
    }
}
