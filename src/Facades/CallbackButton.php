<?php


namespace Tii\LaravelTelegramBot\Facades;


use Illuminate\Support\Facades\Facade;

class CallbackButton extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Tii\LaravelTelegramBot\Factories\CallbackButton::class;
    }
}
