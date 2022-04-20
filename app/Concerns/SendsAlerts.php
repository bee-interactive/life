<?php

namespace App\Concerns;

trait SendsAlerts
{
    public function success(string $id = null, $parameters = []) : void
    {
        $this->sendAlert('success', $id, $parameters);
    }

    public function error(string $id = null, $parameters = []) : void
    {
        $this->sendAlert('error', $id, $parameters);
    }

    public function warning(string $id = null, $parameters = []) : void
    {
        $this->sendAlert('warning', $id, $parameters);
    }

    public function info(string $id = null, $parameters = []) : void
    {
        $this->sendAlert('info', $id, $parameters);
    }

    private function sendAlert(string $type, string $id = null, $parameters = []) : void
    {
        flash([
            'title' => __('Confirmation') . ' | ' . config('app.name'),
            $type => trans($id, (array) $parameters),
        ]);
    }
}
