<?php

namespace App\Http\Enums;

enum StatusEnums:string{
    case ENABLED = 'enabled';
    case DISABLED = 'disabled';
    case BANNED = 'banned';

}
