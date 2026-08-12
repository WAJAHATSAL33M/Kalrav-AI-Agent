<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class AISiteAssistantAnthropic implements AISiteAssistantProviderInterface {

    public function chat( string $message, array $context = array() ) {

        return new WP_Error(
            'not_implemented',
            'Anthropic provider is not implemented yet.'
        );
    }

    public function is_configured(): bool {

        return false;
    }
}