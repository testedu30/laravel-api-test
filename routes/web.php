<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    $jsonString = `[{
  "success": true,
  "code": 200,
  "msg": "ok",
  "data": {
    "is_connected": 1,
     "words": [
      {
        "id": 3477,
        "scrapUrl": "https://megabatteries.com",
        "english": "Toggle menu USD CAD USD Compare Sign in or Register FAQ Contact Us Cart (866) 595-3317 sales@megabatteries.com Search",
        "translateTo": "Toggle menu USD CAD USD Compare Sign in or Register FAQ Contact Us Cart (866) 595-3317 sales@megabatteries.com Search"
      },
      {
        "id": 3478,
        "scrapUrl": "https://megabatteries.com",
        "english": "Toggle menu",
        "translateTo": "Menu à bascule"
      }
      ]
  }
}]`; // aap ka JSON

return $array = json_decode($jsonString, true);
    
});
