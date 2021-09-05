<?php

  class PageData {

    private $_title;
    private $_content;

    public function __construct(string $title, string $content) {
      if (!$title) {
        throw new InvalidArgumentException('Missing required $title argument');
      }
      if (!$content) {
        throw new InvalidArgumentException('Missing required $content argument');
      }

      $this->setTitle($title);
      $this->setContent($content);
    }

    public function getTitle(): string {
      return $this->_title;
    }

    public function getContent(): string {
      return $this->_content;
    }

    public function setTitle(string $title) {
      $this->_title = $title;
    }

    public function setContent(string $content) {
      $this->_content = $content;
    }

  }