<?php
namespace Bitfumes\Contact;
use Illuminate\Support\ServiceProvider;
class ContactServiceProvider extends \Illuminate\Support\ServiceProvider {

    public function boot()
    {
    $this->LoadRoutesFrom(__DIR__.'/routes/web.php');
    $this->loadViewsFrom(__DIR__.'/views','contact');
    }
    public function register()
    {

    }
}
