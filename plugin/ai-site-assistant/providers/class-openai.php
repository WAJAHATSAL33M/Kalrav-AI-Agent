<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class AISiteAssistantOpenAI implements AISiteAssistantProviderInterface {

    public function chat( string $message, array $context = array() ) {

        return new WP_Error(
            'not_implemented',
            'OpenAI provider is not implemented yet.'
        );
    }

    public function is_configured(): bool {

        return false;
    }
}