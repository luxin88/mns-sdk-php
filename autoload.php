<?php

$mapping = array(
    'AliyunMNS\Client' => __DIR__ . '/AliyunMNS/Client.php',
    'AliyunMNS\Config' => __DIR__ . '/AliyunMNS/Config.php',
    'AliyunMNS\Constants' => __DIR__ . '/AliyunMNS/Constants.php',
    'AliyunMNS\Queue' => __DIR__ . '/AliyunMNS/Queue.php',
    'AliyunMNS\Topic' => __DIR__ . '/AliyunMNS/Topic.php',
    'AliyunMNS\AsyncCallback' => __DIR__ . '/AliyunMNS/AsyncCallback.php',
    'AliyunMNS\Common\XMLParser' => __DIR__ . '/AliyunMNS/Common/XMLParser.php',
    'AliyunMNS\Exception\MnsException' => __DIR__ . '/AliyunMNS/Exception/MnsException.php',
    'AliyunMNS\Exception\BatchDeleteFailException' => __DIR__ . '/AliyunMNS/Exception/BatchDeleteFailException.php',
    'AliyunMNS\Exception\InvalidArgumentException' => __DIR__ . '/AliyunMNS/Exception/InvalidArgumentException.php',
    'AliyunMNS\Exception\MessageNotExistException' => __DIR__ . '/AliyunMNS/Exception/MessageNotExistException.php',
    'AliyunMNS\Exception\QueueAlreadyExistException' => __DIR__ . '/AliyunMNS/Exception/QueueAlreadyExistException.php',
    'AliyunMNS\Exception\ReceiptHandleErrorException' => __DIR__ . '/AliyunMNS/Exception/ReceiptHandleErrorException.php',
    'AliyunMNS\Exception\BatchSendFailException' => __DIR__ . '/AliyunMNS/Exception/BatchSendFailException.php',
    'AliyunMNS\Exception\MalformedXMLException' => __DIR__ . '/AliyunMNS/Exception/MalformedXMLException.php',
    'AliyunMNS\Exception\QueueNotExistException' => __DIR__ . '/AliyunMNS/Exception/QueueNotExistException.php',
    'AliyunMNS\Exception\TopicAlreadyExistException' => __DIR__ . '/AliyunMNS/Exception/TopicAlreadyExistException.php',
    'AliyunMNS\Exception\TopicNotExistException' => __DIR__ . '/AliyunMNS/Exception/TopicNotExistException.php',
    'AliyunMNS\Exception\SubscriptionAlreadyExistException' => __DIR__ . '/AliyunMNS/Exception/SubscriptionAlreadyExistException.php',
    'AliyunMNS\Exception\SubscriptionNotExistException' => __DIR__ . '/AliyunMNS/Exception/SubscriptionNotExistException.php',
    'AliyunMNS\Http\HttpClient' => __DIR__ . '/AliyunMNS/Http/HttpClient.php',
    'AliyunMNS\Model\DeleteMessageErrorItem' => __DIR__ . '/AliyunMNS/Model/DeleteMessageErrorItem.php',
    'AliyunMNS\Model\Message' => __DIR__ . '/AliyunMNS/Model/Message.php',
    'AliyunMNS\Model\QueueAttributes' => __DIR__ . '/AliyunMNS/Model/QueueAttributes.php',
    'AliyunMNS\Model\MessageAttributes' => __DIR__ . '/AliyunMNS/Model/MessageAttributes.php',
    'AliyunMNS\Model\MailAttributes' => __DIR__ . '/AliyunMNS/Model/MailAttributes.php',
    'AliyunMNS\Model\SmsAttributes' => __DIR__ . '/AliyunMNS/Model/SmsAttributes.php',
    'AliyunMNS\Model\BatchSmsAttributes' => __DIR__ . '/AliyunMNS/Model/BatchSmsAttributes.php',
    'AliyunMNS\Model\WebSocketAttributes' => __DIR__ . '/AliyunMNS/Model/WebSocketAttributes.php',
    'AliyunMNS\Model\TopicAttributes' => __DIR__ . '/AliyunMNS/Model/TopicAttributes.php',
    'AliyunMNS\Model\AccountAttributes' => __DIR__ . '/AliyunMNS/Model/AccountAttributes.php',
    'AliyunMNS\Model\SubscriptionAttributes' => __DIR__ . '/AliyunMNS/Model/SubscriptionAttributes.php',
    'AliyunMNS\Model\UpdateSubscriptionAttributes' => __DIR__ . '/AliyunMNS/Model/UpdateSubscriptionAttributes.php',
    'AliyunMNS\Model\SendMessageRequestItem' => __DIR__ . '/AliyunMNS/Model/SendMessageRequestItem.php',
    'AliyunMNS\Model\SendMessageResponseItem' => __DIR__ . '/AliyunMNS/Model/SendMessageResponseItem.php',
    'AliyunMNS\Signature\Signature' => __DIR__ . '/AliyunMNS/Signature/Signature.php',
    'AliyunMNS\Traits\MessageIdAndMD5' => __DIR__ . '/AliyunMNS/Traits/MessageIdAndMD5.php',
    'AliyunMNS\Traits\MessagePropertiesForPeek' => __DIR__ . '/AliyunMNS/Traits/MessagePropertiesForPeek.php',
    'AliyunMNS\Traits\MessagePropertiesForReceive' => __DIR__ . '/AliyunMNS/Traits/MessagePropertiesForReceive.php',
    'AliyunMNS\Traits\MessagePropertiesForSend' => __DIR__ . '/AliyunMNS/Traits/MessagePropertiesForSend.php',
    'AliyunMNS\Traits\MessagePropertiesForPublish' => __DIR__ . '/AliyunMNS/Traits/MessagePropertiesForPublish.php',
    'AliyunMNS\Requests\BaseRequest' => __DIR__ . '/AliyunMNS/Requests/BaseRequest.php',
    'AliyunMNS\Requests\BatchDeleteMessageRequest' => __DIR__ . '/AliyunMNS/Requests/BatchDeleteMessageRequest.php',
    'AliyunMNS\Requests\BatchPeekMessageRequest' => __DIR__ . '/AliyunMNS/Requests/BatchPeekMessageRequest.php',
    'AliyunMNS\Requests\BatchReceiveMessageRequest' => __DIR__ . '/AliyunMNS/Requests/BatchReceiveMessageRequest.php',
    'AliyunMNS\Requests\BatchSendMessageRequest' => __DIR__ . '/AliyunMNS/Requests/BatchSendMessageRequest.php',
    'AliyunMNS\Requests\ChangeMessageVisibilityRequest' => __DIR__ . '/AliyunMNS/Requests/ChangeMessageVisibilityRequest.php',
    'AliyunMNS\Requests\CreateQueueRequest' => __DIR__ . '/AliyunMNS/Requests/CreateQueueRequest.php',
    'AliyunMNS\Requests\DeleteMessageRequest' => __DIR__ . '/AliyunMNS/Requests/DeleteMessageRequest.php',
    'AliyunMNS\Requests\DeleteQueueRequest' => __DIR__ . '/AliyunMNS/Requests/DeleteQueueRequest.php',
    'AliyunMNS\Requests\GetQueueAttributeRequest' => __DIR__ . '/AliyunMNS/Requests/GetQueueAttributeRequest.php',
    'AliyunMNS\Requests\GetAccountAttributesRequest' => __DIR__ . '/AliyunMNS/Requests/GetAccountAttributesRequest.php',
    'AliyunMNS\Requests\ListQueueRequest' => __DIR__ . '/AliyunMNS/Requests/ListQueueRequest.php',
    'AliyunMNS\Requests\PeekMessageRequest' => __DIR__ . '/AliyunMNS/Requests/PeekMessageRequest.php',
    'AliyunMNS\Requests\ReceiveMessageRequest' => __DIR__ . '/AliyunMNS/Requests/ReceiveMessageRequest.php',
    'AliyunMNS\Requests\SendMessageRequest' => __DIR__ . '/AliyunMNS/Requests/SendMessageRequest.php',
    'AliyunMNS\Requests\SetQueueAttributeRequest' => __DIR__ . '/AliyunMNS/Requests/SetQueueAttributeRequest.php',
    'AliyunMNS\Requests\SetAccountAttributesRequest' => __DIR__ . '/AliyunMNS/Requests/SetAccountAttributesRequest.php',
    'AliyunMNS\Requests\CreateTopicRequest' => __DIR__ . '/AliyunMNS/Requests/CreateTopicRequest.php',
    'AliyunMNS\Requests\DeleteTopicRequest' => __DIR__ . '/AliyunMNS/Requests/DeleteTopicRequest.php',
    'AliyunMNS\Requests\ListTopicRequest' => __DIR__ . '/AliyunMNS/Requests/ListTopicRequest.php',
    'AliyunMNS\Requests\GetTopicAttributeRequest' => __DIR__ . '/AliyunMNS/Requests/GetTopicAttributeRequest.php',
    'AliyunMNS\Requests\SetTopicAttributeRequest' => __DIR__ . '/AliyunMNS/Requests/SetTopicAttributeRequest.php',
    'AliyunMNS\Requests\PublishMessageRequest' => __DIR__ . '/AliyunMNS/Requests/PublishMessageRequest.php',
    'AliyunMNS\Requests\SubscribeRequest' => __DIR__ . '/AliyunMNS/Requests/SubscribeRequest.php',
    'AliyunMNS\Requests\UnsubscribeRequest' => __DIR__ . '/AliyunMNS/Requests/UnsubscribeRequest.php',
    'AliyunMNS\Requests\GetSubscriptionAttributeRequest' => __DIR__ . '/AliyunMNS/Requests/GetSubscriptionAttributeRequest.php',
    'AliyunMNS\Requests\SetSubscriptionAttributeRequest' => __DIR__ . '/AliyunMNS/Requests/SetSubscriptionAttributeRequest.php',
    'AliyunMNS\Requests\ListSubscriptionRequest' => __DIR__ . '/AliyunMNS/Requests/ListSubscriptionRequest.php',
    'AliyunMNS\Responses\BaseResponse' => __DIR__ . '/AliyunMNS/Responses/BaseResponse.php',
    'AliyunMNS\Responses\BatchDeleteMessageResponse' => __DIR__ . '/AliyunMNS/Responses/BatchDeleteMessageResponse.php',
    'AliyunMNS\Responses\BatchPeekMessageResponse' => __DIR__ . '/AliyunMNS/Responses/BatchPeekMessageResponse.php',
    'AliyunMNS\Responses\BatchReceiveMessageResponse' => __DIR__ . '/AliyunMNS/Responses/BatchReceiveMessageResponse.php',
    'AliyunMNS\Responses\BatchSendMessageResponse' => __DIR__ . '/AliyunMNS/Responses/BatchSendMessageResponse.php',
    'AliyunMNS\Responses\ChangeMessageVisibilityResponse' => __DIR__ . '/AliyunMNS/Responses/ChangeMessageVisibilityResponse.php',
    'AliyunMNS\Responses\CreateQueueResponse' => __DIR__ . '/AliyunMNS/Responses/CreateQueueResponse.php',
    'AliyunMNS\Responses\DeleteMessageResponse' => __DIR__ . '/AliyunMNS/Responses/DeleteMessageResponse.php',
    'AliyunMNS\Responses\DeleteQueueResponse' => __DIR__ . '/AliyunMNS/Responses/DeleteQueueResponse.php',
    'AliyunMNS\Responses\GetQueueAttributeResponse' => __DIR__ . '/AliyunMNS/Responses/GetQueueAttributeResponse.php',
    'AliyunMNS\Responses\GetAccountAttributesResponse' => __DIR__ . '/AliyunMNS/Responses/GetAccountAttributesResponse.php',
    'AliyunMNS\Responses\ListQueueResponse' => __DIR__ . '/AliyunMNS/Responses/ListQueueResponse.php',
    'AliyunMNS\Responses\MnsPromise' => __DIR__ . '/AliyunMNS/Responses/MnsPromise.php',
    'AliyunMNS\Responses\PeekMessageResponse' => __DIR__ . '/AliyunMNS/Responses/PeekMessageResponse.php',
    'AliyunMNS\Responses\ReceiveMessageResponse' => __DIR__ . '/AliyunMNS/Responses/ReceiveMessageResponse.php',
    'AliyunMNS\Responses\SendMessageResponse' => __DIR__ . '/AliyunMNS/Responses/SendMessageResponse.php',
    'AliyunMNS\Responses\SetQueueAttributeResponse' => __DIR__ . '/AliyunMNS/Responses/SetQueueAttributeResponse.php',
    'AliyunMNS\Responses\SetAccountAttributesResponse' => __DIR__ . '/AliyunMNS/Responses/SetAccountAttributesResponse.php',
    'AliyunMNS\Responses\CreateTopicResponse' => __DIR__ . '/AliyunMNS/Responses/CreateTopicResponse.php',
    'AliyunMNS\Responses\DeleteTopicResponse' => __DIR__ . '/AliyunMNS/Responses/DeleteTopicResponse.php',
    'AliyunMNS\Responses\ListTopicResponse' => __DIR__ . '/AliyunMNS/Responses/ListTopicResponse.php',
    'AliyunMNS\Responses\GetTopicAttributeResponse' => __DIR__ . '/AliyunMNS/Responses/GetTopicAttributeResponse.php',
    'AliyunMNS\Responses\SetTopicAttributeResponse' => __DIR__ . '/AliyunMNS/Responses/SetTopicAttributeResponse.php',
    'AliyunMNS\Responses\PublishMessageResponse' => __DIR__ . '/AliyunMNS/Responses/PublishMessageResponse.php',
    'AliyunMNS\Responses\SubscribeResponse' => __DIR__ . '/AliyunMNS/Responses/SubscribeResponse.php',
    'AliyunMNS\Responses\UnsubscribeResponse' => __DIR__ . '/AliyunMNS/Responses/UnsubscribeResponse.php',
    'AliyunMNS\Responses\GetSubscriptionAttributeResponse' => __DIR__ . '/AliyunMNS/Responses/GetSubscriptionAttributeResponse.php',
    'AliyunMNS\Responses\SetSubscriptionAttributeResponse' => __DIR__ . '/AliyunMNS/Responses/SetSubscriptionAttributeResponse.php',
    'AliyunMNS\Responses\ListSubscriptionResponse' => __DIR__ . '/AliyunMNS/Responses/ListSubscriptionResponse.php',
);

spl_autoload_register(function ($class) use ($mapping) {
    if (isset($mapping[$class])) {
        require $mapping[$class];
    }
}, true);