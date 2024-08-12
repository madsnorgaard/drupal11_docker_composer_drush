<?php

namespace Drupal\novicell_chatbot\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Provides the chatbot response.
 */
class ChatbotController extends ControllerBase {

  /**
   * Returns a response for the chatbot.
   *
   * @return \Symfony\Component\HttpFoundation\JsonResponse
   *   A JSON response containing chatbot data.
   */
  public function respond() {
    // Information about Mads Nørgaard.
    $about = "Mads Nørgaard is a Tech Lead at Novicell with extensive experience in Drupal development and technical leadership.";

    // Fetching the LinkedIn feed. (Assume it's an RSS feed or JSON).
    $feed_url = 'https://your-linkedin-feed-url.com/feed';
    $feed_data = file_get_contents($feed_url);
    $feed_items = json_decode($feed_data, TRUE);

    // Generate a simple response with the latest updates.
    $latest_updates = [];
    if (!empty($feed_items)) {
      foreach ($feed_items as $item) {
        $latest_updates[] = [
          'title' => $item['title'],
          'link' => $item['link'],
        ];
      }

    }
    else {
      $latest_updates[] = ['message' => 'No updates available at the moment.'];
    }

    // Build the response.
    $response = [
      'message' => 'Hi! I am the Novicell Chatbot. I can provide information about Mads Nørgaard and his activities.',
      'about' => $about,
      'latest_updates' => $latest_updates,
    ];

    return new JsonResponse($response);
  }

}
