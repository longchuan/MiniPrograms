<?php
/**
 * Created by PhpStorm.
 * User: LookUpMan
 * Date: 2018/4/23
 * Time: 16:57
 */

namespace app\api\model;


use think\Model;

class ImageByBanner extends Model
{
    protected $hidden=['from','id'];

    /**
     * 判断是否返回拼接的url
     */
    public function getImageUrlAttr($value,$data){
        if($data['from']==1){//图片类型为1，拼接url
            return config('setting.image_prefix').$value;
        }else{//否则直接返回图片的url
            return $value;
        }
    }
}