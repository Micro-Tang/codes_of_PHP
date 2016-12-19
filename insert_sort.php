<?php
    /**
     * @file insert_sort.php
     * @author 唐堃
     * @date 2016/12/19 下午4:44
     * @description:
     */
    /**
     * 插入排序
     *
     * @param array $arr
     *
     * @return array
     */
    function insert_sort(array $arr){
        
        /**
         * 先默认第一个下标为0的数是排好的数
         */
        for($i=1;$i<count($arr);$i++){
    
            /**
             * 确定插入比较的数
             */
            $insertVal=$arr[$i];
            
            /**
             * 确定与前面比较的数比较
             */
            $insertIndex=$i-1;
    
            /**没有找到位置
             *
             */
            while($insertIndex >= 0 && $insertVal < $arr[$insertIndex]){
    
                /**
                 * 把数后移
                 */
                $arr[$insertIndex+1]=$arr[$insertIndex];
                $insertIndex--;
            }
            
            /**
             * 插入(给$insertval找到位置了)
             */
            $arr[$insertIndex+1] = $insertVal;
        }
        return $arr;
    }