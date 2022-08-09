<?php

namespace Tjamps\GlsTracking\Rest\Response;

use DateTimeImmutable;
use Doctrine\Common\Collections\ArrayCollection;

class TuParcel
{
    /** @var string  */
    private $status;
    /** @var string  */
    private $trackId;
    /** @var ArrayCollection|TuEvent[] */
    private $events;

    public function __construct(string $status, string $trackId, array $events)
    {
        $this->status = $status;
        $this->trackId = $trackId;
        $this->events = new ArrayCollection();

        foreach ($events as $event) {
            $tuEvent = new TuEvent(
                new DateTimeImmutable($event['timestamp']),
                $event['description'],
                $event['location'],
                $event['country'],
                $event['code']
            );
            $this->events[] = $tuEvent;
        }
    }

    /**
     * @return ArrayCollection|TuEvent[]
     */
    public function getEvents(): ArrayCollection
    {
        return $this->events;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function getTrackId(): string
    {
        return $this->trackId;
    }
}
