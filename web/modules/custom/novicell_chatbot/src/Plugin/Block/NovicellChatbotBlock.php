<?php

namespace Drupal\novicell_chatbot\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Url;

/**
 * Provides a 'Novicell Chatbot' Block.
 *
 * @Block(
 *   id = "novicell_chatbot_block",
 *   admin_label = @Translation("Novicell Chatbot Block"),
 * )
 */
class NovicellChatbotBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    // Provide a simple interface to interact with the chatbot.
    return [
      '#markup' => $this->t('<div id="novicell-chatbot">
                               <p>Chat with the Novicell Chatbot:</p>
                               <input type="text" id="chat-input" placeholder="Type a command...">
                               <button id="chat-send">Send</button>
                               <div id="chat-response"></div>
                             </div>
                             <script>
                               (function ($) {
                                 $("#chat-send").click(function () {
                                   var command = $("#chat-input").val();
                                   $.getJSON("@url", { command: command }, function (data) {
                                     $("#chat-response").html("<p>" + data.message + "</p>");
                                     if (data.latest_updates) {
                                       data.latest_updates.forEach(function (update) {
                                         $("#chat-response").append("<p><a href=\'" + update.link + "\'>" + update.title + "</a></p>");
                                       });
                                     }
                                   });
                                 });
                               })(jQuery);
                             </script>',
        ['@url' => Url::fromRoute('novicell_chatbot.respond')->toString()]),
    ];
  }

}
