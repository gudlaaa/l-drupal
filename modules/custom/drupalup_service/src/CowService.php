<?php

namespace Drupal\drupalup_service;

/**
 * CowService is a simple example of drupla 8 service
 */
class CowService {

    private $sounds = ['Loo', 'MoO'];

    /**
     * Returns a Cow sound
     */
    public function saySomething() {
        return $this->sounds[array_rand($this->sounds)];
    }
}