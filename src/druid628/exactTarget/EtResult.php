<?php

namespace druid628\exactTarget;

use druid628\exactTarget\EtBaseClass;

class EtResult extends EtBaseClass
{
    public $StatusCode; // String
    public $StatusMessage; // String
    public $OrdinalID; // int
    public $ErrorCode; // int
    public $RequestID; // String
    public $ConversationID; // String
    public $OverallStatusCode; // String
    public $RequestType; // EtRequestType
    public $ResultType; // String
    public $ResultDetailXML; // String
}
