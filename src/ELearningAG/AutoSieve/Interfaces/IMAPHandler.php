<?php
namespace ELearningAG\AutoSieve\Interfaces;

interface IMAPHandler {
		public function getMessages();
  	    public function setAuthentication($username, $password);
		public function subscribeToMailBox($mailbox);
		public function hasMailbox($mailbox);
		public function createMailBox($mailbox);
}
