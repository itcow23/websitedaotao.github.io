<?php

class BaiHocObject{
    private $maBaiHoc;
    private $tenBaiHoc;
    private $tieuDe;
    private $moTa;
    private $video;

    public function __construct($row){
        $this->maBaiHoc = $row['maBaiHoc'] ?? '';
        $this->tenBaiHoc = $row['tenBaiHoc'];
        $this->tieuDe = $row['tieuDe'];
        $this->moTa = $row['moTa'];
        $this->video = $row['video'];
    }

    public function get_maBaiHoc(){
        return $this->maBaiHoc;
    }
    public function set_maBaiHoc($var){
        $this->maBaiHoc = $var;
    }
    public function get_tenBaiHoc(){
        return $this->tenBaiHoc;
    }
    public function set_tenBaiHoc($var){
        $this->tenBaiHoc = $var;
    }
    public function get_tieuDe(){
        return $this->tieuDe;
    }
    public function set_tieuDe($var){
        $this->tieuDe = $var;
    }
    public function get_moTa(){
        return $this->moTa;
    }
    public function set_moTa($var){
        $this->moTa = $var;
    }
    public function get_video(){
        return $this->video;
    }
    public function set_video($var){
        $this->video = $var;
    }
}