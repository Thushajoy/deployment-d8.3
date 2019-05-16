<?php

namespace Drupal\myteam\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\EventDispatcher\Event;

/**
 * Class MyteamSubscriber.
 */
class MyteamSubscriber implements EventSubscriberInterface {


  /**
   * Constructs a new MyteamSubscriber object.
   */
  public function __construct() {

  }

  /**
   * {@inheritdoc}
   */
  static function getSubscribedEvents() {
    $events['kernel.request'] = ['kernel_request'];
    $events['kernel.response'] = ['response'];

    return $events;
  }

  /**
   * This method is called whenever the kernel.request event is
   * dispatched.
   *
   * @param GetResponseEvent $event
   */
  public function kernel_request(Event $event) {
    drupal_set_message('Event kernel.request thrown by Subscriber in module myteam.', 'status', TRUE);
  }
  /**
   * This method is called whenever the kernel.response event is
   * dispatched.
   *
   * @param GetResponseEvent $event
   */
  public function response(Event $event) {
    drupal_set_message('Event kernel.response thrown by Subscriber in module myteam.', 'status', TRUE);
  }

}
