<?php
use App\Models\Settings;
function settings(){
    $settings = Settings::first();
    return $settings;
}
