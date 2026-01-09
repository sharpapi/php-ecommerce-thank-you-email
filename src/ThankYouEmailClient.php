<?php

declare(strict_types=1);

namespace SharpAPI\EcommerceThankYou;

use GuzzleHttp\Exception\GuzzleException;
use SharpAPI\Core\Client\SharpApiClient;

/**
 * Generate thank you emails using AI - personalized post-purchase messages
 *
 * @package SharpAPI\EcommerceThankYou
 * @api
 */
class ThankYouEmailClient extends SharpApiClient
{
    public function __construct(
        string $apiKey,
        ?string $apiBaseUrl = 'https://sharpapi.com/api/v1',
        ?string $userAgent = 'SharpAPIPHPEcommerceThankYou/1.0.0'
    ) {
        parent::__construct($apiKey, $apiBaseUrl, $userAgent);
    }

    /**
     * Generate thank you emails using AI - personalized post-purchase messages
     *
     * @param string $content The product content to process
     * @param string $language Output language (default: English)
     * @param int|null $maxQuantity Optional maximum quantity of results
     * @param int|null $maxLength Optional maximum length of generated content
     * @param string|null $voiceTone Optional tone of voice
     * @param string|null $context Optional additional context
     * @return string Status URL for polling the job result
     * @throws GuzzleException
     * @api
     */
    public function generateThankYouEmail(
        string $content,
        string $language = 'English',
        ?int $maxQuantity = null,
        ?int $maxLength = null,
        ?string $voiceTone = null,
        ?string $context = null
    ): string {
        $response = $this->makeRequest('POST', '/ecommerce/thank_you_email', array_filter([
            'content' => $content,
            'language' => $language,
            'max_quantity' => $maxQuantity,
            'max_length' => $maxLength,
            'voice_tone' => $voiceTone,
            'context' => $context,
        ], fn($v) => $v !== null));

        return $this->parseStatusUrl($response);
    }
}
