<?php

namespace App\Service;

trait DataMessage {

    protected function getMessage($messageType)
    {
        $messageType = $messageType . 'Message';
        $message = [
            'message'   => $this->$messageType()
        ];
        return $message;
    }

    protected function storeMessage()
    {
        return 'Data has been saved.';
    }

    protected function updateMessage()
    {
        return 'Data has been updated.';
    }

    protected function deleteMessage()
    {
        return 'Data has been deleted.';
    }
}