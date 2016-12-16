<?php
    /**
     * @file bubble_sort.php
     * @author 唐堃
     * @date 2016-12-16
     */
    
    /**
     * 冒泡排序
     * @param $arr
     *
     * @return mixed
     */
    function bubble_sort(array $arr)
    {
        /**
         * 数组元素个数
         */
        $count = count($arr);
        
        for ($i = 0; $i < $count; $i++) {
            for ($j = $i + 1; $j < $count; $j++) {
                if ($arr[$j] < $arr[$i]) {
                    $temp = $arr[$i];
                    $arr[$i] = $arr[$j];
                    $arr[$j] = $temp;
                }
            }
        }
        return $arr;
    }