<?php
    /**
     * @file quick_sort.php
     * @author 唐堃
     * @date 2016/12/18 下午12:20
     * @description:
     */
    
    /**
     * 快速排序
     *
     * @param array $arr
     *
     * @return array
     */
    function quick_sort(array $arr)
    {
        /**
         * 如果数组只有一个元素，返回
         */
        if (!isset($arr[1])) {
            return $arr;
        }
    
        /**
         * 数组第一个数为分割线
         * 大于$mid的数放在$rightArray
         * 小于$mid的数放在leftArray
         */
        $mid = $arr[0];
        $leftArray = array();
        $rightArray = array();
        
        foreach ($arr as $value) {
            if ($value > $mid) {
                array_push($rightArray, $value);
            }
            if ($value < $mid) {
                array_push($leftArray, $value);
            }
        }
    
        /**
         * 递归思想分别对两个数组再次快排
         */
        $leftArray = quick_sort($leftArray);
    
        /**
         * 不能忘记$mid元素，放在$leftArray最后
         */
        array_push($leftArray, $mid);
        
        $rightArray = quick_sort($rightArray);
        
        return array_merge($leftArray, $rightArray);
    }