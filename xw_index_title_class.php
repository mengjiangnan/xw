<?php
/*
 * wx首页标题封装类
 * $title变量存储标题名称
 * setTitle函数设置标题名称
 * getTitle函数返回标题名称
 */
  class index_title {
      private $title;

      public function setTitle($title)
      {
          $this->title = $title;
      }

      public function getTitle()
      {
          return $this->title;
      }
  }
?>