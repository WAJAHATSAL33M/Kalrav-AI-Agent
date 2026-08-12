=== Kalrav-Style AI Agent ===<BR>
<BR>
Tags: ai, chatbot, chat widget, claude, openai<BR>
Requires at least: 6.0<BR>
Tested up to: 6.6<BR>
Requires PHP: 7.4<BR>
Stable tag: 1.0.0<BR>
License: GPLv2 or later<BR>

A floating AI chat widget for WordPress: real-time Q&A, voice input/output, conversation history with download, and answers grounded in your own published content.<BR>

== Description ==<BR>

* Floating chat launcher on the front end, configurable position and accent color.<BR>
* Bring your own API key: choose Anthropic (Claude) or OpenAI in Settings > AI Agent.<BR>
* Answers are grounded in your own pages/posts using WordPress's built-in search — no separate indexing service or embeddings pipeline required.<BR>
* Voice input (speech-to-text) and voice output (text-to-speech) run entirely in the visitor's browser via the Web Speech API — no extra API cost or server component.<BR>
* Visitors can view and download their own conversation as a .txt file.<BR>
* Conversations are stored in a dedicated database table, scoped by a per-visitor session id.<BR>
* Basic per-IP rate limiting on the chat endpoint.<BR>
<BR>
== Installation ==<BR>
<BR>
1. Upload the plugin folder to `/wp-content/plugins/` or install the zip via Plugins > Add New > Upload Plugin.<BR>
2. Activate the plugin.<BR>
3. Go to Settings > AI Agent, pick a provider, paste your API key, and check "Enable widget".<BR>
<BR>
== Notes ==<BR>
<BR>
This plugin requires your own API key from Anthropic or OpenAI, billed to your own account. It does not include any third-party API keys or a hosted backend service.<BR>
<BR>
== Changelog ==<BR>
<BR>
= 1.0.0 =<BR>
* Initial release<BR>
