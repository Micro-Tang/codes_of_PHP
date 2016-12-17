<?php
    /**
     * @file select_sort.php
     * @author 唐堃
     * @date 2016/12/17 下午12:02
     * @description:
     */
    
    /**
     * 选择排序
     *
     * @param array $arr
     *
     * @return array $arr
     */
    function select_sort($arr) {
        //双重循环完成，外层控制轮数，内层控制比较次数
        $len=count($arr);
        for($i=0; $i<$len; $i++) {
            //先假设最小的值的位置
            $min_index = $i;
            for($j=$i+1; $j<$len; $j++) {
                if($arr[$min_index] > $arr[$j]) {
                    //比较，发现更小的,记录下最小值的位置；并且在下次比较时采用已知的最小值进行比较。
                    $min_index = $j;
                }
            }
            //已经确定了当前的最小值的位置，保存到$min_index中。如果发现最小值的位置与当前假设的位置$i不同，则位置互换即可。
            if($min_index != $i) {
                $tmp = $arr[$min_index];
                $arr[$min_index] = $arr[$i];
                $arr[$i] = $tmp;
            }
        }
        //返回最终结果
        return $arr;
    }