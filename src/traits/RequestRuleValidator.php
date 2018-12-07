<?php
namespace LynnDigital\RequestRules\Traits;

trait RequestRuleValidator {

    /**
     * Enforces business objectives.
     *
     * @param  array $objectives
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function validate($objectives)
    {
        $messages = tap(collect(), function($messages) use($objectives) {
            collect($objectives)->each(function($objective) use($messages) {
                if(!$objective->passes())
                {
                    $messages->put('business', $objective->message());
                }  
            });
        });
        if (! $messages->isEmpty()) {
            abort(401); //todo: we need to add custom actions
        }
    }
}