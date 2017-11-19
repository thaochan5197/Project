<?php
/**
 * Created by PhpStorm.
 * User: thangnm
 * Date: 2/8/2017
 * Time: 7:59 PM
 */
function uploadImage($upload_part ='', $obj_file ='', $is_submit = 0, $max_size = 2048, $file_type = []){
//    $target_dir = "uploads/";
    $uploadOk = 1;
    $result = ['message' => 'default', 'uploadOk' => $uploadOk];
    $result['message'] = 'default';
    $target_dir = $upload_part;
    $target_file = $target_dir . basename($obj_file["image_upload"]["name"]);
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    // Check file is exist
    if(file_exists($target_dir.$obj_file['image_upload']['name'])){
        $uploadOk = 0;
        $result['message'] =  "Image file did exist! Please choice other file!";
        $result['uploadOk'] = $uploadOk;
        return $result;
    }

// Check if image file is a actual image or fake image

    if($is_submit) {
        $check = getimagesize($obj_file["image_upload"]["tmp_name"]);
        if($check !== false) {
            $uploadOk = 1;
            $result['message'] =  "File is an image - " . $check["mime"] . ".";
            $result['uploadOk'] = $uploadOk;
        } else {
            $uploadOk = 0;
            $result['message'] =  "File is not an image.";
            $result['uploadOk'] = $uploadOk;
        }
    }
// Check if file already exists
    /*if (file_exists($target_file)) {
        $uploadOk = 0;
        $result['message'] =  "Sorry, file already exists.";
        $result['uploadOk'] = $uploadOk;
    }*/
// Check file size
    if ($obj_file["image_upload"]["size"] > $max_size) {
        $uploadOk = 0;
        $result['message'] = "Sorry, your file is too large.";
        $result['uploadOk'] = $uploadOk;
    }
// Allow certain file formats
    if(!in_array($imageFileType, $file_type)) {
        $uploadOk = 0;
        $result['message'] = "Sorry, only image files are allowed.";
        $result['uploadOk'] = $uploadOk;
    }
// Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        $result['message'] = "Sorry, your file was not uploaded.";
        $result['uploadOk'] = $uploadOk;
// if everything is ok, try to upload file
    } else {
//        var_dump($_SERVER['DOCUMENT_ROOT']);die;
        if (move_uploaded_file($obj_file["image_upload"]["tmp_name"], $target_file)) {
            $result['message'] = "The file ". basename( $obj_file["image_upload"]["name"]). " has been uploaded.";
        } else {
            $result['message'] = "Sorry, there was an error uploading your file.";
        }
        return $result;
    }
}

//Pagination
function pagination($current_page = 1, $allData = array(), $number_records, $table_name = '', $link ='', $model_obj, $search='' ){

    $from = ($current_page - 1)*$number_records;
    $result = array('paging' => '', 'data' => array());

    if(count($allData) > $number_records){
        $end = floor(count($allData)/$number_records);
        if(count($allData)%$number_records != 0){
            $end ++;
        }

        $query = 'Select * From '.$table_name.' limit '.$from.','.$number_records ;
        $result['data'] = $model_obj->executeQuery($query);

        $preview = '';
        $pages = '';
        $next = '';
        $search_html = '';
        if($search != ''){
           $search_html = '&search_data='.$search;
        }
        if($current_page != 1){
            $preview = '<li class="paginate_button previous" id="datatable_previous">
                            <a href="'.$link.($current_page - 1).$search_html.'" aria-controls="datatable" data-dt-idx="0" tabindex="0">Previous</a>
                        </li>';
        }
        if($current_page != $end){
            $next = '<li class="paginate_button previous" id="datatable_previous">
                            <a href="'.$link.($current_page + 1).$search_html.'" aria-controls="datatable" data-dt-idx="0" tabindex="0">Next</a>
                        </li>';
        }
        for($i = 1; $i <= $end; $i++){
            if($current_page == $i){
                $pages .= '<li class="paginate_button active">
                                <a href="#" aria-controls="datatable" data-dt-idx="1" tabindex="0">'.$i.'</a>
                            </li>';
            }else {
                $pages .= '<li class="paginate_button ">
                                <a href="'. $link . $i . $search_html.'" aria-controls="datatable" data-dt-idx="' . $i . '" tabindex="0">' . $i . '</a>
                            </li>';
            }
        }
        $paging = '
            <table class="table table-striped projects">
                <div class="col-sm-7">
                    <div class="dataTables_paginate paging_simple_numbers" id="datatable_paginate">
                        <ul class="pagination">
                        '.$preview.'
                        '.$pages.'
                        '.$next.'
                        </ul>
                    </div>
                </div>
            </table>
            ';
        $result['paging'] = $paging;
    }

    return $result;
}

//explode array image galleries
function explodeArrayImageGalleries($data = array(), $obj_file = array()){
    $result = array();

    $tmp = array();

    for($i = 0; $i < count($obj_file['name']); $i++){
        $tmp = array('name' => $obj_file['name'][$i],
            'type' => $obj_file['type'][$i],
            'tmp_name' => $obj_file['tmp_name'][$i],
            'error' => $obj_file['error'][$i],
            'size' => $obj_file['size'][$i],
            );
        $result['arr_img'][] = $tmp;
    }
    for($i = 0; $i < count($obj_file['name']); $i++){
        $tmp = array('name' => $data['img_name'][$i],
            'description' => $data['img_desc'][$i],
        );
        $result['arr_data'][] = $tmp;
    }
    return $result;
}