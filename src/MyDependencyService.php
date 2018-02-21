<?php

namespace Drupal\nrc_example;

use Drupal\Core\Entity\EntityManageInterface;

/**
 * Service for NRC example.
 */
class MyDependencyService {
  
  protected entity_manage;
  
  public function __construct(EntityManageInterface $entity) {
    $this->entity_manage = $entity;
  }
  
  public function getEntityUserMail($id) {
    $user = $this->entity_manage->getStorage(‘user’)->load($id);
    $user->getEmail();
  }
}
