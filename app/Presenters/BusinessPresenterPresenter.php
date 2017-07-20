<?php

namespace Textil\Presenters;
use JsonLd\Context;
use Laracasts\Presenter\Presenter;

/**
 * Class BusinessPresenterPresenter
 *
 * @package namespace Textil\Presenters;
 */
class BusinessPresenterPresenter extends Presenter
{
    /**
     * Create JSON-LD object.
     *
     * @return \JsonLd\Context
     */
    public function jsonLd()
    {
        $context_json = Context::create('local_business', [
            'name' => $this->entity->name,
            'description' => $this->entity->description,
            'telephone' => $this->entity->telephone,
            'openingHours' => 'mon,tue,fri',
            'address' => [
                'streetAddress' => $this->entity->address,
                'addressLocality' => $this->entity->city,
                'addressRegion' => $this->entity->state,
                'postalCode' => $this->entity->postalCode,
            ],
            'geo' => [
                'latitude' => $this->entity->location->lat,
                'longitude' => $this->entity->location->lng,
            ],
        ]);

        return view('app.pages.site.main.sublimacao-metro-corrido')->with(['context_json' => $context_json]);
    }
}
