<?php

namespace mirstrkot\mailgun_yii2_embed;

use boundstate\mailgun\Message as BoundstateMessage;

class Message extends BoundstateMessage
{
    public function embed($fileName, array $options = [])
    {
        $attachmentName = !empty($options['fileName']) ? $options['fileName'] : basename($fileName);
        $this->getMessageBuilder()->addInlineImage("@{$fileName}", $attachmentName);
        return 'cid:'.$attachmentName;
    }

}