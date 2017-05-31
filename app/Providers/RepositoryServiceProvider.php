<?php

namespace Textil\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(\App\Repositories\ContatosRepository::class, \App\Repositories\ContatosRepositoryEloquent::class);
        $this->app->bind(\Textil\Repositories\CalendarsRepository::class, \Textil\Repositories\CalendarsRepositoryEloquent::class);
        $this->app->bind(\Textil\Repositories\HorariosRepository::class, \Textil\Repositories\HorariosRepositoryEloquent::class);
        $this->app->bind(\Textil\Repositories\CalendarRepository::class, \Textil\Repositories\CalendarRepositoryEloquent::class);
        $this->app->bind(\Textil\Repositories\PessoasRepository::class, \Textil\Repositories\PessoasRepositoryEloquent::class);
        $this->app->bind(\Textil\Repositories\ServicosRepository::class, \Textil\Repositories\ServicosRepositoryEloquent::class);
        $this->app->bind(\Textil\Repositories\ServicoSublimacaoMetroCorridoRepository::class, \Textil\Repositories\ServicoSublimacaoMetroCorridoRepositoryEloquent::class);
        $this->app->bind(\Textil\Repositories\ServicoSublimacaoLocalizadaFullPrintRepository::class, \Textil\Repositories\ServicoSublimacaoLocalizadaFullPrintRepositoryEloquent::class);
        $this->app->bind(\Textil\Repositories\ServicoSilkDigitalDtgKornitRepository::class, \Textil\Repositories\ServicoSilkDigitalDtgKornitRepositoryEloquent::class);
        $this->app->bind(\Textil\Repositories\ServicoWebLogisticaRepository::class, \Textil\Repositories\ServicoWebLogisticaRepositoryEloquent::class);
        $this->app->bind(\Textil\Repositories\FaqRepository::class, \Textil\Repositories\FaqRepositoryEloquent::class);
        //:end-bindings:
    }
}
