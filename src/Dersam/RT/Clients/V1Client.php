<?php
/**
 * RTPHPLib
 * User: Sam
 * Date: 4/15/2015
 */
namespace Dersam\RT\Clients;

use Dersam\RT\Client;
use Dersam\RT\Requests\v1\DoCreateTicket;
use Dersam\RT\Requests\v1\GetTicketProperties;

class V1Client extends Client
{
    public function __construct($baseUrl, $user, $pass)
    {
        parent::__construct($baseUrl, $user, $pass);
        $this->url .= "/REST/1.0";
    }

    /**
     * @param string $queue The queue to receive the ticket.
     * @param string $text Ticket content
     * @param array $fields Additional system fields (Subject, Requestor, etc)
     * @param array $custom Custom fields
     * @return bool|\Dersam\RT\Responses\v1\DoCreateTicket
     */
    public function doCreateTicket(
        $queue,
        $text,
        $fields = array(),
        $custom = array()
    ) {
        $request = new DoCreateTicket();
        $request->setCustomFields($custom);
        $request->setList($fields);
        $request->setField('Queue', $queue);
        $request->setField('Text', $text);

        $response = $this->send($request);
        return $response;
    }

    public function doEditTicket()
    {

    }

    public function doReplyTicket()
    {

    }

    public function doCommentTicket()
    {

    }

    /**
     * @param int $ticketId
     * @return bool|\Dersam\RT\Responses\v1\GetTicketProperties
     */
    public function getTicketProperties($ticketId)
    {
        $request = new GetTicketProperties($ticketId);
        return $this->send($request);
    }

    public function getTicketLinks()
    {

    }

    public function doEditTicketLinks()
    {

    }

    public function getTicketAttachments()
    {

    }

    public function getAttachmentMetadata()
    {

    }

    public function getAttachmentContent()
    {

    }

    public function getTicketHistory()
    {

    }

    public function getTicketHistoryNode()
    {

    }

    public function searchI()
    {

    }

    public function searchS()
    {

    }

    public function searchL()
    {

    }

    public function getUserProperties()
    {

    }

    public function getQueueProperties()
    {

    }
}