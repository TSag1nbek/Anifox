<?php
if(!function_exists('user')){
    function _user($user_id)
    {
        $objUser = \App\Models\User::find($user_id);
        if(!$objUser) {
            return abort(404);
        }
        return $objUser;
    }

    function _product($product_id)
    {
        $objProduct = \App\Models\Anime::find($product_id);
        if(!$objProduct) {
            return abort(404);
        }
        return $objProduct;
    }
}
