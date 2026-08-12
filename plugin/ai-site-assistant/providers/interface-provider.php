<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Interface for AI providers.
 */
interface AISiteAssistantProviderInterface {

    /**
     * Send a message to the AI provider.
     *
     * @param string $message User message.
     * @param array  $context Optional context.
     * @return string|WP_Error
     */
    public function chat( string $message, array $context = array() );

    /**
     * Check whether the provider is configured.
     *
     * @return bool
     */
    public function is_configured(): bool;
}