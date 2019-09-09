<?php if(!defined('BASEPATH')) exit('No direct script access allowed!');

class CwpModel extends CI_Model {
    public function getImageByAlbumId($album_id) {
        $this->db->select('*');
        $this->db->where('album_id', $album_id);
        $sql = "SELECT * FROM `image_tb` WHERE `album_id`=  $album_id and `is_cover`=0";
        $query = $this->db->query($sql);
        $data = $query->result_array();
        $count = count($data);
        if ($count < 1) {
            return false;
        } else {
            return $data;
        }
    }
		public function getAlbumCover(){
					$sql = "SELECT * FROM `image_tb` i, `album_details_tb` a WHERE a.`id` = i.`album_id` AND i.`is_cover` = 1 ORDER BY a.`id` ASC";
					$query = $this->db->query($sql);
					$data = $query->result_array();
					$count = count($data);
					if ($count < 1) {
							return false;
					} else {
							return $data;
					}
		}
		public function getPortfolioImage(){
					$sql = "SELECT * FROM `portfolio_tb`";
					$query = $this->db->query($sql);
					$data = $query->result_array();
					$count = count($data);
					if ($count < 1) {
							return false;
					} else {
							return $data;
					}
		}
		public function getFilm(){
					$sql = "SELECT * FROM `video_tb`";
					$query = $this->db->query($sql);
					$data = $query->result_array();
					$count = count($data);
					if ($count < 1) {
							return false;
					} else {
							return $data;
					}
		}
}