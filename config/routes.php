<?php
// delete on server `sindo_kab`!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
    return array(
//        'sindo_kab/account/([a-z]+)/([0-9]+)' => 'account/Index/$1/$2',
        'sindo_kab/account/([0-9]+)' => 'account/Index/$1',
        'sindo_kab/account' => 'account/Index',
        'sindo_kab/registration' => 'registration/index'
    );