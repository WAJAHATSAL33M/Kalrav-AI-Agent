=== Kalrav-Style AI Agent ===<BR>
Contributors: you
Tags: ai, chatbot, chat widget, claude, openai
Requires at least: 6.0
Tested up to: 6.6
Requires PHP: 7.4
Stable tag: 1.0.0
License: GPLv2 or later

A floating AI chat widget for WordPress: real-time Q&A, voice input/output, conversation history with download, and answers grounded in your own published content.

== Description ==

* Floating chat launcher on the front end, configurable position and accent color.
* Bring your own API key: choose Anthropic (Claude) or OpenAI in Settings > AI Agent.
* Answers are grounded in your own pages/posts using WordPress's built-in search — no separate indexing service or embeddings pipeline required.
* Voice input (speech-to-text) and voice output (text-to-speech) run entirely in the visitor's browser via the Web Speech API — no extra API cost or server component.
* Visitors can view and download their own conversation as a .txt file.
* Conversations are stored in a dedicated database table, scoped by a per-visitor session id.
* Basic per-IP rate limiting on the chat endpoint.

== Installation ==

1. Upload the plugin folder to `/wp-content/plugins/` or install the zip via Plugins > Add New > Upload Plugin.
2. Activate the plugin.
3. Go to Settings > AI Agent, pick a provider, paste your API key, and check "Enable widget".

== Notes ==

This plugin requires your own API key from Anthropic or OpenAI, billed to your own account. It does not include any third-party API keys or a hosted backend service.

== Changelog ==

= 1.0.0 =
* Initial release.
