<?php

namespace App\Helpers;

class MessageHelper
{
    // رسالة النجاح
    static function getSuccessMessage($defaultMessage = null)
    {
        $defaultMessage = $defaultMessage ?? __('message.Saved Successfully');
        return noty()->addSuccess($defaultMessage);
    }

    // رسالة التحديث
    static function getUpdateMessage($defaultMessage = null)
    {
        $defaultMessage = $defaultMessage ?? __('message.Updated Successfully');
        return noty()->addInfo($defaultMessage);
    }

    // رسالة الحذف
    static function getDeleteMessage($defaultMessage = null)
    {
        $defaultMessage = $defaultMessage ?? __('message.Deleted Successfully');
        return noty()->addError($defaultMessage);
    }
}
