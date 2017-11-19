<?php
require_once '../../models/db.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class UserModel extends DB{

    //check username and password for login action
    public function checkUserInfo($user_name, $password){
        $query = 'Select * From DangNhap where user = "'.$user_name. '" and pw ="'.$password.'"';
        $result = $this->executeQuery($query);
        return $result;
    }

    //
    public function userInfo($id){
        $query = 'Select * From KeHoach where MaKH = " '.$id.' " ';
        $result = $this->executeQuery($query);
        return $result;

    }

    //get all users
    public function getAllUsers($data){
        $query = 'Select MaKH, ThoiGianBatDau,ThoiGianKetThuc,NoiDungChinhCongTac, TinhTrang From KeHoach ';
        $result = $this->executeQuery($query);
        return $result;
    }

    //get all users of search
    public function searchUser($data){
        $query = 'Select id, username, email, status, group_name, date_created From users Where username like "%'.$data.'%" or email like "%'.$data.'%"';
        $result = $this->executeQuery($query);
        return $result;
    }
    //Insert New User
    public function insertNewUser($data){
        $check = $this->checkDuplicateUser($data);
        if(!$check){
            return false;
        }else {
            $query = 'INSERT INTO sql12203272.KeHoach(NguoiDiCongTac, MaNV,BoPhan, NoiDungChinhCongTac,NoiDen,ThoiGianBatDau,ThoiGianKetThuc,NgayTao)
                   VALUES ("' . $data["nguoicongtac"] . '", "' . $data["manhanvien"]. '", "' . $data["bophan"] . '","' . $data["noidung"] . '","' . $data["noiden"] . '", "' . $data["thoigianbatdau"] . '", "' . $data["thoigianketthuc"] . '", "' . $data["date_created"] . '")';
            $result = $this->insertNew($query1);

            
            return $result;
         
        }
    }

    //check is duplicate user

    public function checkDuplicateUser($data){
        $query = 'Select * From users where username="'.$data['username'].'" or email ="'.$data['email'].'"';
        $result = $this->executeQuery($query);
        if(count($result) > 0){
            return false;
        }else{
            return true;
        }
    }

    //Delete User By Id

    public function deleteUserById($id){
        $query = 'Delete From users where id="'.$id.'"';
        $result = $this->deleteQuery($query);
        return $result;
    }

    //get user ifo by id
    public function getUserInfoById($id){
        $query = 'Select * From KeHoach where MaKH="'.$id.'"';
        $result = $this->executeQuery($query);
        if(count($result) > 0){
            return $result[0];
        }else{
            return false;
        }
    }

    //check user info fo update
    public function checkUserInfoUpdate($data){
        $query = 'Select * From users where (username="'.$data['username'].'" or email ="'.$data['email'].'") and id <> "'.$data['id'].'"';
        $result = $this->executeQuery($query);
        if(count($result) > 0){
            return false;
        }else{
            return true;
        }
    }

    //update user info by id
    public function updateUserById($data){
        $query = 'Update users Set username="'.$data['username'].'", email ="'.$data['email'].'", status ="'.$data['status'].'", group_name ="'.$data['group_name'].'",gender ="'.$data['gender'].'", date_created ="'.$data['date_created'].'" where id="'.$data['id'].'"' ;
        $result = $this->updateQuery($query);
        return $result;
    }



}

