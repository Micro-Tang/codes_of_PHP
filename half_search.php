<?php
    /**
     * @file half_search.php
     * @author 唐堃
     * @date 2016/12/20 下午7:09
     * @description:
     */
    
    /**
     *
     * 二分查找
     *
     * @param array $arr
     * @param       $val
     *
     * @return bool|int
     */
    function half_search(array $arr, $val)
    {
        $len = count($arr);
        $low = 0;
        $high = $len - 1;
        
        while ($low <= $high) {
            $mid = intval(($high - $low) / 2);
            
            if ($arr[$mid] > $val) {
                $high = $mid - 1;
            } elseif ($arr[$mid] < $val) {
                $low = $mid + 1;
            } else {
                return $mid;
            }
        }
        
        return false;
    }