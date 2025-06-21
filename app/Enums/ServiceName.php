<?php

namespace App\Enums;

enum ServiceName: string
{
    case JONLI_MUSIQA      = 'To‘y uchun jonli musiqa guruhi';
    case DJ                = 'To‘y uchun DJ xizmatlari';
    case TOYXONA           = 'Zamonaviy to‘yxona zali';
    case CHOYXONA          = 'Choyxona uchun xizmat';
    case KARNAY_SURNAY     = 'Karnay-surnay guruhi';
    case ARTIST            = 'Mashhur artist taklifi';
    case FOTO_VIDEO        = 'Foto va video xizmatlari';
    case AVTOMOBIL         = 'Kortej uchun avtomobil ijarasi';
    case BEZATISH          = 'To‘y bezatish xizmatlari';
    case OSH               = 'Oshpaz xizmatlari';
    case UY_TAMIRLASH      = 'Uy ta’mirlash ustalari';
}
