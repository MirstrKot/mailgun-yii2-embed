<?php

namespace mirstrkot\mailgun_yii2_embed;

use boundstate\mailgun\Mailer as BoundstateMailer;

class Mailer extends BoundstateMailer
{
    public $messageClass = 'mirstrkot\mailgun_yii2_embed\Message';
}
