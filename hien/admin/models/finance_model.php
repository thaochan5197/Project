<?php
require_once '../../models/db.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class FinanceModel extends DB{
	public function insertAdvance($data){
        $check = $this->checkDuplicateAdvance($data);
        if(!$check){
            return false;
        }else {
            $query = 'INSERT INTO sql12203272.tamung(MaKH,LyDoTamUng,SoTienTamUng,ThoiHanThanhToan,NgayTao)
                   VALUES ("' . $data["MaKH"] . '", "' . $data["Lydo"]. '", "' . $data["SoTienTamUng"] . '","' . $data["ThoiHanThanhToan"] . '","' . $data["NgayTao"] . '")';
            $result = $this->insertNew($query);

            
            return $result;
         
        }
    }

    //check DuplicateAdvance
        public function checkDuplicateAdvance($data){
        $query = 'Select * From tamung where MaKH="'.$data['MaKH'].'" ';
        $result = $this->executeQuery($query);
        if(count($result) > 0){
            return false;
        }else{
            return true;
        }
    }

    public function insertPayment($data){
        $check = $this->checkDuplicatePayment($data);
        if(!$check){
            return false;
        }else {
            $query = 'INSERT INTO sql12203272.thanhtoantong(MaKH,ChiPhiDiLai,ChiPhiLuuTru,PhiPhatSinh,SoTienTamUng,NgayTao)
                   VALUES ("' . $data["MaKH"] . '", "' . $data["ChiDiLai"]. '", "' . $data["PhiLuuTru"] . '","' . $data["PhiPhatSinh"] . '","' . $data["TienTamUng"] . '","' . $data["NgayTao"] . '")';
            $result = $this->insertNew($query);

            
            return $result;
         
        }
    }

    //check DuplicateAdvance
        public function checkDuplicatePayment($data){
        $query = 'Select * From thanhtoantong where MaKH="'.$data['MaKH'].'" ';
        $result = $this->executeQuery($query);
        if(count($result) > 0){
            return false;
        }else{
            return true;
        }
    }


}